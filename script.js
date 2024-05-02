var descriptions = [
    { code: "100HWE", description: "HWE Hard White Envelope" },
    { code: "101HWE", description: "HWE Hard White Envelope" },
    { code: "102HWE", description: "HWE Hard White Envelope" },
    { code: "103SOP", description: "SOP Printer's Mix" },
    { code: "104SOP", description: "SOP Printer's Mix" },
    { code: "105SOP", description: "SOP Printer's Mix" },
    { code: "106MWP", description: "MWP Mixed Paper" },
    { code: "107MWP", description: "MWP Mixed Paper" },
    { code: "108MWP", description: "MWP Mixed Paper" },
    { code: "109BB", description: "Box Board" },
    { code: "110BB", description: "Box Board" },
    { code: "111BB", description: "Box Board" },
    { code: "112N8", description: "News #8" },
    { code: "113N8", description: "News #8" },
    { code: "114N8", description: "News #8" },
    { code: "115N9", description: "Over Issue News #9" },
    { code: "116N9", description: "Over Issue News #9" },
    { code: "117N9", description: "Over Issue News #9" },
    { code: "118DLK", description: "DLK (OCC Premium)" },
    { code: "119DLK", description: "DLK (OCC Premium)" },
    { code: "120DLK", description: "DLK (OCC Premium)" },
    { code: "121COR", description: "Cores" },
    { code: "122COR", description: "Cores" },
    { code: "123COR", description: "Cores" },
    { code: "124OCC", description: "OCC Cardboard" },
    { code: "125OCC", description: "OCC Cardboard" },
    { code: "126OCC", description: "OCC Cardboard" },
    { code: "127PSB", description: "PSB Mixed Plastic - (RETAIL)" },
    { code: "128PSB", description: "PSB Mixed Plastic - (RETAIL)" },
    { code: "129PSB", description: "PSB Mixed Plastic - (RETAIL)" },
    { code: "130HPDEM", description: "HDPE - Mixed" },
    { code: "131HPDEM", description: "HDPE - Mixed" },
    { code: "132HPDEM", description: "HDPE - Mixed" },
    { code: "133PET", description: "PET Plastics" },
    { code: "134PET", description: "PET Plastics" },
    { code: "135PET", description: "PET Plastics" },
    { code: "136PETSG", description: "PET Strapping Gaylords" },
    { code: "137B6", description: "Aluminum" },
    { code: "138B6", description: "Aluminum" },
    { code: "139B6", description: "Aluminum" },
    { code: "140B6", description: "Aluminum" },
    { code: "141BY", description: "HPDE Natural" },
    { code: "142BY", description: "HPDE Natural" },
    { code: "143BY", description: "HPDE Natural" },
    { code: "144BYB", description: "HPDE Natural B" },
    { code: "145WY", description: "Baled LDPE - Natural" },
    { code: "146COM", description: "CO-Mingle" },
    { code: "147COM", description: "CO-Mingle" },
    { code: "148COM", description: "CO-Mingle" },
    { code: "149TIN", description: "TIN Steel Cans" },
    { code: "150TIN", description: "TIN Steel Cans" },
    { code: "151TIN", description: "TIN Steel Cans" },
    { code: "152HPDED", description: "HDPE Drums" },
    { code: "153HPDED", description: "HDPE Drums" },
    { code: "154TL9J", description: "Tubs and Lids" },
    { code: "155TL9J", description: "Tubs and Lids" },
    { code: "156TL9J", description: "Tubs and Lids" },
    { code: "157LP", description: "Litho Plates" },
    { code: "158HDPERR", description: "HDPE - Rigid/Regrind" },
    { code: "159HDPERR", description: "HDPE - Rigid/Regrind" },
    { code: "160HDPERR", description: "HDPE - Rigid/Regrind" },
    { code: "161HDPERR", description: "HDPE - Rigid/Regrind" },
    { code: "162HDPERR", description: "HDPE - Rigid/Regrind" },
    { code: "163PALL", description: "Pallets on Dock" },
    { code: "164PALL", description: "Pallets on Dock" }
];

function filterDescription() {
    var input, filter, datalist, option;
    input = document.getElementById('description');
    filter = input.value.toUpperCase();
    datalist = document.getElementById('descriptionList');
    option = datalist.getElementsByTagName('option');
    for (var i = 0; i < option.length; i++) {
        var val = option[i].value.toUpperCase();
        var codeVal = val.substr(0, 3);
        if (val.indexOf(filter) > -1 || codeVal.indexOf(filter) > -1) {
            option[i].style.display = "";
        } else {
            option[i].style.display = "none";
        }
    }
}

function registerEntry() {
    var transactionNumber = document.getElementById('transactionNumber').value;
    var date = document.getElementById('date').value;
    var code = document.getElementById('code').value;
    var description = document.getElementById('description').value;
    var type = document.getElementById('type').value;
    var category = document.getElementById('category').value;
    var entry = parseInt(document.getElementById('entry').value);

    // ID of your Google Sheets spreadsheet
    var spreadsheetId = '1h4JU1gMiLAXUwXulcIKLHz145klHfD9c-vNkkjUxL-I';

    var url = 'https://script.google.com/macros/s/AKfycbzf2Dflm0tnGiDxFLou2Yn5kCgJ1kkF1q8d2eV/exec';
    var xhr = new XMLHttpRequest();
    xhr.open("POST", url);

    // Set up a POST request with JSON payload
    xhr.setRequestHeader("Content-Type", "application/json");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                // Optionally alert the user of success here...
                alert('Entry Registered Successfully!');
            } else {
                // Optionally alert the user of failure here...
                alert('Entry Registration Failed!');
            }
        }
    };

    // Send the JSON data
    var data = JSON.stringify({
        "transactionNumber": transactionNumber,
        "date": date,
        "code": code,
        "description": description,
        "type": type,
        "category": category,
        "entry": entry,
        "spreadsheetId": spreadsheetId
    });
    xhr.send(data);
}
