<?php
class passwordEncode {

    const HASH_ALGORITHM = 'SHA256';
    const HASH_ITERATIONS = 1024;
    const HASH_LENGTH = 80;

    public function matches($rawPassword, $encodedPassword, $saltPrefixLength = 8) {
        $decodedDigest = pack('H*', $encodedPassword);
        $salt = substr($decodedDigest, 0, $saltPrefixLength);
        $computedDigest = $this->digest($rawPassword, $salt);
        return $decodedDigest === $computedDigest;
    }

    public function encode($rawPassword, $salt = null){
        if (is_null($salt)) {
            $salt = openssl_random_pseudo_bytes(8);
        }
        $computedDigest = $this->digest($rawPassword, $salt);
        return bin2hex($computedDigest);
    }

    private function digest($rawPassword, $salt) {
        $utf8RawPassword = mb_convert_encoding($rawPassword, "UTF-8");
        $digest = $this->sha256Hash($utf8RawPassword, $salt);
        return $salt . $digest;
    }

    private function sha256Hash($password, $salt){
        $password = $salt . $password;
        for ($j = 0; $j < self::HASH_ITERATIONS; $j++) {
            $password = hash(self::HASH_ALGORITHM, $password, true);
        }
        return $password ? substr($password, 0, self::HASH_LENGTH) : $password;
    }

}