
<?php include_once 'inc/header.php'; ?>
<div class="divhome">
    <div class="jumbotron">
        <h2>Find Your Dream Job</h2>
        <p class="lead">This is a Job Site!</p>
        <a class="btn btn-outline-dark" href="jobs.php" role="button">View All Jobs</a>
        <hr class="my-4">
    </div>
    <h2>Latest Jobs</h2>
    <hr>
    <?php foreach ($jobs as $job): ?>
    <div class="container bg-dark-subtle text-emphasis-dark rounded-4">
        <hr>
        <div class="row marketing">
            <div class="col-md-10">
                <h3><?php echo $job->job_title; ?></h3>
                <p class="small rounded-2 shadow-sm bg-dark btn-secondary text-white p-1"><u class="nav-underline">Company:</u> <b><?php echo $job->company; ?></b>  <b>|</b>   <u class="nav-underline">Job Category:</u> <b><?php echo $job->cname; ?></b>  <b>|</b>   <u class="nav-underline">Location:</u> <b><?php echo $job->location; ?></b><br><u class="nav-underline">Deadline:</u> <b><?php echo date('F j, Y', strtotime($job->deadline)); ?></b></p>
                <p><?php echo $job->description; ?></p>
            </div>
            <div class="col-md-2 align-self-center">
                <a class="btn btn-outline-dark rounded-5" href="jobs.php" role="button"><b>View</b></a>
            </div>
        </div>
        <hr>
    </div>
    <?php endforeach; ?>
</div>
<?php include_once 'inc/footer.php'; ?>