<?php include 'inc/header.php'; ?>

<div class="container mt-5 border bg-secondary">
    <center>
        <h1 class="mt-5"> Find A Job </h1>
        <div class="m-3 p-5 text-white rounded">
            <center>
                <form action="index.php" method="GET">
                    <select class="form-control" name="category">
                        <option value="0">Choose Category</option>
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?php echo $category->id ?>"> <?php echo $category->name ?> </option>
                        <?php endforeach ?>
                    </select>
                    <br>
                    <input type="submit" value="View" class="btn btn-lg btn-primary">
                </form>
        </div>
</div>
<h3 class="mt-3"><?php echo $title  ?></h3>
<?php foreach ($jobs as $job) : ?>
    <div class="container mt-4 row">
        <div class="col-md-10">
            <?php // print_r($jobs) 
            ?>
            <h4><?php echo $job->job_title ?></h4>
            <p> <?php echo $job->description ?> </p>
        </div>
        <div class="col-md-2 ps-5 text-end ">
            <a href="job.php?id=<?php echo $job->id?>" class="btn btn-secondary py-3">View</a>
        </div>
    </div>
<?php endforeach ?>

<?php include 'inc/footer.php'; ?>