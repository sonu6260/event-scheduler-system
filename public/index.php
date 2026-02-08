<?php include("../config/db.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>Event Scheduler</title>
<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<h2>Event Scheduler System</h2>
<a href="add_event.php">Add Event</a>
<table>
<tr><th>Title</th><th>Date</th><th>Time</th><th>Action</th></tr>
<?php
$result = mysqli_query($conn,"SELECT * FROM events");
while($row=mysqli_fetch_assoc($result)){
?>
<tr>
<td><?= $row['title'] ?></td>
<td><?= $row['event_date'] ?></td>
<td><?= $row['event_time'] ?></td>
<td>
<a href="edit_event.php?id=<?= $row['id'] ?>">Edit</a> |
<a href="delete_event.php?id=<?= $row['id'] ?>">Delete</a>
</td>
</tr>
<?php } ?>
</table>
</body>
</html>