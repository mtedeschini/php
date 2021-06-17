<?php


$claveEncriptada = password_hash("admin123", PASSWORD_DEFAULT);

if(password_verify("admin123", $claveEncriptada)){
    echo "la clave es correcta";
}
else{
    echo "la clave es incorrecta";
};

?>
<html>
<head><title>Multiple Submit button Solved with PHP!</title></head>
<body>
<form action="" method="post">
<h2> Hit the Submit Button</h2>
<input type="submit" name="submit1" value="btn1" />
<input type="submit" name="submit2" value="btn2" />
</form>
</body>
</html>