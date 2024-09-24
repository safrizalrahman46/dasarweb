<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ]
        ]
    ],
    [
        "nama" => "Kuliner"
    ],
    [
        "nama" => "Hiburan"
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ]
];

// Function to display the multi-level menu
function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>{$item['nama']}</li>";
        // Check if the current item has a subMenu
        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu']); // Recursive call
        }
    }
    echo "</ul>";
}

// Call the function to display the menu
tampilkanMenuBertingkat($menu);
?>
