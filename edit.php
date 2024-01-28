<?php
include_once "vendor/autoload.php";

use JobSite\Template;
use JobSite\Jobs;
$job = new Jobs;
$job_id = isset($_GET['id']) ? $_GET['id'] : null;
if (isset($_POST['submit'])) {
    //Create Job Data Array
    $jobData = array();
    $jobData['job_title'] = $_POST['job_title'];
    $jobData['company'] = $_POST['company'];
    $jobData['category_id'] = $_POST['category'];
    $jobData['location'] = $_POST['location'];
    $jobData['deadline'] = $_POST['deadline'];
    $jobData['description'] = $_POST['description'];
    $jobData['salary'] = $_POST['salary'];
    $jobData['contact_user'] = $_POST['contact_user'];
    $jobData['contact_email'] = $_POST['contact_email'];
    $jobData['responsibility'] = $_POST['responsibility'];

    if ($job->editJob($job_id, $jobData)) {
        redirect('index.php', 'Job updated successfully', 'success');
    } else {
        redirect('job-create.php', 'Something went wrong', 'error');
    }
}


$template = new Template("templates/job-edit.php");

$template->job = $job->getJobById($job_id);

$template->title = "Jobs Site by Sayed";
$template->categories = $job->getCategories();

echo $template;