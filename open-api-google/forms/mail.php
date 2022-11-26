<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "fachrizalafandi13@gmail.com";

if(mail($recipient,$subject,$message,$mailheader))
{
  $status = "sukses";
}
else
{
  $status = "gagal";
}


?>

<script>
  top.location.href="<?=$_SESSION["domain"];?>/index.php?status=".$status;
</script>