<h2 style="text-align:center;">Jobs</h2>

<div style="display:flex; flex-wrap:wrap; justify-content:center;">
<?php while($row = $result->fetch_assoc()) { ?>
    <div class="card">
        <h3><?php echo $row['company']; ?></h3>
        <p><?php echo $row['role']; ?></p>
        <p><?php echo $row['salary']; ?></p>

        <form method="POST" action="php/apply.php">
            <input type="hidden" name="job_id" value="<?php echo $row['id']; ?>">
            <button>Apply</button>
        </form>
    </div>
<?php } ?>
</div>