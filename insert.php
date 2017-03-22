<?php

if(!empty($_POST['barcode'])) {

    $host_name  = "db669006600.db.1and1.com";
    $database   = "db669006600";
    $user_name  = "dbo669006600";
    $password   = "coolkid525";










    $dbc = mysqli_connect($host_name, $user_name, $password, $database);

    $testCode = $_POST['barcode'];
    //$testCode = "ABC0-GO";
    $query = "SELECT * from barcodes WHERE barcode='$testCode' LIMIT 1"
    "SELECT timestamp
    FROM 'barcode'
    ORDER BY timestamp ASC";
    $res   = @mysqli_query($dbc, $query);
    $row   = mysqli_fetch_array($res);
    if ($row == 0) {

        $query = "INSERT INTO barcodes (barcode, num, timestamp) VALUES (?, ?, ?)";

        $stmt = mysqli_prepare($dbc, $query);

        $one = 1;
        mysqli_stmt_bind_param($stmt, "ss", $testCode, $one);
        mysqli_stmt_execute($stmt);

    } else {
        $increment = $row["num"] + 1;
        $increment2 = $row[timestamp] + 1;
        $query = "UPDATE barcodes SET num='$increment'SET timestamp = '$increment2' WHERE barcode='$testCode'";
        $dbc->query($query);
    }

    $dbc->close();
}
  header("Location: /");


?>
