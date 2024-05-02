<form action="src/form.php" method="POST">
    <label for="transaction_number">Transaction Number:</label>
    <input type="text" id="transaction_number" name="transaction_number"><br><br>

    <label for="date">Date:</label>
    <input type="date" id="date" name="date"><br><br>

    <label for="code">Code:</label>
    <select id="code" name="code">
        <option value="100HWE">100HWE</option>
        <option value="101HWE">101HWE</option>
        <option value="102HWE">102HWE</option>
        <option value="103SOP">103SOP</option>
        <option value="104SOP">104SOP</option>
        <option value="105SOP">105SOP</option>
        <option value="106MWP">106MWP</option>
        <option value="107MWP">107MWP</option>
        <option value="108MWP">108MWP</option>
        <option value="109BB">109BB</option>
        <option value="110BB">110BB</option>
        <option value="111BB">111BB</option>
        <option value="112N8">112N8</option>
        <option value="113N8">113N8</option>
        <option value="114N8">114N8</option>
        <option value="115N9">115N9</option>
        <option value="116N9">116N9</option>
        <option value="117N9">117N9</option>
        <option value="118DLK">118DLK</option>
        <option value="119DLK">119DLK</option>
        <option value="120DLK">120DLK</option>
        <option value="121COR">121COR</option>
        <option value="122COR">122COR</option>
        <option value="123COR">123COR</option>
        <option value="124OCC">124OCC</option>
        <option value="125OCC">125OCC</option>
        <option value="126OCC">126OCC</option>
        <option value="127PSB">127PSB</option>
        <option value="128PSB">128PSB</option>
        <option value="129PSB">129PSB</option>
        <option value="130HPDEM">130HPDEM</option>
        <option value="131HPDEM">131HPDEM</option>
        <option value="132HPDEM">132HPDEM</option>
        <option value="133PET">133PET</option>
        <option value="134PET">134PET</option>
        <option value="135PET">135PET</option>
        <option value="136PETSG">136PETSG</option>
        <option value="137B6">137B6</option>
        <option value="138B6">138B6</option>
        <option value="139B6">139B6</option>
        <option value="140B6">140B6</option>
        <option value="141BY">141BY</option>
        <option value="142BY">142BY</option>
        <option value="143BY">143BY</option>
        <option value="144BYB">144BYB</option>
        <option value="145WY">145WY</option>
        <option value="146COM">146COM</option>
        <option value="147COM">147COM</option>
        <option value="148COM">148COM</option>
        <option value="149TIN">149TIN</option>
        <option value="150TIN">150TIN</option>
        <option value="151TIN">151TIN</option>
        <option value="152HPDED">152HPDED</option>
        <option value="153HPDED">153HPDED</option>
        <option value="154TL9J">154TL9J</option>
        <option value="155TL9J">155TL9J</option>
        <option value="156TL9J">156TL9J</option>
        <option value="157LP">157LP</option>
        <option value="158HDPERR">158HDPERR</option>
        <option value="159HDPERR">159HDPERR</option>
        <option value="160HDPERR">160HDPERR</option>
        <option value="161HDPERR">161HDPERR</option>
        <option value="162HDPERR">162HDPERR</option>
        <option value="163PALL">163PALL</option>
        <option value="164PALL">164PALL</option>
    </select><br><br>

    <label for="description">Description:</label>
    <select id="description" name="description">
        <option value="HWE Hard White Envelope">HWE Hard White Envelope</option>
        <option value="SOP Printer's Mix">SOP Printer's Mix</option>
        <option value="MWP Mixed Paper">MWP Mixed Paper</option>
        <option value="Box Board">Box Board</option>
        <option value="News #8">News #8</option>
        <option value="Over Issue News #9">Over Issue News #9</option>
        <option value="DLK (OCC Premium)">DLK (OCC Premium)</option>
        <option value="Cores">Cores</option>
        <option value="OCC Cardboard">OCC Cardboard</option>
        <option value="PSB Mixed Plastic - (RETAIL)">PSB Mixed Plastic - (RETAIL)</option>
        <option value="HDPE - Mixed">HDPE - Mixed</option>
        <option value="PET Plastics">PET Plastics</option>
        <option value="PET Strapping Gaylords">PET Strapping Gaylords</option>
        <option value="Aluminum">Aluminum</option>
        <option value="HPDE Natural">HPDE Natural</option>
        <option value="Baled LDPE - Natural">Baled LDPE - Natural</option>
        <option value="CO-Mingle">CO-Mingle</option>
        <option value="TIN Steel Cans">TIN Steel Cans</option>
        <option value="HDPE Drums">HDPE Drums</option>
        <option value="Tubs and Lids">Tubs and Lids</option>
        <option value="Litho Plates">Litho Plates</option>
        <option value="HDPE - Rigid/Regrind">HDPE - Rigid/Regrind</option>
        <option value="Pallets on Dock">Pallets on Dock</option>
    </select><br><br>

    <label for="type">Type:</label>
    <select id="type" name="type">
        <option value="Inventory">Inventory</option>
    </select><br><br>

    <label for="category">Category:</label>
    <select id="category" name="category">
        <option value="Paper">Paper</option>
        <option value="Plastic">Plastic</option>
        <option value="Metal">Metal</option>
        <option value="Wood">Wood</option>
        <option value="Glass">Glass</option>
    </select><br><br>

    <label for="entrance">Entrance:</label>
    <input type="number" id="entrance" name="entrance"><br><br>

    <button type="submit">Submit</button>
</form>
