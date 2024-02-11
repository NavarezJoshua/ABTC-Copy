<?php 

// Fetch the count of male patients from the database

// Victoria
$query = "SELECT 
SUM(CASE WHEN patient_details.Sex = 'Male' THEN 1 ELSE 0 END) as maleCount,
SUM(CASE WHEN patient_details.Sex = 'Female' THEN 1 ELSE 0 END) as femaleCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_records.place_expo = 'Victoria';";

$result = $conn->prepare($query);
$result->execute();
$row = $result->fetch(PDO::FETCH_ASSOC);

if ($row) {
    $mv = $row['maleCount'];
    $fv = $row['femaleCount'];
} else {
    $mv = 0;
    $fv = 0;
}

// Tunasan
$query2 = "SELECT 
SUM(CASE WHEN patient_details.Sex = 'Male' THEN 1 ELSE 0 END) as maleCount,
SUM(CASE WHEN patient_details.Sex = 'Female' THEN 1 ELSE 0 END) as femaleCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_records.place_expo = 'Tunasan';";

$result = $conn->prepare($query2);
$result->execute();
$row = $result->fetch(PDO::FETCH_ASSOC);

if ($row) {
    $mt = $row['maleCount'];
    $ft = $row['femaleCount'];
} else {
    $mt = 0;
    $ft = 0;
}

// Poblacion
$query3 = "SELECT 
SUM(CASE WHEN patient_details.Sex = 'Male' THEN 1 ELSE 0 END) as maleCount,
SUM(CASE WHEN patient_details.Sex = 'Female' THEN 1 ELSE 0 END) as femaleCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_records.place_expo = 'Poblacion';";

$result = $conn->prepare($query3);
$result->execute();
$row = $result->fetch(PDO::FETCH_ASSOC);

if ($row) {
    $mp = $row['maleCount'];
    $fp = $row['femaleCount'];
} else {
    $mp = 0;
    $fp = 0;
}

// Southville
$query4 = "SELECT 
SUM(CASE WHEN patient_details.Sex = 'Male' THEN 1 ELSE 0 END) as maleCount,
SUM(CASE WHEN patient_details.Sex = 'Female' THEN 1 ELSE 0 END) as femaleCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_records.place_expo = 'Southville';";

$result = $conn->prepare($query4);
$result->execute();
$row = $result->fetch(PDO::FETCH_ASSOC);

if ($row) {
    $ms = $row['maleCount'];
    $fs = $row['femaleCount'];
} else {
    $ms = 0;
    $fs = 0;
}

// Putatan_Main
$query5 = "SELECT 
SUM(CASE WHEN patient_details.Sex = 'Male' THEN 1 ELSE 0 END) as maleCount,
SUM(CASE WHEN patient_details.Sex = 'Female' THEN 1 ELSE 0 END) as femaleCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_records.place_expo = 'Putatan Main';";

$result = $conn->prepare($query5);
$result->execute();
$row = $result->fetch(PDO::FETCH_ASSOC);

if ($row) {
    $mpu = $row['maleCount'];
    $fpu = $row['femaleCount'];
} else {
    $mpu = 0;
    $fpu = 0;
}

// Putatan_Annex
$query6 = "SELECT 
SUM(CASE WHEN patient_details.Sex = 'Male' THEN 1 ELSE 0 END) as maleCount,
SUM(CASE WHEN patient_details.Sex = 'Female' THEN 1 ELSE 0 END) as femaleCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_records.place_expo = 'Putatan Annex';";

$result = $conn->prepare($query6);
$result->execute();
$row = $result->fetch(PDO::FETCH_ASSOC);

if ($row) {
    $mpua = $row['maleCount'];
    $fpua = $row['femaleCount'];
} else {
    $mpua = 0;
    $fpua = 0;
}

// Bayanan_Main
$query7 = "SELECT 
SUM(CASE WHEN patient_details.Sex = 'Male' THEN 1 ELSE 0 END) as maleCount,
SUM(CASE WHEN patient_details.Sex = 'Female' THEN 1 ELSE 0 END) as femaleCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_records.place_expo = 'Bayanan Main';";

$result = $conn->prepare($query7);
$result->execute();
$row = $result->fetch(PDO::FETCH_ASSOC);

if ($row) {
    $mba = $row['maleCount'];
    $fba = $row['femaleCount'];
} else {
    $mba = 0;
    $fba = 0;   
}

// Bayanan_Annex
$query8 = "SELECT 
SUM(CASE WHEN patient_details.Sex = 'Male' THEN 1 ELSE 0 END) as maleCount,
SUM(CASE WHEN patient_details.Sex = 'Female' THEN 1 ELSE 0 END) as femaleCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_records.place_expo = 'Bayanan Annex';";

