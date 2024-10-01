<?php
$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quas tempora nulla similique dolorem libero vitae accusamus odio voluptatem eius? Laborum perspiciatis vero explicabo pariatur eligendi sint quaerat? Hic, minima!";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "<p>";
echo "<p>" . strtolower($loremIpsum) . "<p>";
?>