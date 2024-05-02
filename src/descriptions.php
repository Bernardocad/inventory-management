<?php
$descriptions = [
    "HWE Hard White Envelope", "SOP Printer's Mix", "MWP Mixed Paper",
    "Box Board", "News #8", "Over Issue News #9", "DLK (OCC Premium)",
    "Cores", "OCC Cardboard", "PSB Mixed Plastic - (RETAIL)", "HDPE - Mixed",
    "PET Plastics", "PET Strapping Gaylords", "Aluminum", "HPDE Natural",
    "Baled LDPE - Natural", "CO-Mingle", "TIN Steel Cans", "HDPE Drums",
    "Tubs and Lids", "Litho Plates", "HDPE - Rigid/Regrind", "Pallets on Dock"
];

foreach ($descriptions as $description) {
    echo "<option value=\"$description\">$description</option>";
}
?>
