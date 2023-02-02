<?php include_once 'inc/header.php'; ?>

<div class="container mt-5 border bg-secondary">
    <center>
        <h4 class="mt-5"> Bootstrap 5 Jumbotron example </h4>
        <div class="m-3 p-5 text-white rounded">
            <center>
                <form class="">
                    <input class="form-control me-sm-2" type="search" placeholder="Search">
                    <button type="submit" class="btn btn-primary my-3  px-5 py-2">Search</button>
                </form>
        </div>
</div>
<?php foreach ($jobs as $job) : ?>
    <div class="container mt-4 row">
        <div class="col-md-10">
            <h4><?php echo $job->job_title ?></h4>
            <p> <?php echo $job->description ?> </p>
        </div>
        <div class="col-md-2 ps-5 text-end ">
            <a href="#" class="btn btn-secondary py-3">View</a>
        </div>
    </div>
<?php endforeach ?>


<?php echo $title; ?>

<?php include_once 'inc/footer.php'; ?>