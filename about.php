<?php

include 'include/header.php'

?>

<br><br><br><br>
<br><br><br><br>
<h3>this is the body section of web page and here lies the main content</h3>

<br><br><br>

<?php
if(!isset($_COOKIE[$cookie_name]))
{
    echo "cookie name is not set";
}
else
{
    echo "cookie".$cookie_name . "is set";
    echo "and the value is" . $cookie_value;
}

if(!isset($_SESSION["userid"]))
{
    echo "<h4> you are not currently authenticated </h4>";
}
else
{
    echo "<br> session is available and you are logged in as:".$_SESSION['userid'];
}
?>

<br><br><br><br>
<br><br><br><br><br>

<?php

include 'include/footer.php'

?>