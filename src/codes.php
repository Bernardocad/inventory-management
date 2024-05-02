<?php
$codes = [
    "100HWE", "101HWE", "102HWE", "103SOP", "104SOP", "105SOP",
    "106MWP", "107MWP", "108MWP", "109BB", "110BB", "111BB",
    "112N8", "113N8", "114N8", "115N9", "116N9", "117N9",
    "118DLK", "119DLK", "120DLK", "121COR", "122COR", "123COR",
    "124OCC", "125OCC", "126OCC", "127PSB", "128PSB", "129PSB",
    "130HPDEM", "131HPDEM", "132HPDEM", "133PET", "134PET", "135PET",
    "136PETSG", "137B6", "138B6", "139B6", "140B6", "141BY",
    "142BY", "143BY", "144BYB", "145WY", "146COM", "147COM",
    "148COM", "149TIN", "150TIN", "151TIN", "152HPDED", "153HPDED",
    "154TL9J", "155TL9J", "156TL9J", "157LP", "158HDPERR", "159HDPERR",
    "160HDPERR", "161HDPERR", "162HDPERR", "163PALL", "164PALL"
];

foreach ($codes as $code) {
    echo "<option value=\"$code\">$code</option>";
}
?>
