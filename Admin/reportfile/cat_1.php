<?php 
// Cat 1 Victoria
$query1 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'I' AND patient_records.place_expo = 'Victoria'";

$stmt = $conn->prepare($query1);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat1victoria = $row['total'];
}else{
    $cat1victoria = 0;
}

// Cat 2 Victoria 
$q1 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'II' AND patient_records.place_expo = 'Victoria'";

$stmt = $conn->prepare($q1);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat2victoria = $row['total'];
}else{
    $cat2victoria = 0;
}

// Cat 3 Victoria
$q1cat3 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'III' AND patient_records.place_expo = 'Victoria'";

$stmt = $conn->prepare($q1cat3);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat3victoria = $row['total'];
}else{
    $cat3victoria = 0;
}

// Cat 1 Tunasan 
$query2 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'I' AND patient_records.place_expo = 'Tunasan'";

$stmt = $conn->prepare($query2);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat1tunasan = $row['total'];
}else{
    $cat1tunasan = 0;
}

// Cat 2 Tunasan 
$q2 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'II' AND patient_records.place_expo = 'Tunsan'";

$stmt = $conn->prepare($q2);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat2tunasan = $row['total'];
}else{
    $cat2tunasan = 0;
}

// Cat 3 Tunasan
$q2cat3 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'III' AND patient_records.place_expo = 'Tunasan'";

$stmt = $conn->prepare($q2cat3);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat3tunasan = $row['total'];
}else{
    $cat3tunasan = 0;
}

// Cat 1 Poblacion 
$query3 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'I' AND patient_records.place_expo = 'Poblacion'";

$stmt = $conn->prepare($query3);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat1Poblacion  = $row['total'];
}else{
    $cat1Poblacion = 0;
}

// Cat 2 Poblacion
$q3 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'II' AND patient_records.place_expo = 'Poblacion'";

$stmt = $conn->prepare($q3);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat2Poblacion  = $row['total'];
}else{
    $cat2Poblacion = 0;
}

// Cat 3 Poblacion
$q3cat3 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'III' AND patient_records.place_expo = 'Poblacion'";

$stmt = $conn->prepare($q3cat3);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat3Poblacion  = $row['total'];
}else{
    $cat3Poblacion = 0;
}

// Cat 1 Southville
$query4 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'I' AND patient_records.place_expo = 'Southville'";

$stmt = $conn->prepare($query4);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat1Southville  = $row['total'];
}else{
    $cat1Southville = 0;
}

// Cat 2 Southville
$q4 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'II' AND patient_records.place_expo = 'Southville'";

$stmt = $conn->prepare($q4);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat2Southville  = $row['total'];
}else{
    $cat2Southville = 0;
}

// Cat 3 Southville
$q4cat3 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'III' AND patient_records.place_expo = 'Southville'";

$stmt = $conn->prepare($q4cat3);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat3Southville  = $row['total'];
}else{
    $cat3Southville = 0;
}

// Cat 1 Putatan_Main
$query5 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'I' AND patient_records.place_expo = 'Putatan Main'";

$stmt = $conn->prepare($query5);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat1Putatan_Main  = $row['total'];
}else{
    $cat1Putatan_Main = 0;
}

// Cat 2 Putatan_Main
$q5 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'II' AND patient_records.place_expo = 'Putatan Main'";

$stmt = $conn->prepare($q5);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat2Putatan_Main  = $row['total'];
}else{
    $cat2Putatan_Main = 0;
}

// Cat 3 Putatan_Main
$q5cat3 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'III' AND patient_records.place_expo = 'Putatan Main'";

$stmt = $conn->prepare($q5cat3);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat3Putatan_Main  = $row['total'];
}else{
    $cat3Putatan_Main = 0;
}

// Cat 1 Putatan_Annex
$query6 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'I' AND patient_records.place_expo = 'Putatan Annex'";

$stmt = $conn->prepare($query6);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat1Putatan_Annex  = $row['total'];
}else{
    $cat1Putatan_Annex = 0;
}

// Cat 2 Putatan_Annex
$q6 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'II' AND patient_records.place_expo = 'Putatan Annex'";

$stmt = $conn->prepare($q6);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat2Putatan_Annex  = $row['total'];
}else{
    $cat2Putatan_Annex = 0;
}

// Cat 3 Putatan_Annex
$q6cat3 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'III' AND patient_records.place_expo = 'Putatan Annex'";

$stmt = $conn->prepare($q6cat3);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat3Putatan_Annex  = $row['total'];
}else{
    $cat3Putatan_Annex = 0;
}

// Cat 1 Bayanan_Main 
$query7 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'I' AND patient_records.place_expo = 'Bayanan Main'";

$stmt = $conn->prepare($query7);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat1Bayanan_Main = $row['total'];
}else{
    $cat1Bayanan_Main = 0;
}

// Cat 2 Bayanan_Main
$q7 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'II' AND patient_records.place_expo = 'Bayanan Main'";

$stmt = $conn->prepare($q7);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat2Bayanan_Main = $row['total'];
}else{
    $cat2Bayanan_Main = 0;
}

// Cat 3 Bayanan_Main
$q7cat3 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'III' AND patient_records.place_expo = 'Bayanan Main'";

$stmt = $conn->prepare($q7cat3);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat3Bayanan_Main = $row['total'];
}else{
    $cat3Bayanan_Main = 0;
}

// Cat 1 Bayanan_Annex
$query8 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'I' AND patient_records.place_expo = 'Bayanan Annex'";

$stmt = $conn->prepare($query8);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat1Bayanan_Annex = $row['total'];
}else{
    $cat1Bayanan_Annex = 0;
}

// Cat 2 Bayanan_Annex
$q8 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'II' AND patient_records.place_expo = 'Bayanan Annex'";

