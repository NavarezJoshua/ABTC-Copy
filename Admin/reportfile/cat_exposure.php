<?php 
// Cat Expo Victoria 
$q1 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat
FROM patient_records WHERE source_expo = 'Cat' AND patient_records.place_expo = 'Victoria';";

$stmt = $conn->prepare($q1);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $victoria = $row['total_count_Cat'];
}else{
    $victoria = 0;
}

// Cat Expo Tunasan 
$q2 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat
FROM patient_records WHERE source_expo = 'Cat' AND patient_records.place_expo = 'Tunsan';";

$stmt = $conn->prepare($q2);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Tunsan = $row['total_count_Cat'];
}else{
    $Tunsan = 0;
}

// Cat Expo Poblacion 
$q3 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat
FROM patient_records WHERE source_expo = 'Cat' AND patient_records.place_expo = 'Poblacion';";

$stmt = $conn->prepare($q3);
$stmt->execute();
$row =  $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Poblacion = $row['total_count_Cat'];
}else{
    $Poblacion = 0;
}

// Cat Expo Southville
$q4 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat
FROM patient_records WHERE source_expo = 'Cat' AND patient_records.place_expo = 'Southville';";

$stmt = $conn->prepare($q4);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Southville = $row['total_count_Cat'];
}else{
    $Southville = 0;
}

// Cat Expo Putatan_Main 
$q5 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat
FROM patient_records WHERE source_expo = 'Cat' AND patient_records.place_expo = 'Putatan Main';";

$stmt = $conn->prepare($q5);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Putatan_Main = $row['total_count_Cat'];
}else{
    $Putatan_Main = 0;
}

// Cat Expo Putatan_Annex
$q6 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat
FROM patient_records WHERE source_expo = 'Cat' AND patient_records.place_expo = 'Putatan Annex';";

$stmt = $conn->prepare($q6);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Putatan_Annex = $row['total_count_Cat'];
}else{
    $Putatan_Annex = 0;
}

// Cat Expo Bayanan_Main 
$q7 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat 
FROM patient_records WHERE source_expo = 'Cat' AND patient_records.place_expo = 'Bayanan Main';";

$stmt = $conn->prepare($q7);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Bayanan_Main = $row['total_count_Cat'];
}else{
    $Bayanan_Main = 0;
}

// Cat Expo Bayanan_Annex
$q8 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat 
FROM patient_records WHERE source_expo = 'Cat' AND patient_records.place_expo = 'Bayanan Annex';";

$stmt = $conn->prepare($q8);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Bayanan_Annex = $row['total_count_Cat'];
}else{
    $Bayanan_Annex = 0;
}

// Cat Expo Alabang
$q9 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat 
FROM patient_records WHERE source_expo = 'Cat' AND patient_records.place_expo = 'Alabang';";

$stmt = $conn->prepare($q9);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Alabang = $row['total_count_Cat'];
}else{
    $Alabang = 0;
}

// Cat Expo Ayala
$q10 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat 
FROM patient_records WHERE source_expo = 'Cat' AND patient_records.place_expo = 'Ayala';";

$stmt = $conn->prepare($q10);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Ayala = $row['total_count_Cat'];
}else{
    $Ayala = 0;
}

// Cat Expo Cupang
$q11 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat 
FROM patient_records WHERE source_expo = 'Cat' AND patient_records.place_expo = 'Cupang';";

$stmt = $conn->prepare($q11);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Cupang = $row['total_count_Cat'];
}else{
    $Cupang = 0;
}

// Cat Expo Buli
$q12 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat 
FROM patient_records WHERE source_expo = 'Cat' AND patient_records.place_expo = 'Buli';";

$stmt = $conn->prepare($q12);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Buli = $row['total_count_Cat'];
}else{
    $Buli = 0;
}

// Cat Expo Sucat
$q13 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat 
FROM patient_records WHERE source_expo = 'Cat' AND patient_records.place_expo = 'Sucat';";

$stmt = $conn->prepare($q13);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Sucat = $row['total_count_Cat'];
}else{
    $Sucat = 0;
}

// Cat Expo Bagong_Silang
$q14 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat 
FROM patient_records WHERE source_expo = 'Cat' AND patient_records.place_expo = 'Bagong Silang';";

$stmt = $conn->prepare($q14);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Bagong_Silang22 = $row['total_count_Cat'];
}else{
    $Bagong_Silang22 = 0;
}

// Cat Expo Sitio_Sto._Niño
$q15 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat 
FROM patient_records WHERE source_expo = 'Cat' AND patient_records.place_expo = 'Sitio Sto. Niño';";

$stmt = $conn->prepare($q15);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Sitio = $row['total_count_Cat'];
}else{
    $Sitio = 0;
}

// Stray Cat Victoria
$query1 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat 
FROM patient_records WHERE source_expo = 'Stray Cat' AND patient_records.place_expo = 'Victoria';";

