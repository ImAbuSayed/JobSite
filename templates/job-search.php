<?php include_once 'inc/header.php'; ?>
    <div class="divhome">
        <div class="jumbotron container">
            <h2>Search Result</h2>
        </div>
        <hr class="my-4">
        <?php if (empty($jobs)): ?>
            <h3 class="text-center">No Jobs Found</h3>
        <?php else: ?>
            <?php foreach ($jobs as $job): ?>
                <div class="container bg-dark-subtle text-emphasis-dark rounded-4">
                    <hr>
                    <div class="row marketing">
                        <div class="col-md-10">
                            <h3><?php echo $job->job_title; ?></h3>
                            <p class="small rounded-2 shadow-sm bg-dark btn-secondary text-white p-1"><u class="nav-underline">Company:</u>
                                <b><?php echo $job->company; ?></b> <b>|</b> <u class="nav-underline">Job Category:</u>
                                <b><?php echo $job->cname; ?></b> <b>|</b> <u class="nav-underline">Location:</u>
                                <b><?php echo $job->location; ?></b> |</b> <u class="nav-underline">Salary:</u>
                                <b><?php echo $job->salary; ?></b><br><u class="nav-underline">Deadline:</u>
                                <b><?php echo date('F j, Y', strtotime($job->deadline)); ?></b></p>
                            <p><?php echo $job->description; ?></p>
                        </div>
                        <div class="col-md-2 align-self-center">
                            <a class="btn btn-outline-dark rounded-5" href="job.php?id=<?php echo $job->id; ?>" role="button"><b>View</b></a>
                        </div>
                    </div>
                    <hr>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
<?php include_once 'inc/footer.php'; ?>