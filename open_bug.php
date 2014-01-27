<?php

require_once "bootstrap.php";

$theBugId = $argv[1];

$bug = $entityManager->find("Bug", (int) $theBugId);
$bug->open();

$entityManager->flush();
