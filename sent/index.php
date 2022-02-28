<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stranfin</title>
    <link rel="shortcut icon" href="/shafin.png" type="image/x-icon">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.4/sweetalert2.all.min.js" integrity="sha512-aE/WWAoHkQZnPvRxpkvO3+nYiosvBZTv9AJB/quwn6ETQjQOSpNpaiIhmzbMl4RxVQ1QAGQgbZg2dLLVwf4Dug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  <!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.4/sweetalert2.min.css" integrity="sha512-jtQXcnq6H9BVx+dOsdudNCZmNe2hBMqcPpnVgeZcV9L3615F4+QMQebbWW9TV2otOSk/kQgum0MpWefB3uL3pg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&display=swap');
</style>
</head>

<body style="font-family: 'Josefin Sans', sans-serif !important ;background: rgb(97, 95, 233)">
<?php
$email= $_POST['email'];
$rcv= $_POST['rcv'];
$message= $_POST['message'];
$to = $rcv;
$subject = "Mail From your website";
$txt ="Email = " . $email . "\r\n Message =" . $message;
$headers = "From: no-reply@gmail.com" . "\r\n" .
"CC: no-reply@gmail.com";
if($message!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
echo '<script>
  swal.fire({
    icon: "success",
     title: "Message has been sent",
  showConfirmButton: false,
  timer: 1500   
}).then(function() {
    window.location = "/";
});
</script>';
  

?>
  </body>
  </html>
