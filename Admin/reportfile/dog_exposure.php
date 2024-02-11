<?php 
// Dog Expo Victoria 
$q1 = "SELECT COUNT(patient_records.source_expo) as total_count_Dog 
FROM patient_records WHERE source_expo = 'Dog' AND patient_records.place_expo = 'Victoria';";

$stmt = $conn->prepare($q1);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $victoria1 = $row['total_count_Dog'];
}else{
    $victoria1 = 0;
}

// Dog Expo Tunasan 
$q2 = "SELECT COUNT(patient_records.source_expo) as total_count_Dog 
FROM patient_records WHERE source_expo = 'Dog' AND patient_records.place_expo = 'Tunasan';";

$stmt = $conn->prepare($q2);
$stmt->execute();
$row = $totalDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Tunasan1 = $row['total_count_Dog'];
}else{
    $Tunasan1 = 0;
}

// Dog Expo Poblacion 
$q3 = "SELECT COUNT(patient_records.source_expo) as total_count_Dog 
FROM patient_records WHERE source_expo = 'Dog' AND patient_records.place_expo = 'Poblacion';";

$stmt = $conn->prepare($q3);
$stmt->execute();
$row = $totalDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Poblacion1 = $row['total_count_Dog'];
}else{
    $Poblacion1 = 0;
}

// Dog Expo Southville
$q4 = "SELECT COUNT(patient_records.source_expo) as total_count_Dog 
FROM patient_records WHERE source_expo = 'Dog' AND patient_records.place_expo = 'Southville';";

$stmt = $conn->prepare($q4);
$stmt->execute();
$row = $totalDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Southville1 = $row['total_count_Dog'];
}else{
    $Southville1 = 0;
}

// Dog Expo Putatan_Main 
$q5 = "SELECT COUNT(patient_records.source_expo) as total_count_Dog 
FROM patient_records WHERE source_expo = 'Dog' AND patient_records.place_expo = 'Putatan Main';";

$stmt = $conn->prepare($q5);
$stmt->execute();
$row = $totalDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Putatan_Main1 = $row['total_count_Dog'];
}else{
    $Putatan_Main1 = 0;
}

//Dog Expo Putatan_Annex
$q6 = "SELECT COUNT(patient_records.source_expo) as total_count_Dog 
FROM patient_records WHERE source_expo = 'Dog' AND patient_records.place_expo = 'Putatan Annex';";

$stmt = $conn->prepare($q6);
$stmt->execute();
$row = $totalDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Putatan_Annex1 = $row['total_count_Dog'];
}else{
    $Putatan_Annex1 = 0;
}

//Dog Expo Bayanan_Main 
$q7 = "SELECT COUNT(patient_records.source_expo) as total_count_Dog 
FROM patient_records WHERE source_expo = 'Dog' AND patient_records.place_expo = 'Bayanan Main';";

$stmt = $conn->prepare($q7);
$stmt->execute();
$row = $totalDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Bayanan_Main1 = $row['total_count_Dog'];
}else{
    $Bayanan_Main1 = 0;
}

// Dog Expo Bayanan_Annex
$q8 = "SELECT COUNT(patient_records.source_expo) as total_count_Dog 
FROM patient_records WHERE source_expo = 'Dog' AND patient_records.place_expo = 'Bayanan Annex';";

$stmt = $conn->prepare($q8);
$stmt->execute();
$row = $totalDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Bayanan_Annex1 = $row['total_count_Dog'];
}else{
    $Bayanan_Annex1 = 0;
}

// Dog Expo Alabang
$q9 = "SELECT COUNT(patient_records.source_expo) as total_count_Dog 
FROM patient_records WHERE source_expo = 'Dog' AND patient_records.place_expo = 'Alabang';";

$stmt = $conn->prepare($q9);
$stmt->execute();
$row = $totalDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Alabang1 = $row['total_count_Dog'];
}else{
    $Alabang1 = 0;
}

// Dog Expo Ayala
$q10 = "SELECT COUNT(patient_records.source_expo) as total_count_Dog 
FROM patient_records WHERE source_expo = 'Dog' AND patient_records.place_expo = 'Ayala';";

$stmt = $conn->prepare($q10);
$stmt->execute();
$row = $totalDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Ayala1 = $row['total_count_Dog'];
}else{
    $Ayala1 = 0;
}

