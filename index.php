<?php
include_once 'config/init.php';

$template = new Template('templates/frontpage.php');

$template->title = 'latest jpbs';

echo $template;