$result = $conn->prepare($query8);
$result->execute();
$row = $result->fetch(PDO::FETCH_ASSOC);

if ($row) {
    $mbannex = $row['maleCount'];
    $fbannex = $row['femaleCount'];
} else {
    $mbannex = 0;
    $fbannex = 0;
}

// Alabang
$query9 = "SELECT 
SUM(CASE WHEN patient_details.Sex = 'Male' THEN 1 ELSE 0 END) as maleCount,
SUM(CASE WHEN patient_details.Sex = 'Female' THEN 1 ELSE 0 END) as femaleCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_records.place_expo = 'Alabang';";

$result = $conn->prepare($query9);
$result->execute();
$row = $result->fetch(PDO::FETCH_ASSOC);

if ($row) {
    $ma = $row['maleCount'];
    $fa = $row['femaleCount'];
} else {
    $ma = 0;
    $fa = 0;
}

// Ayala
$query10 = "SELECT 
SUM(CASE WHEN patient_details.Sex = 'Male' THEN 1 ELSE 0 END) as maleCount,
SUM(CASE WHEN patient_details.Sex = 'Female' THEN 1 ELSE 0 END) as femaleCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_records.place_expo = 'Ayala';";

$result = $conn->prepare($query10);
$result->execute();
$row = $result->fetch(PDO::FETCH_ASSOC);

if ($row) {
    $mayala = $row['maleCount'];
    $fayala = $row['femaleCount'];
} else {
    $mayala = 0;
    $fayala = 0;
}

// Cupang
$query11 = "SELECT 
SUM(CASE WHEN patient_details.Sex = 'Male' THEN 1 ELSE 0 END) as maleCount,
SUM(CASE WHEN patient_details.Sex = 'Female' THEN 1 ELSE 0 END) as femaleCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_records.place_expo = 'Cupang';";

$result = $conn->prepare($query11);
$result->execute();
$row = $result->fetch(PDO::FETCH_ASSOC);

if ($row) {
    $mc = $row['maleCount'];
    $fc = $row['femaleCount'];
} else {
    $mc = 0;
    $fc = 0;
}

// Buli
$query12 = "SELECT 
SUM(CASE WHEN patient_details.Sex = 'Male' THEN 1 ELSE 0 END) as maleCount,
SUM(CASE WHEN patient_details.Sex = 'Female' THEN 1 ELSE 0 END) as femaleCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_records.place_expo = 'Buli';";

$result = $conn->prepare($query12);
$result->execute();
$row = $result->fetch(PDO::FETCH_ASSOC);

if ($row) {
    $mb = $row['maleCount'];
    $fb = $row['femaleCount'];
} else {
    $mb = 0;
    $fb = 0;
}

// Sucat
$query13 = "SELECT 
SUM(CASE WHEN patient_details.Sex = 'Male' THEN 1 ELSE 0 END) as maleCount,
SUM(CASE WHEN patient_details.Sex = 'Female' THEN 1 ELSE 0 END) as femaleCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_records.place_expo = 'Sucat';";

$result = $conn->prepare($query13);
$result->execute();
$row = $result->fetch(PDO::FETCH_ASSOC);

if ($row) {
    $msu = $row['maleCount'];
    $fsu = $row['femaleCount'];
} else {
    $msu = 0;
    $fsu = 0;
}

// Bagong_Silang
$query14 = "SELECT 
SUM(CASE WHEN patient_details.Sex = 'Male' THEN 1 ELSE 0 END) as maleCount,
SUM(CASE WHEN patient_details.Sex = 'Female' THEN 1 ELSE 0 END) as femaleCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_records.place_expo = 'Bagong Silang';";

$result = $conn->prepare($query14);
$result->execute();
$row = $result->fetch(PDO::FETCH_ASSOC);

if ($row) {
    $msilang = $row['maleCount'];
    $fsilang = $row['femaleCount'];
} else {
    $msilang = 0;
    $fsilang = 0;
}

// Sitio_Sto._Niño
$query15 = "SELECT 
SUM(CASE WHEN patient_details.Sex = 'Male' THEN 1 ELSE 0 END) as maleCount,
SUM(CASE WHEN patient_details.Sex = 'Female' THEN 1 ELSE 0 END) as femaleCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_records.place_expo = 'Sitio Sto. Niño';";

$result = $conn->prepare($query15);
$result->execute();
$row = $result->fetch(PDO::FETCH_ASSOC);

if ($row) {
    $mnino = $row['maleCount'];
    $fnino = $row['femaleCount'];
} else {
    $mnino = 0;
    $fnino = 0;
}



?>
