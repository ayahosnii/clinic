<?php

define('PAGINATION_COUNT', 10);


function uploadAttachment($folder, $expensesName, $file)
{
    // Define the desired folder path within the specified filesystem
    $folderName = $expensesName;

    // Store the file with a unique filename in the specified folder
    $filename = $file->store($folderName, $folder);

    return $filename;
}

