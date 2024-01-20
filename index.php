<?php
include_once 'vendor/autoload.php';
//include_once 'config/config.php';
use JobSite\Template;
use JobSite\Jobs;

$job = new Jobs();

$template = new Template("templates/frontpage.php");
$template->title = "Jobs Site by Sayed";

//Get Categories
$template->categoryId = isset($_GET['category']) ? $_GET['category'] : null;

if($template->categoryId){
    //Get jobs by category
    $template->jobs = $job->getJobsByCategory($template->categoryId);

    //Get Category Name by ID
    $template->selectedCategory = $job->getCategoryNameById($template->categoryId);

} else {
    //Get all jobs
    $template->jobs = $job->getAllJobs();
}

$template->categories = $job->getCategories();

echo $template;