<?php include_once "vendor/autoload.php";

use JobSite\Template;
use JobSite\Jobs;

$job = new Jobs();
$template = new Template("templates/job-search.php");

// Search Job
if (isset($_POST['submit'])) {

    $search = $_POST['search'];
    $template->jobs = $job->searchJobs($search);
    $template->searches = $search;
}

$template->title = "Jobs Site by Sayed";
echo $template;