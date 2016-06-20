<?php
// get_sorted_content.php
if(!empty($_POST['yourData']))
    echo 'data received!';
else
    echo 'no data received!';
$to = $_POST['yourData'];
$subject = "My subject";
$txt = "HI,

We have recieved an order for your product.

Thanks
Team Candid Knots";
$headers = "From: cbmsce@gmail.com";

if(mail($to,$subject,$txt,$headers))
echo "SUCCESSFULLY sent mail to $to";
else
echo "failed";
?>