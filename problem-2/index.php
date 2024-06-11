<?php

function countWordsInFile(string $filename): int
{
    if (!file_exists($filename)) {
        throw new InvalidArgumentException("File '$filename' dose not exist.");
    }

    // Open the file for reading
    $handle = fopen($filename, "r");

    if (!$handle) {
        throw new RuntimeException("Could not open file '$filename'");
    }

    $wordCount = 0;
    while (($line  = fgets($handle)) !== false) {

        $words     = explode(" ", trim($line));

        $wordCount += count($words);
    }

    // Close file handle 
    fclose($handle);

    return $wordCount;
}

// file name here 
$filename = " your_file.txt";

try {
    $wordCount = countWordsInFile($filename);
    echo "Number of words in '$filename' : $wordCount";
} catch (Exception $a) {

    echo "Error:" . $a->getMessage();
}
