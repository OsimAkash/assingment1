<?php

function reverseWords(string $sentence): string

{
    // The Sentence into reverseWords
    $words = explode(" ", $sentence);


    // The Characters of each word 

    $reverseWords = array_map('strrev', $words);

    return implode(" ", $reverseWords);
}

// Sample Sentence 
$sentence = " I Love Programming";

$reversedSentence = reverseWords($sentence);

echo " Original Sentence : $sentence\n";
echo "Reversed words:  $reversedSentence";
