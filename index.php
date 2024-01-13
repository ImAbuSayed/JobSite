<?php
include_once 'vendor/autoload.php';
use JobSite\Template;

$template = new Template("templates/frontpage.php");
$template->title = "Job Site by Sayed";

echo $template;