$stmt = $conn->prepare($query1);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $strayvictoria = $row['total_count_Cat'];
}else{
    $strayvictoria = 0;
}

// Stray Cat Tunasan
$query2 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat
FROM patient_records WHERE source_expo = 'Stray Cat' AND patient_records.place_expo = 'Tunasan';";

$stmt = $conn->prepare($query2);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $strayTunasan = $row['total_count_Cat'];
}else{
    $strayTunasan = 0;
}

// Stray Cat Poblacion 
$query3 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat
FROM patient_records WHERE source_expo = 'Stray Cat' AND patient_records.place_expo = 'Poblacion';";

$stmt = $conn->prepare($query3);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $strayPoblacion = $row['total_count_Cat'];
}else{
    $strayPoblacion = 0;
}

// Stray Cat Southville
$query4 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat
FROM patient_records WHERE source_expo = 'Stray Cat' AND patient_records.place_expo = 'Southville';";

$stmt = $conn->prepare($query4);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $straySouthville = $row['total_count_Cat'];
}else{
    $straySouthville = 0;
}

// Stray Cat Putatan_Main 
$query5 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat
FROM patient_records WHERE source_expo = 'Stray Cat' AND patient_records.place_expo = 'Putatan Main';";

$stmt = $conn->prepare($query5);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $strayPutatan_Main  = $row['total_count_Cat'];
}else{
    $strayPutatan_Main = 0;
}

// Stray Cat Putatan_Annex
$query6 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat
FROM patient_records WHERE source_expo = 'Stray Cat' AND patient_records.place_expo = 'Putatan Annex';";

$stmt = $conn->prepare($query6);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $strayPutatan_Annex  = $row['total_count_Cat'];
}else{
    $strayPutatan_Annex = 0;
}

// Stray Cat Bayanan_Main
$query7 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat
FROM patient_records WHERE source_expo = 'Stray Cat' AND patient_records.place_expo = 'Bayanan Main';";

$stmt = $conn->prepare($query7);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $strayBayanan_Main = $row['total_count_Cat'];
}else{
    $strayBayanan_Main = 0;
}

// Stray Cat Bayanan_Annex 
$query8 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat 
FROM patient_records WHERE source_expo = 'Stray Cat' AND patient_records.place_expo = 'Bayanan Annex';";

$stmt = $conn->prepare($query8);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $strayBayanan_Annex = $row['total_count_Cat'];
}else{
    $strayBayanan_Annex = 0;
}

// Stray Cat Alabang 
$query9 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat
FROM patient_records WHERE source_expo = 'Stray Cat' AND patient_records.place_expo = 'Alabang';";

$stmt = $conn->prepare($query9);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $strayAlabang = $row['total_count_Cat'];
}else{
    $strayAlabang = 0;
}

// Stray Cat Ayala
$query10 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat
FROM patient_records WHERE source_expo = 'Stray Cat' AND patient_records.place_expo = 'Ayala';";

$stmt = $conn->prepare($query10);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $strayAyala = $row['total_count_Cat'];
}else{
    $strayAyala = 0;
}

// Stray Cat Cupang
$query11 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat 
FROM patient_records WHERE source_expo = 'Stray Cat' AND patient_records.place_expo = 'Cupang';";

$stmt = $conn->prepare($query11);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $strayCupang = $row['total_count_Cat'];
}else{
    $strayCupang = 0;
}

// Stray Cat Buli
$query12 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat
FROM patient_records WHERE source_expo = 'Stray Cat' AND patient_records.place_expo = 'Buli';"; 

$stmt = $conn->prepare($query12);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $strayBuli = $row['total_count_Cat'];
}else{
    $strayBuli = 0;
}

// Stray Cat Sucat
$query13 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat
FROM patient_records WHERE source_expo = 'Stray Cat' AND patient_records.place_expo = 'Sucat';"; 

$stmt = $conn->prepare($query13);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $straySucat = $row['total_count_Cat'];
}else{
    $straySucat = 0;
}

// Stray Cat  Bagong_Silang
$query14 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat
FROM patient_records WHERE source_expo = 'Stray Cat' AND patient_records.place_expo = 'Bagong Silang';"; 

$stmt = $conn->prepare($query14);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $strayBagong_Silang22 = $row['total_count_Cat'];
}else{
    $strayBagong_Silang22 = 0;
}

// Stray Cat Sitio Sto.Nino
$query15 = "SELECT COUNT(patient_records.source_expo) as total_count_Cat
FROM patient_records WHERE source_expo = 'Stray Cat' AND patient_records.place_expo = 'Sitio Sto. Niño';"; 

$stmt = $conn->prepare($query15);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $straysitio = $row['total_count_Cat'];
}else{
    $straysitio = 0;
}


?>