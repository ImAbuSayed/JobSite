<?php include_once 'inc/header.php'; ?>
<div class="divhome">
    <div class="jumbotron container">
        <h2>Find Your Dream Job</h2>
        <hr>
        <form class="form-inline my-2 my-lg-0" method="GET" action="index.php">
            <select class="rounded-4 form-control text-center bg-dark text-white" name="category">
                <option value="0">All Categories</option>
                <hr>
                <?php foreach ($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>" <?php echo ($category->id == $categoryId) ? 'selected' : ''; ?>>
                        <?php echo $category->name; ?>
                    </option>
                    <hr>
                <?php endforeach; ?>
            </select>
            <br>
            <input role="button" class="btn btn-outline-dark" type="submit" value="FIND">
        </form>
        <br>
    </div>
    <hr class="my-4">
    <?php
    // show heading latest job by default or show heading selected category name by id matching
    if ($categoryId) {
        echo "<h3 class='text-center'>" . "Latest " . $selectedCategory->name . " Related Jobs" . "</h3>";
    } else {
        echo "<h3 class='text-center'>Latest Jobs</h3>";
    }
    ?>
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
</div>
<?php include_once 'inc/footer.php'; ?>