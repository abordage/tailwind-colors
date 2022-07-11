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
    $content[] = "<div class='bg-$color-100 text-$color-600 dark:bg-$color-600 dark:text-$color-900'>$color</div>";
}

file_put_contents('content/index.html', implode("\n", $content));