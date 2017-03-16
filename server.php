<?php
echo "Je suis dans le serveur \n";
echo "Name :"  .$_POST['name']."\n";
echo "Location : ".$_POST['location']."\n";
if ($_POST['name'] == "John"){
    echo "Le nom est correct";

}
else {
    echo "Le nom est incorrect";
}
?>