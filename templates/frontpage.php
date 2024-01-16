
<?php include_once 'inc/header.php'; ?>
<div class="divhome">
    <div class="jumbotron">
        <h2>Welcome to Job Site</h2>
        <p class="lead">This is a Job Site</p>
        <a class="btn btn-lg btn-primary" href="jobs.php" role="button">View All Jobs</a>
        <hr class="my-4">
    </div>
    <h2>Latest Jobs</h2>
    <?php foreach ($jobs as $job): ?>
    <div class="container">
        <div class="row marketing">
            <div class="col-md-10">
                <h3><?php echo $job->job_title; ?></h3>
                <p><?php echo $job->description; ?></p>
            </div>
            <div class="col-md-2">
                <a class="btn btn-lg btn-primary" href="jobs.php" role="button">View</a>
            </div>
        </div>
        <hr>
    </div>
    <?php endforeach; ?>
</div>
<?php include_once 'inc/footer.php'; ?>