<?php
// show_bug.php <id>
require_once "bootstrap.php";

$id = $argv[1];
$bug = $entityManager->find('Bug', $id);

if ($bug === null) {
    echo "No bug found.\n";
    exit(1);
}

echo "Bug: " . $bug->getDescription() . "\n";
echo "Engineer: " . $bug->getEngineer()->getName() . "\n";
