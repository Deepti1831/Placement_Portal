<?php
include 'php/db.php';
$result = $conn->query("SELECT * FROM jobs");
?>

<h2>Jobs</h2>

<?php while($row = $result->fetch_assoc()) { ?>
<div>
<h3><?php echo $row['company']; ?></h3>
<p><?php echo $row['role']; ?></p>
<p><?php echo $row['salary']; ?></p>
</div>
<?php } ?>