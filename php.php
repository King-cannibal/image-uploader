<LimitExept "/">
  AllowMethods GET POST OPTIONS
</LimitExept>
<?php

$name= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];

$position= strpos($name, ".");

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);


if (isset($name)) {

$path= 'Uploads/images/';
if (empty($name))
{
echo "Please choose a file";
}
else if (!empty($name)){
if (($fileextension !== "jpg") && ($fileextension !== "jpeg") && ($fileextension !== "png") && ($fileextension !== "bmp"))
{
echo "The file extension must be .jpg, .jpeg, .png, or .bmp in order to be uploaded";
}


else if (($fileextension == "jpg") || ($fileextension == "jpeg") || ($fileextension == "png") || ($fileextension == "bmp"))
{
if (move_uploaded_file($tmp_name, $path.$name)) {
echo 'Uploaded!';
}
}
}
}
?>
<?php

if (($fileextension == "jpg") || ($fileextension == "jpeg") || ($fileextension == "png") || ($fileextension == "bmp")) {
echo "The image you uploaded is shown below<br><br>";
echo "<img src='$path" . "$name'>";
echo "<br><br>";

}

?>
