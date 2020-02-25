<?php

// echo "<pre>";
// print_r($_GET);
// echo "</pre>";

$hino300 = [
    [
        id => 1,
        picture => "hino-300/hino-300-3_5.jpg",
        title => "Шасси HINO XZU полной массой 3,5 т"
    ],
    [
        id => 2,
        picture => "hino-300/hino-300-7_5.jpg",
        title => "Шасси HINO XZU полной массой 7,5 т"
    ]    
];
$hino500 = [
    [
        id => 1,
        picture => "hino-500/hino-500-gd.jpg",
        title => "Шасси HINO GD полной массой 12,0т"
    ],
    [
        id => 2,
        picture => "hino-500/hino-500-gh.jpg",
        title => "Шасси HINO GH полной массой 18,0т"
    ],
    [
        id => 3,
        picture => "hino-500/hino-500-fm.jpg",
        title => "Самосвал HINO FM полной массой 26,0т"
    ],
];
$hino700 = [
    [
        id => 1,
        picture => "hino-700/hino-700-fs-30_7.jpg",
        title => "Самосвал HINO FS полной массой 30,7 т"
    ],
    [
        id => 2,
        picture => "hino-700/hino-shassi-700-fs-30_7.jpg",
        title => "Шасси HINO FS полной массой 30,7 т"
    ],
    [
        id => 3,
        picture => "hino-700/hino-shassi-700-fs-30_7.jpg",
        title => "Тягач седельный HINO SS полной массой 28,3т"
    ],
];

if($_GET[model] == "hino300") {
   echo json_encode($hino300);
}
if($_GET[model] == "hino500") {
   echo json_encode($hino500);
}
if($_GET[model] == "hino700") {
   echo json_encode($hino700);
}
?>