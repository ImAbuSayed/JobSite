<?php
include_once 'vendor/autoload.php';
include_once 'config/config.php';
use JobSite\Template;
use JobSite\Job;
use JobSite\Database;

$job = new Job();

$template = new Template("templates/frontpage.php");

$template->title = "Job Site by Sayed";
$template->jobs = $job->getAllJobs();

echo $template;