$stmt = $conn->prepare($q8);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat2Bayanan_Annex = $row['total'];
}else{
    $cat2Bayanan_Annex = 0;
}

// Cat 3 Bayanan_Annex
$q8cat3 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'III' AND patient_records.place_expo = 'Bayanan Annex'";

$stmt = $conn->prepare($q8cat3);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat3Bayanan_Annex = $row['total'];
}else{
    $cat3Bayanan_Annex = 0;
}

// Cat 1 Alabang 
$query9 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'I' AND patient_records.place_expo = 'Alabang'";

$stmt = $conn->prepare($query9);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat1Alabang = $row['total'];
}else{
    $cat1Alabang = 0;
}

// Cat 2 Alabang
$q9 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'II' AND patient_records.place_expo = 'Alabang'";

$stmt = $conn->prepare($q9);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat2Alabang = $row['total'];
}else{
    $cat2Alabang = 0;
}

// Cat 3 Alabang
$q9cat3 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'III' AND patient_records.place_expo = 'Alabang'";

$stmt = $conn->prepare($q9cat3);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat3Alabang = $row['total'];
}else{
    $cat3Alabang = 0;
}

// Cat 1 Ayala
$query10 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'I' AND patient_records.place_expo = 'Ayala'";

$stmt = $conn->prepare($query10);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat1Ayala = $row['total'];
}else{
    $cat1Ayala = 0;
}

// Cat 2 Ayala
$q10 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'II' AND patient_records.place_expo = 'Ayala'";

$stmt = $conn->prepare($q10);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat2Ayala = $row['total'];
}else{
    $cat2Ayala = 0;
}

// Cat 3 Ayala 
$q10cat3 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'III' AND patient_records.place_expo = 'Ayala'";

$stmt = $conn->prepare($q10cat3);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat3Ayala = $row['total'];
}else{
    $cat3Ayala = 0;
}

// Cat 1 Cupang
$query11 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'I' AND patient_records.place_expo = 'Cupang'";

$stmt = $conn->prepare($query11);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat1Cupang = $row['total'];
}else{
    $cat1Cupang = 0;
}

// Cat 2 Cupang
$q11 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'II' AND patient_records.place_expo = 'Cupang'";

$stmt = $conn->prepare($q11);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat2Cupang = $row['total'];
}else{
    $cat2Cupang = 0;
}

// Cat 3 Cupang
$q11cat3 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'III' AND patient_records.place_expo = 'Cupang'";

$stmt = $conn->prepare($q11cat3);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat3Cupang = $row['total'];
}else{
    $cat3Cupang = 0;
}

// Cat 1 Buli
$query12 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'I' AND patient_records.place_expo = 'Buli'";

$stmt = $conn->prepare($query12);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat1Buli= $row['total'];
}else{
    $cat1Buli = 0;
}

// Cat 2 Buli 
$q12 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'II' AND patient_records.place_expo = 'Buli'";

$stmt = $conn->prepare($q12);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat2Buli= $row['total'];
}else{
    $cat2Buli = 0;
}

// Cat 3 Buli
$q12cat3 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'III' AND patient_records.place_expo = 'Buli'";

$stmt = $conn->prepare($q12cat3);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat3Buli= $row['total'];
}else{
    $cat3Buli = 0;
}

// Cat 1 Sucat
$query13 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'I' AND patient_records.place_expo = 'Sucat'";

$stmt = $conn->prepare($query13);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat1Sucat= $row['total'];
}else{
    $cat1Sucat = 0;
}

// Cat 2 Sucat
$q13 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'II' AND patient_records.place_expo = 'Sucat'";

$stmt = $conn->prepare($q13);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat2Sucat= $row['total'];
}else{
    $cat2Sucat = 0;
}

// Cat 3 Sucat 
$q13cat3 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'III' AND patient_records.place_expo = 'Sucat'";

$stmt = $conn->prepare($q13cat3);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat3Sucat= $row['total'];
}else{
    $cat3Sucat = 0;
}

// Cat 1 Bagong_Silang
$query14 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'I' AND patient_records.place_expo = 'Bagong Silang'";

$stmt = $conn->prepare($query14);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat1Bagong_Silang= $row['total'];
}else{
    $cat1Bagong_Silang = 0;
}

// Cat 2 Bagong_Silang
$q14 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'II' AND patient_records.place_expo = 'Bagong Silang'";

$stmt = $conn->prepare($q14);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat2Bagong_Silang= $row['total'];
}else{
    $cat2Bagong_Silang = 0;
}

// Cat 3 Bagong_Silang
$q14cat3 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'III' AND patient_records.place_expo = 'Bagong Silang'";

$stmt = $conn->prepare($q14cat3);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat3Bagong_Silang= $row['total'];
}else{
    $cat3Bagong_Silang = 0;
}

// Cat 1 Sitio_Sto._Niño
$query15 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'I' AND patient_records.place_expo = 'Sitio Sto. Niño'";

$stmt = $conn->prepare($query15);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat1sitio= $row['total'];
}else{
    $cat1sitio = 0;
}

// Cat 2 Sitio_Sto._Niño
$q15 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'II' AND patient_records.place_expo = 'Sitio Sto. Niño'";

$stmt = $conn->prepare($q15);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat2sitio= $row['total'];
}else{
    $cat2sitio = 0;
}

// Cat 3 Sitio_Sto._Niño
$q15cat3 = "SELECT COUNT(patient_records.cat_expo) as total
FROM patient_records WHERE cat_expo = 'III' AND patient_records.place_expo = 'Sitio Sto. Niño'";

$stmt = $conn->prepare($q15cat3);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $cat3sitio= $row['total'];
}else{
    $cat3sitio = 0;
}
?>