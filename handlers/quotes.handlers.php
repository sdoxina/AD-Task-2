<?php
function getRandomQuote() {
    $quotes = [
        '"Every moment is a fresh beginning." — T.S. Eliot',
        '"Do what you can, with what you have, where you are." — Theodore Roosevelt',
        '"Creativity is intelligence having fun." — Albert Einstein',
        '"Happiness is handmade."',
        '"In a world full of trends, I want to remain a classic."',
        '"The best way to get things done is to begin." — Unknown',
        '"Art is not a thing, it is a way." — Elbert Hubbard',
        '"Made with love and a little bit of yarn."',
        '"The only way to do great work is to love what you do." — Steve Jobs',
        '"Crochet is cheaper than therapy and you get a blanket out of it."'
    ];
    return $quotes[array_rand($quotes)];
}
?>
