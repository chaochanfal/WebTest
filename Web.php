<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=uft-8"/>
</head>
<body>

<form name="form1" method="post" action="">
Test1 :
<input type="text" name="XH1" id="XH"/>
<input type="submit" name="Button" value="Take"/>
</form>
<form name="form2" method="post" action="">
Test2 :
<input type="text" name="XH2" id="XH"/>
<input type="submit" name="Button2" value="Take"/>
</form>

</body>
</html>
<?php

$rank=0;
if(isset($_POST["Button"]))
{
    $rank=$_POST["XH1"];
switch($rank)
{
    case $rank >= 90&& $rank <=100 :
    echo "Good";
    break;
    case $rank >= 70&& $rank <90 :
    echo "OK";
    break;
    case $rank >=60&& $rank <70 :
    echo "Can";
    break;
    case $rank <60 :
    echo "Bad";
    break;
}
}



?>
