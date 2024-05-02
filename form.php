<label for="transactionNumber">Transaction Number:</label>
<input type="text" id="transactionNumber" required>
<label for="date">Date:</label>
<input type="date" id="date" required>
<label for="code">Code:</label>
<select id="code" required>
    <option value="">Select Code</option>
    <?php include 'codes.php'; ?>
</select>
<label for="description">Description:</label>
<input type="text" id="description" oninput="filterDescription()" list="descriptionList" required>
<datalist id="descriptionList">
    <?php include 'descriptions.php'; ?>
</datalist>
<label for="type">Type:</label>
<input type="text" id="type" readonly>
<label for="category">Category:</label>
<input type="text" id="category" readonly>
<label for="entry">Entry:</label>
<input type="number" id="entry" required>
<button onclick="registerEntry()">Register Entry</button>
