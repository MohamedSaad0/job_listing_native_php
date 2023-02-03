<?php include 'inc/header.php'; ?>

<h2 class="page-header mt-5"> <?php echo $job->job_title; ?> (<?php echo $job->location; ?>)</h2>
<small>Posted By: <?php echo $job->contact_user ?> on: <?php echo $job->post_date; ?> </small>
<hr>
<h3>Job Description</h3>
<p class="lead"> <?php echo $job->description; ?> </p>
<h3>Job Details</h3>
<ul class="list-group">
    <li class="list-group-item"> <?php echo $job->company; ?> </li>
    <li class="list-group-item"> <?php echo $job->salary; ?> </li>
    <li class="list-group-item"> <?php echo $job->contact_email; ?> </li>
</ul>

<br><br>
<a href="index.php">Go Back</a>
<br>


<?php include 'inc/footer.php'; ?>