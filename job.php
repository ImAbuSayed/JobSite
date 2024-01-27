<?php
include_once 'vendor/autoload.php';

//include_once 'config/config.php';
use JobSite\Template;
use JobSite\Jobs;

$job = new Jobs;

// Delete Job
if (isset($_POST['del_id'])) {
    $del_id = $_POST['del_id'];
    if ($job->deleteJob($del_id)) {
        redirect('index.php', 'Job deleted successfully', 'success');
    } else {
        redirect('index.php', 'Something went wrong', 'error');
    }
}

$template = new Template("templates/job-single.php");
$template->title = "Jobs Site by Sayed";

//Get Categories
$job_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->job = $job->getJobById($job_id);
//$template->categories = $job->getCategories($job_id);

echo $template;