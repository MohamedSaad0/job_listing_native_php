<?php

include_once 'config/init.php';

$job = new Job;

$template = new Template('templates/frontpage.php');

$template->title = 'latest jpbs';

$template->jobs = $job->getAllJobs();
echo $template;
