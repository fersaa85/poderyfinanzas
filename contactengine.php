<html>
<head>
<meta charset="UTF-8">
</head>
<body>


<?php

$EmailFrom = "Diplomado en Marketing Digital";
$EmailTo = "felixcortesh@gmail.com";
$Subject = "Mensaje de Diplomado en Marketing Digital";
$Name = Trim(stripslashes($_POST['nombre'])); 
$Telefono = Trim(stripslashes($_POST['telefono'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Message = Trim(stripslashes($_POST['mensaje'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Teléfono: ";
$Body .= $Telefono;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=correo.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}



$EmailFrom2 = "Diplomado en Marketing Digital";
$EmailTo2 = "cursos@mercadotecniatotal.com";
$Subject2 = "Mensaje de Diplomado en Marketing Digital";
$Name2 = Trim(stripslashes($_POST['nombre'])); 
$Telefono2 = Trim(stripslashes($_POST['telefono'])); 
$Email2 = Trim(stripslashes($_POST['email'])); 
$Message2 = Trim(stripslashes($_POST['mensaje'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body2 = "";
$Body2 .= "Name: ";
$Body2 .= $Name2;
$Body2 .= "\n";
$Body2 .= "Email: ";
$Body2 .= $Email2;
$Body2 .= "\n";
$Body2 .= "Teléfono: ";
$Body2 .= $Telefono2;
$Body2 .= "\n";
$Body2 .= "Message: ";
$Body2 .= $Message2;
$Body2 .= "\n";

// send email 
$success = mail($EmailTo2, $Subject2, $Body2, "From: <$EmailFrom2>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=correo.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}

?>
</body>
</html>