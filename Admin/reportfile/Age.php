<?php 

// Victoria < 15 and > 15
$q1 = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age < 15  AND patient_records.place_expo = 'Victoria';";

$stmtLessThan15 = $conn->prepare($q1);
$stmtLessThan15->execute();
$row = $stmtLessThan15->fetch(PDO::FETCH_ASSOC);

if ($row) {
    $less15 = $row['AgeCount'];
} else {
    $less15 = 0;
}

$quervictoria = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age > 15  AND patient_records.place_expo = 'Victoria';";

$stmt = $conn->prepare($quervictoria);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row) {
    $greatervictoria = $row['AgeCount'];
} else {
    $greatervictoria = 0;
}

// Tunasan < 15 and > 15
$q2 = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age < 15  AND patient_records.place_expo = 'Tunasan';";

$stmt = $conn->prepare($q2);
$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);

if($row){
    $Tunasan = $row ['AgeCount'];
}else{
    $Tunasan = 0;
}

$querytunasan = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age > 15  AND patient_records.place_expo = 'Tunasan';";

$stmt = $conn->prepare($querytunasan);
$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);

if($row){
    $greatertunasan = $row ['AgeCount'];
}else{
    $greatertunasan = 0;
}

// Poblacion < 15 and > 15
$q3 = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age < 15  AND patient_records.place_expo = 'Poblacion';";

$stmt = $conn->prepare($q3);
$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);

if($row){
    $Poblacion = $row ['AgeCount'];
}else{
    $Poblacion = 0;
}

$querypoblacion = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age > 15  AND patient_records.place_expo = 'Poblacion';";

$stmt = $conn->prepare($querypoblacion);
$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);

if($row){
    $greaterPoblacion = $row ['AgeCount'];
}else{
    $greaterPoblacion = 0;
}

// Southville < 15 and > 15
$q4 = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age < 15  AND patient_records.place_expo = 'Southville';";

$stmt = $conn->prepare($q4);
$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);

if($row){
    $Southville = $row ['AgeCount'];
}else{
    $Southville = 0;
}

$querysouthville = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age > 15  AND patient_records.place_expo = 'Southville';";

$stmt = $conn->prepare($querysouthville);
$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);

if($row){
    $greaterSouthville = $row ['AgeCount'];
}else{
    $greaterSouthville = 0;
}

// Putatan_main < 15 and > 15
$q5 = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age < 15  AND patient_records.place_expo = 'Putatan Main';";

$stmt = $conn->prepare($q5);
$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);

if($row){
    $Putatan_Main22 = $row ['AgeCount'];
}else{
    $Putatan_Main22 = 0;
}

$queryputatan = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age > 15  AND patient_records.place_expo = 'Putatan Main';";

$stmt = $conn->prepare($queryputatan);
$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);

if($row){
    $greaterPutatan_Main = $row ['AgeCount'];
}else{
    $greaterPutatan_Main = 0;
}

// Putatan_annex < 15 and > 15
$q6 = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age < 15  AND patient_records.place_expo = 'Putatan Annex';";

$stmt = $conn->prepare($q6);
$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);

if($row){
    $Putatan_Annex22 = $row ['AgeCount'];
}else{
    $Putatan_Annex22 = 0;
}

$queryputatan_annex = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age > 15  AND patient_records.place_expo = 'Putatan Annex';";

$stmt = $conn->prepare($queryputatan_annex);
$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);

if($row){
    $greaterPutatan_Annex = $row ['AgeCount'];
}else{
    $greaterPutatan_Annex = 0;
}


// Bayanan_main < 15 and > 15
$q7 = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age < 15  AND patient_records.place_expo = 'Bayanan Main';";

$stmt = $conn->prepare($q7);
$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);

if($row){
    $Bayanan_Main22 = $row ['AgeCount'];
}else{
    $Bayanan_Main22 = 0;
}

$querybayanan = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age > 15  AND patient_records.place_expo = 'Bayanan Main';";

$stmt = $conn->prepare($querybayanan);
$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);

if($row){
    $greaterBayanan_Main = $row ['AgeCount'];
}else{
    $greaterBayanan_Main = 0;
}

// Bayana_annex < 15 and > 15
$q8 = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age < 15  AND patient_records.place_expo = 'Bayanan Annex';";

$stmt = $conn->prepare($q8);
$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);