// Dog Expo Cupang
$q11 = "SELECT COUNT(patient_records.source_expo) as total_count_Dog 
FROM patient_records WHERE source_expo = 'Dog' AND patient_records.place_expo = 'Cupang';";

$stmt = $conn->prepare($q11);
$stmt->execute();
$row = $totalDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Cupang1 = $row['total_count_Dog'];
}else{
    $Cupang1 = 0;
}

// Dog Expo Buli
$q12 = "SELECT COUNT(patient_records.source_expo) as total_count_Dog 
FROM patient_records WHERE source_expo = 'Dog' AND patient_records.place_expo = 'Buli';";

$stmt = $conn->prepare($q12);
$stmt->execute();
$row = $totalDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Buli1 = $row['total_count_Dog'];
}else{
    $Buli1 = 0;
}

// Dog Expo Sucat
$q13 = "SELECT COUNT(patient_records.source_expo) as total_count_Dog 
FROM patient_records WHERE source_expo = 'Dog' AND patient_records.place_expo = 'Sucat';";

$stmt = $conn->prepare($q13);
$stmt->execute();
$row = $totalDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Sucat1 = $row['total_count_Dog'];
}else{
    $Sucat1 = 0;
}

// Dog Expo Bagong_Silang
$q14 = "SELECT COUNT(patient_records.source_expo) as total_count_Dog 
FROM patient_records WHERE source_expo = 'Dog' AND patient_records.place_expo = 'Bagong Silang';";

$stmt = $conn->prepare($q14);
$stmt->execute();
$row = $totalDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Bagong_Silang1 = $row['total_count_Dog'];
}else{
    $Bagong_Silang1 = 0;
}

// Dog Expo Sitio_Sto._Niño
$q15 = "SELECT COUNT(patient_records.source_expo) as total_count_Dog 
FROM patient_records WHERE source_expo = 'Dog' AND patient_records.place_expo = 'Sitio Sto. Niño';";

$stmt = $conn->prepare($q15);
$stmt->execute();
$row = $totalDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Sitio1 = $row['total_count_Dog'];
}else{
    $Sitio1 = 0;
}

// Stray Dog Victoria
$query1 = "SELECT COUNT(patient_records.source_expo) as total_count_Straydog
FROM patient_records WHERE source_expo = 'Stray Dog' AND patient_records.place_expo = 'Victoria';";

$stmt = $conn->prepare($query1);
$stmt->execute();
$row = $totalStrayDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $strayvictoria1 = $row['total_count_Straydog'];
}else{
    $strayvictoria1 = 0;
}

// Stray Dog Tunasan
$query2 = "SELECT COUNT(patient_records.source_expo) as total_count_Straydog
FROM patient_records WHERE source_expo = 'Stray Dog' AND patient_records.place_expo = 'Tunasan';";

$stmt = $conn->prepare($query2);
$stmt->execute();
$row = $totalStrayDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $strayTunasan1 = $row['total_count_Straydog'];
}else{
    $strayTunasan1 = 0;
}

// Stray Dog Poblacion 
$query3 = "SELECT COUNT(patient_records.source_expo) as total_count_Straydog
FROM patient_records WHERE source_expo = 'Stray Dog' AND patient_records.place_expo = 'Poblacion';";

$stmt = $conn->prepare($query3);
$stmt->execute();
$row = $totalStrayDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $strayPoblacion1 = $row['total_count_Straydog'];
}else{
    $strayPoblacion1 = 0;
}

// Stray Dog Southville
$query4 = "SELECT COUNT(patient_records.source_expo) as total_count_Straydog
FROM patient_records WHERE source_expo = 'Stray Dog' AND patient_records.place_expo = 'Southville';";

$stmt = $conn->prepare($query4);
$stmt->execute();
$row = $totalStrayDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $straySouthville1 = $row['total_count_Straydog'];
}else{
    $straySouthville1 = 0;
}

// Stray Dog Putatan_Main 
$query5 = "SELECT COUNT(patient_records.source_expo) as total_count_Straydog
FROM patient_records WHERE source_expo = 'Stray Dog' AND patient_records.place_expo = 'Putatan Main';";

$stmt = $conn->prepare($query5);
$stmt->execute();
$row = $totalStrayDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $strayPutatan_Main1  = $row['total_count_Straydog'];
}else{
    $strayPutatan_Main1 = 0;
}

// Stray Dog Putatan_Annex
$query6 = "SELECT COUNT(patient_records.source_expo) as total_count_Straydog
FROM patient_records WHERE source_expo = 'Stray Dog' AND patient_records.place_expo = 'Putatan Annex';";

