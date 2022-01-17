<?php
system("clear"); //Clear the console.
$phrase = readline("Enter the word/sentence or morse code you want to translate: \n");
$regular_text = preg_match('/[^\.\s\/|-]/', $phrase); // Determine whether the user is writing morse code or not.
$alphahbet = [
    'A' => '.-',
    'B' => '-...',
    'C' => '-.-.',
    'D' => '-..',
    'E' => '.',
    'F' => '..-.',
    'G' => '--.',
    'H' => '....',
    'I' => '..',
    'J' => '.---',
    'K' => '-.-',
    'L' => '.-..',
    'M' => '--',
    'N' => '-.',
    'O' => '---',
    'P' => '.--.',
    'Q' => '--.-',
    'R' => '.-.',
    'S' => '...',
    'T' => '-',
    'U' => '..-',
    'V' => '...-',
    'W' => '.--',
    'X' => '-..-',
    'Y' => '-.--',
    'Z' => '--..',
    '0' => '-----',
    '1' => '.----',
    '2' => '..---',
    '3' => '---..',
    '4' => '....-',
    '5' => '.....',
    '6' => '-.....',
    '7' => '--...',
    '8' => '---..',
    '9' => '----.',
    '.' => '.-.-.-',
    ',' => '--..--',
    ':' => '---...',
    '?' => '..--..',
    '-' => '-....-',
    '\'' => '.----.',
    ' ' => '|',
    ' ' => '/'
];
if ($regular_text)
    foreach (str_split($phrase) as $character)
        echo $alphahbet[strtoupper($character)]. ' ';
else 
    foreach (explode(' ', $phrase) as $letter)
        echo array_keys($alphahbet, $letter)[0];
echo "\n";