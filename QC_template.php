<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Quality Control daily report</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <table>
            <tr>
                <td>PO Number:</td>
                <td><input type="text" name="po_number">
            </tr>
            <tr>
                <td>Item Number:</td>
                <td><input type="text" name="item_number"></td>
            </tr>
            <tr>
                <td>Factory:</td>
                <td><input type="text" name="factory"></td>
            </tr>
            <tr>
                <td>QC in-Charge:</td>
                <td><input type="text" name="qc_in_charge"></td>
            </tr>
            <tr>
                <td>Date:</td>
                <td><input type="text" name="date"></td>
            </tr>
            <tr>
                <td>Result:</td>
                <td><input type="text" name="result"></td>
            </tr>
            <tr>
            <td colspan="2"><input type=:submit name="submit" value="Submit"></td>
</table>
</form>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve from data
    $po_number = $_POST['po_number'];
    $item_number = $_POST['item_number'];
    $factory = $_POST['factory'];
    $qc_in_charge = $_POST['qc_in_charge'];
    $date = $_POST['date'];
    $result = $_POST['result'];

// Display submitted data in a table 
echo "<h2>Submitted Data:</h2>";
echo "<table border='1'>";
echo "<tr><td>PO Number</td><td>$po_number</td></td>";
echo "<tr><td>Item Number</td><td>$item_number</td></td>";
echo "<tr><td>Factory</td><td>$factory</td></td>";
echo "<tr><td>QC in-Charge</td><td>$qc_in_charge</td></td>";
echo "<tr><td>Date</td><td>$date</td></td>";
echo "<tr><td>Reslt</td><td>$result</td></td>";
}
?>
</body>
</html>