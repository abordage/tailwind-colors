<?php

$colors = [
    'slate',
    'gray',
    'zinc',
    'neutral',
    'stone',
    'red',
    'orange',
    'amber',
    'yellow',
    'lime',
    'green',
    'emerald',
    'teal',
    'cyan',
    'sky',
    'blue',
    'indigo',
    'violet',
    'purple',
    'fuchsia',
    'pink',
    'rose',
];

$content = [];
foreach ($colors as $color) {
    $content[] = "<div class='bg-$color-100 text-$color-600 dark:bg-$color-500 dark:text-$color-900'>$color</div>";
}

// Add your classes here
// $content = ["<div class='bg-brightness-75 skew-x-3 ...'>content</div>"];


file_put_contents('content/index.html', implode("\n", $content));