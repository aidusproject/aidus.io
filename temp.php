
$filename = "send_message_example.txt";
$reail_filename = urldecode("send_message_example.txt");
$file_dir = "../download/".$filename;

header('Content-Type: application/x-octetstream');
header('Content-Length: '.filesize($file_dir));
header('Content-Disposition: attachment; filename='.$reail_filename);
header('Content-Transfer-Encoding: binary');

$fp = fopen($file_dir, "r");
fpassthru($fp);
fclose($fp);
