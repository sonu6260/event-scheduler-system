<?php include("../config/db.php"); ?>
<form method="POST">
<input name="title" placeholder="Title" required>
<input type="date" name="event_date" required>
<input type="time" name="event_time" required>
<button name="save">Save</button>
</form>
<?php
if(isset($_POST['save'])){
mysqli_query($conn,"INSERT INTO events(title,event_date,event_time)
VALUES('{$_POST['title']}','{$_POST['event_date']}','{$_POST['event_time']}')");
header("Location:index.php");
}
?>