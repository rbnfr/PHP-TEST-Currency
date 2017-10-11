<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>MVC test: Currency</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<h1>
    MVC test: Currency
</h1>
<fieldset>
    <label></label>
    <form name="form" action="" method="post">
        Currency:
        <select name="input[]" required>
            <option value="Select" disabled>Select</option>
            <option value="EUR" selected>EUR</option>
            <option value="USD">USD</option>
            <option value="JPY">YEN</option>
            <option value="GBP">GBP</option>
        </select><br>
        Amount:
        <input type="text" name="input[]" id="amount" value="100"><br>
        <input type="submit" value="Do"><br><br>
    </form>


<?php
require '../model/CurrencyConverter.php';
require '../controllers/currencyController.php';
require '../model/Debug.php';


$currencyConverter1 = new CurrencyConverter;
$currencyConverter1->print_results();
$debugger = new Debug;
$debugger->console('Done');

?>
</fieldset>

</body>
</html>