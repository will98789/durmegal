<?php
echo ("done :)");
if( isset($_POST['name'] ) && isset( $_POST['email'] ) )
{
    $txt= $_POST['name'].','.$_POST['email'].','.$_POST['football'].','.$_POST['badminton'].','.$_POST['rowing'].','.$_POST['netball'].','.$_POST['comedy'].','.$_POST['romcom'].','.$_POST['thriller'].','.$_POST['reading'].','.$_POST['painting'].','.$_POST['writing'] . PHP_EOL; 
    file_put_contents('data.txt', $txt, FILE_APPEND);
}
?>
