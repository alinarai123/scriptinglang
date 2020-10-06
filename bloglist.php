<?php
include_once 'config/db_conn.php';

include 'include/header.php'

?>

<h3><a href="addblog.php">Creat New Blog</a></h3>

<br>

<?php
$sqlquery = "SELECT * FROM blogs;";
$data = mysqli_query($conn, $sqlquery);

foreach ($data as $unitdata):?>
<h5>
<?php
    echo $unitdata['id'];?>
</h5> 

<h1>
<?php
    echo $unitdata['title'];?>
</h1>    

<p>
<?php
    echo $unitdata['detail'];?>
</p> 
<a href="#">Read More</a>

<?php endforeach ;?>




?>

<?php

include 'include/footer.php'

?>