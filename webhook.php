<?php
// chdir("source-files/"); // Move into the repository directory
$output = [];
$return_value = [];
exec("git pull origin master",$output , $return_value); // Get changes from the remote repository
$msg = "Output:\n" .implode("\n",$output) ."\nReturn value: " . implode("\n", $return_value);
mail("fabiantheblind@gmail.com", "webhook picotor executed",$msg);
// exec("git reset --hard origin/master"); // Update working copy, discarding all local changes
// exec("export GEM_HOME=/gem/home/path; /gem/home/path/bin/jekyll ../../site"); // Run Jekyll
?>