$stmt = $conn->prepare($query6);
$stmt->execute();
$row = $totalStrayDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $strayPutatan_Annex1  = $row['total_count_Straydog'];
}else{
    $strayPutatan_Annex1 = 0;
}

// Stray Dog Bayanan_Main
$query7 = "SELECT COUNT(patient_records.source_expo) as total_count_Straydog
FROM patient_records WHERE source_expo = 'Stray Dog' AND patient_records.place_expo = 'Bayanan Main';";

$stmt = $conn->prepare($query7);
$stmt->execute();
$row = $totalStrayDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $strayBayanan_Main1 = $row['total_count_Straydog'];
}else{
    $strayBayanan_Main1 = 0;
}

// Stray Dog Bayanan_Annex 
$query8 = "SELECT COUNT(patient_records.source_expo) as total_count_Straydog 
FROM patient_records WHERE source_expo = 'Stray Dog' AND patient_records.place_expo = 'Bayanan Annex';";

$stmt = $conn->prepare($query8);
$stmt->execute();
$row = $totalStrayDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $strayBayanan_Annex1 = $row['total_count_Straydog'];
}else{
    $strayBayanan_Annex1 = 0;
}

// Stray Dog Alabang 
$query9 = "SELECT COUNT(patient_records.source_expo) as total_count_Straydog
FROM patient_records WHERE source_expo = 'Stray Dog' AND patient_records.place_expo = 'Alabang';";

$stmt = $conn->prepare($query9);
$stmt->execute();
$row = $totalStrayDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $strayAlabang1 = $row['total_count_Straydog'];
}else{
    $strayAlabang1 = 0;
}

// Stray Dog Ayala
$query10 = "SELECT COUNT(patient_records.source_expo) as total_count_Straydog
FROM patient_records WHERE source_expo = 'Stray Dog' AND patient_records.place_expo = 'Ayala';";

$stmt = $conn->prepare($query10);
$stmt->execute();
$row = $totalStrayDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $strayAyala1 = $row['total_count_Straydog'];
}else{
    $strayAyala1 = 0;
}

// Stray Dog Cupang
$query11 = "SELECT COUNT(patient_records.source_expo) as total_count_Straydog 
FROM patient_records WHERE source_expo = 'Stray Dog' AND patient_records.place_expo = 'Cupang';";

$stmt = $conn->prepare($query11);
$stmt->execute();
$row = $totalStrayDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $strayCupang1 = $row['total_count_Straydog'];
}else{
    $strayCupang1 = 0;
}

// Stray Dog Buli
$query12 = "SELECT COUNT(patient_records.source_expo) as total_count_Straydog
FROM patient_records WHERE source_expo = 'Stray Dog' AND patient_records.place_expo = 'Buli';"; 

$stmt = $conn->prepare($query12);
$stmt->execute();
$row = $totalStrayDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $strayBuli1 = $row['total_count_Straydog'];
}else{
    $strayBuli1 = 0;
}

// Stray Dog Sucat
$query13 = "SELECT COUNT(patient_records.source_expo) as total_count_Straydog
FROM patient_records WHERE source_expo = 'Stray Dog' AND patient_records.place_expo = 'Sucat';"; 

$stmt = $conn->prepare($query13);
$stmt->execute();
$row = $totalStrayDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $straySucat1 = $row['total_count_Straydog'];
}else{
    $straySucat1 = 0;
}

// Stray Dog Bagong_Silang
$query14 = "SELECT COUNT(patient_records.source_expo) as total_count_Dog 
FROM patient_records WHERE source_expo = 'Stray Dog' AND patient_records.place_expo = 'Bagong Silang';";

$stmt = $conn->prepare($query14);
$stmt->execute();
$row = $totalDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $Bagong_Silang11 = $row['total_count_Dog'];
}else{
    $Bagong_Silang111 = 0;
}


// Stray Dog  Sitio Sto.Nino
$query15 = "SELECT COUNT(patient_records.source_expo) as total_count_Straydog
FROM patient_records WHERE source_expo = 'Stray Dog' AND patient_records.place_expo = 'Sitio Sto. Niño';"; 

$stmt = $conn->prepare($query13);
$stmt->execute();
$row = $totalStrayDog = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $straysitio1 = $row['total_count_Straydog'];
}else{
    $straysitio1 = 0;
}


?>