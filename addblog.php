<?php

include 'include/header.php';

?>

<form action="config/insert_in_db.php" method="post">

<label for="">Title: <input type="text" name="titlee" id=""></label>
<br><br>
<label for="">Content: <input type="text" name="contentt" id=""></label>
<br><br>
<button type="submit" name="submit">creat blog</button>
</form>

<?php

include 'include/footer.php';

?>
