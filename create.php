<?php
include_once "vendor/autoload.php";

use JobSite\Template;
use JobSite\Jobs;
$job = new Jobs;

$template = new Template("templates/job-create.php");

$template->title = "Jobs Site by Sayed";

$template->categories = $job->getCategories();

echo $template;