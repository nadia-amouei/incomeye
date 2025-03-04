<?php

$files = ['user.php', 'category.php', 'income.php' ];
foreach ($files as $file) {
    echo "Running migration: $file\n";
    require __DIR__ . "/$file";
    echo "Migration $file completed!\n\n";
}