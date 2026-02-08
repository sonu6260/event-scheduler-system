<?php include("../config/db.php");
$id=$_GET['id'];
$data=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM events WHERE id=$id"));
?>
<form method="POST">
<input name="title" value="<?= $data['title'] ?>">
<input type="date" name="event_date" value="<?= $data['event_date'] ?>">
<input type="time" name="event_time" value="<?= $data['event_time'] ?>">
<button name="update">Update</button>
</form>
<?php
if(isset($_POST['update'])){
mysqli_query($conn,"UPDATE events SET 
title='{$_POST['title']}',
event_date='{$_POST['event_date']}',
event_time='{$_POST['event_time']}' WHERE id=$id");
header("Location:index.php");
}
?>