if($row){
    $Bayanan_Annex22 = $row ['AgeCount'];
}else{
    $Bayanan_Annex22 = 0;
}

$querybayanan_annex = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age > 15  AND patient_records.place_expo = 'Bayanan Annex';";

$stmt = $conn->prepare($querybayanan_annex);
$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);

if($row){
    $greaterBayanan_Annex = $row ['AgeCount'];
}else{
    $BaygreaterBayanan_Annexanan_Annex = 0;
}

// Alabang < 15 and > 15
$q9 = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age < 15  AND patient_records.place_expo = 'Alabang';";

$stmt = $conn->prepare($q9);
$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);

if($row){
    $Alabang22 = $row ['AgeCount'];
}else{
    $Alabang22 = 0;
}

$queryalabang = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age > 15  AND patient_records.place_expo = 'Alabang';";

$stmt = $conn->prepare($queryalabang);
$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);

if($row){
    $greaterAlabang1 = $row ['AgeCount'];
}else{
    $greaterAlabang1 = 0;
}

// Ayala < 15 and > 15
$q10 = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age < 15  AND patient_records.place_expo = 'Ayala';";

$stmt = $conn->prepare($q10);
$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);

if($row){
    $Ayala = $row ['AgeCount'];
}else{
    $Ayala = 0;
}

$queryayala = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age > 15  AND patient_records.place_expo = 'Ayala';";

$stmt = $conn->prepare($queryayala);
$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);

if($row){
    $greaterAyala = $row ['AgeCount'];
}else{
    $greaterAyala = 0;
}

// Cupang < 15 and > 15
$q11 = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age < 15  AND patient_records.place_expo = 'Cupang';";

$stmt = $conn->prepare($q11);
$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);

if($row){
    $Cupang = $row ['AgeCount'];
}else{
    $Cupang = 0;
}

$querycupang = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age > 15  AND patient_records.place_expo = 'Cupang';";

$stmt = $conn->prepare($querycupang);
$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);

if($row){
    $greaterCupang = $row ['AgeCount'];
}else{
    $greaterCupang = 0;
}


// Buli < 15 and > 15 
$q12 = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age < 15  AND patient_records.place_expo = 'Buli';";

$stmt = $conn->prepare($q12);
$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);

if($row){
    $Buli = $row ['AgeCount'];
}else{
    $Buli = 0;
}

$queryBuli = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age > 15  AND patient_records.place_expo = 'Buli';";

$stmt = $conn->prepare($queryBuli);
$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);

if($row){
    $greaterBuli = $row ['AgeCount'];
}else{
    $greaterBuli = 0;
}

// Sucat < 15  > 15
$q13 = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age < 15  AND patient_records.place_expo = 'Sucat';";

$stmt = $conn->prepare($q13);
$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);

if($row){
    $Sucat22 = $row ['AgeCount'];
}else{
    $Sucat22 = 0;
}

$querysucat = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age > 15  AND patient_records.place_expo = 'Sucat';";

$stmt = $conn->prepare($querysucat);
$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);

if($row){
    $greaterSucat = $row ['AgeCount'];
}else{
    $greaterSucat = 0;
}

// bagong_silang < 15 and > 15
$q14 = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age < 15  AND patient_records.place_expo = 'Bagong Silang';";

$stmt = $conn->prepare($q14);
$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);

if($row){
    $Bagong_Silang = $row ['AgeCount'];
}else{
    $Bagong_Silang = 0;
}

$querybagong = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age > 15  AND patient_records.place_expo = 'Bagong Silang';";

$stmt = $conn->prepare($querybagong);
$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);

if($row){
    $greaterBagong_Silang = $row ['AgeCount'];
}else{
    $greaterBagong_Silang = 0;
}

//Sto < 15 and > 15 
$q15 = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age < 15  AND patient_records.place_expo = 'Sitio Sto. Niño';";

$stmt = $conn->prepare($q15);
$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);

if($row){
    $Sitio22 = $row ['AgeCount'];
}else{
    $Sitio22 = 0;
}

$querysto = "SELECT COUNT(patient_details.Age) as AgeCount
FROM patient_records
INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
WHERE patient_details.Age > 15  AND patient_records.place_expo = 'Sitio Sto. Niño';";

$stmt = $conn->prepare($querysto);
$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);

if($row){
    $greaterSitio = $row ['AgeCount'];
}else{
    $greaterSitio = 0;
}
?>