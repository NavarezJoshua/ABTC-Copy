<?php 
// TCV Victoria
$tVictoria = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'TCV' AND patient_records.place_expo = 'Victoria'";

$stmt = $conn->prepare($tVictoria);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $tcvvictoria = $row['total'];
}else{
    $tcvvictoria = 0;
}

// HRIG Victoria
$hVictoria = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'HRIG' AND patient_records.place_expo = 'Victoria'";

$stmt = $conn->prepare($hVictoria);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $hrigvictoria = $row['total'];
}else{
    $hrigvictoria = 0;
}

// ERIG Victoria 
$eVictoria = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'ERIG' AND patient_records.place_expo = 'Victoria'";

$stmt = $conn->prepare($eVictoria);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $erigVictoria = $row['total'];
}else{
    $erigVictoria = 0;
}

// TCV Tunasan 
$tTunasan = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'TCV' AND patient_records.place_expo = 'Tunasan'";

$stmt = $conn->prepare($tTunasan);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $tcvTunasan = $row['total'];
}else{
    $tcvTunasan = 0;
}

// HRIG Tunasan
$hTunasan = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'HRIG' AND patient_records.place_expo = 'Tunasan'";

$stmt = $conn->prepare($hTunasan);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $hrigTunasan = $row['total'];
}else{
    $hrigTunasan = 0;
}

// ERIG Tunasan
$eTunasan = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'ERIG' AND patient_records.place_expo = 'Tunasan'";

$stmt = $conn->prepare($eTunasan);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $erigTunasan = $row['total'];
}else{
    $erigTunasan = 0;
}

// TCV Poblacion 
$tPoblacion = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'TCV' AND patient_records.place_expo = 'Poblacion'";

$stmt = $conn->prepare($tPoblacion);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $tcvPoblacion = $row['total'];
}else{
    $tcvPoblacion = 0;
}

// HRIG Poblacion
$hPoblacion = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'HRIG' AND patient_records.place_expo = 'Poblacion'";

$stmt = $conn->prepare($hPoblacion);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $hrigPoblacion = $row['total'];
}else{
    $hrigPoblacion = 0;
}

// ERIG Poblacion
$ePoblacion = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'ERIG' AND patient_records.place_expo = 'Poblacion'";

$stmt = $conn->prepare($ePoblacion);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $erigPoblacion = $row['total'];
}else{
    $erigPoblacion = 0;
}

// TCV Southville
$tSouthville = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'TCV' AND patient_records.place_expo = 'Southville'";

$stmt = $conn->prepare($tSouthville);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $tcvSouthville = $row['total'];
}else{
    $tcvSouthville = 0;
}

// HRIG Southville
$hSouthville = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'HRIG' AND patient_records.place_expo = 'Southville'";

$stmt = $conn->prepare($hSouthville);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $hrigSouthville = $row['total'];
}else{
    $hrigSouthville = 0;
}

// ERIG Southville
$eSouthville = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'ERIG' AND patient_records.place_expo = 'Southville'";

$stmt = $conn->prepare($eSouthville);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $erigSouthville = $row['total'];
}else{
    $erigSouthville = 0;
}

// TCV Putatan_Main 
$tPutatan_Main = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'TCV' AND patient_records.place_expo = 'Putatan Main'";

$stmt = $conn->prepare($tPutatan_Main);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $tcvPutatan_Main = $row['total'];
}else{
    $tcvPutatan_Main = 0;
}

// HRIG Putatan_Main
$hPutatan_Main = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'HRIG' AND patient_records.place_expo = 'Putatan Main'";

$stmt = $conn->prepare($hPutatan_Main);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $hrigPutatan_Main = $row['total'];
}else{
    $hrigPutatan_Main = 0;
}

// ERIG Putatan_Main
$ePutatan_Main = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'ERIG' AND patient_records.place_expo = 'Putatan Main'";

$stmt = $conn->prepare($ePutatan_Main);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $erigPutatan_Main = $row['total'];
}else{
    $erigPutatan_Main = 0;
}

// TCV Putatan_Annex
$tPutatan_Annex = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'TCV' AND patient_records.place_expo = 'Putatan Annex'";

$stmt = $conn->prepare($tPutatan_Annex);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $tcvPutatan_Annex = $row['total'];
}else{
    $tcvPutatan_Annex = 0;
}

// HRIG Putatan_Annex
$hPutatan_Annex = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'HRIG' AND patient_records.place_expo = 'Putatan Annex'";

$stmt = $conn->prepare($hPutatan_Annex);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $hrigPutatan_Annex = $row['total'];
}else{
    $hrigPutatan_Annex = 0;
}

// ERIG Putatan_Annex
$ePutatan_Annex = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'ERIG' AND patient_records.place_expo = 'Putatan Annex'";

$stmt = $conn->prepare($ePutatan_Annex);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $erigPutatan_Annex = $row['total'];
}else{
    $erigPutatan_Annex = 0;
}

// TCV Bayanan_Main 
$tBayanan_Main = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'TCV' AND patient_records.place_expo = 'Bayanan Main'";

$stmt = $conn->prepare($tBayanan_Main);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $tcvBayanan_Main = $row['total'];
}else{
    $tcvBayanan_Main = 0;
}

// HRIG Bayanan_Main
$hBayanan_Main = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'HRIG' AND patient_records.place_expo = 'Bayanan Main'";

$stmt = $conn->prepare($hBayanan_Main);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $hrigBayanan_Main = $row['total'];
}else{
    $hrigBayanan_Main = 0;
}

// ERIG Bayanan_Main 
$eBayanan_Main = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'ERIG' AND patient_records.place_expo = 'Bayanan Main'";

$stmt = $conn->prepare($eBayanan_Main);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $erigBayanan_Main = $row['total'];
}else{
    $erigBayanan_Main = 0;
}

// TCV Bayanan_Annex 
$tBayanan_Annex = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'TCV' AND patient_records.place_expo = 'Bayanan Annex'";

$stmt = $conn->prepare($tBayanan_Annex);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $tcvBayanan_Annex = $row['total'];
}else{
    $tcvBayanan_Annex = 0;
}

// HRIG Bayanan_Annex
$hBayanan_Annex = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'HRIG' AND patient_records.place_expo = 'Bayanan Annex'";

$stmt = $conn->prepare($hBayanan_Annex);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $hrigBayanan_Annex = $row['total'];
}else{
    $hrigBayanan_Annex = 0;
}

// ERIG Bayanan_Annex
$eBayanan_Annex = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'ERIG' AND patient_records.place_expo = 'Bayanan Annex'";

$stmt = $conn->prepare($eBayanan_Annex);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $erigBayanan_Annex = $row['total'];
}else{
    $erigBayanan_Annex = 0;
}

// TCV Alabang 
$tAlabang = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'TCV' AND patient_records.place_expo = 'Alabang'";

$stmt = $conn->prepare($tAlabang);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $tcvAlabang = $row['total'];
}else{
    $tcvAlabang = 0;
}

// HRIG Alabang
$hAlabang = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'HRIG' AND patient_records.place_expo = 'Alabang'";

$stmt = $conn->prepare($hAlabang);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $hrigAlabang = $row['total'];
}else{
    $hrigAlabang = 0;
}

// ERIG Alabang
$eAlabang = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'ERIG' AND patient_records.place_expo = 'Alabang'";

$stmt = $conn->prepare($eAlabang);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $erigAlabang = $row['total'];
}else{
    $erigAlabang = 0;
}

// TCV Ayala
$tAyala = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'TCV' AND patient_records.place_expo = 'Ayala'";

$stmt = $conn->prepare($tAyala);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $tcvAyala = $row['total'];
}else{
    $tcvAyala = 0;
}

// HRIG Ayala 
$hAyala = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'HRIG' AND patient_records.place_expo = 'Ayala'";

$stmt = $conn->prepare($hAyala);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $hrigAyala = $row['total'];
}else{
    $hrigAyala = 0;
}

// ERIG Ayala 
$eAyala = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'ERIG' AND patient_records.place_expo = 'Ayala'";

$stmt = $conn->prepare($eAyala);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $erigAyala = $row['total'];
}else{
    $erigAyala = 0;
}

// TCV Cupang
$tCupang = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'TCV' AND patient_records.place_expo = 'Cupang'";

$stmt = $conn->prepare($tCupang);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $tcvCupang = $row['total'];
}else{
    $tcvCupang = 0;
}

// HRIG Cupang
$hCupang = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'HRIG' AND patient_records.place_expo = 'Cupang'";

$stmt = $conn->prepare($hCupang);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $hrigCupang = $row['total'];
}else{
    $hrigCupang = 0;
}

// ERIG Cupang
$eCupang = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'ERIG' AND patient_records.place_expo = 'Cupang'";

$stmt = $conn->prepare($eCupang);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $erigCupang = $row['total'];
}else{
    $erigCupang = 0;
}

// TCV Buli
$tBuli = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'TCV' AND patient_records.place_expo = 'Buli'";

$stmt = $conn->prepare($tBuli);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $tcvBuli = $row['total'];
}else{
    $tcvBuli = 0;
}

// HRIG Buli 
$hBuli = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'HRIG' AND patient_records.place_expo = 'Buli'";

$stmt = $conn->prepare($hBuli);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $hrigBuli = $row['total'];
}else{
    $hrigBuli = 0;
}

// ERIG Buli 
$eBuli = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'ERIG' AND patient_records.place_expo = 'Buli'";

$stmt = $conn->prepare($eBuli);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $erigBuli = $row['total'];
}else{
    $erigBuli = 0;
}

// TCV Sucat
$tSucat = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'TCV' AND patient_records.place_expo = 'Sucat'";

$stmt = $conn->prepare($tSucat);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $tcvSucat = $row['total'];
}else{
    $tcvSucat = 0;
}

// HRIG Sucat
$hSucat = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'HRIG' AND patient_records.place_expo = 'Sucat'";

$stmt = $conn->prepare($hSucat);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $hrigSucat = $row['total'];
}else{
    $hrigSucat = 0;
}

// ERIG Sucat 
$eSucat = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'ERIG' AND patient_records.place_expo = 'Sucat'";

$stmt = $conn->prepare($eSucat);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $erigSucat = $row['total'];
}else{
    $erigSucat = 0;
}

// TCV Bagong_Silang
$tBagong_Silang = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'TCV' AND patient_records.place_expo = 'Bagong Silang'";

$stmt = $conn->prepare($tBagong_Silang);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $tcvBagong_Silang = $row['total'];
}else{
    $tcvBagong_Silang = 0;
}

// HRIG Bagong_Silang 
$hBagong_Silang = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'HRIG' AND patient_records.place_expo = 'Bagong Silang'";

$stmt = $conn->prepare($hBagong_Silang);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $hrigBagong_Silang = $row['total'];
}else{
    $hrigBagong_Silang = 0;
}

// ERIG Bagong_Silang
$eBagong_Silang =  "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'ERIG' AND patient_records.place_expo = 'Bagong Silang'";

$stmt = $conn->prepare($eBagong_Silang);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $erigBagong_Silang = $row['total'];
}else{
    $erigBagong_Silang = 0;
}

// TCV Sitio_Sto._Niño
$tSitio = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'TCV' AND patient_records.place_expo = 'Sitio Sto. Niño'"; 

$stmt = $conn->prepare($tSitio);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $tcvtSitio = $row['total'];
}else{
    $tcvtSitio = 0;
}

// HRIG Sitio_Sto._Niño
$hsitio = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'HRIG' AND patient_records.place_expo = 'Sitio Sto. Niño'"; 

$stmt = $conn->prepare($hsitio);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $hrigSitio = $row['total'];
}else{
    $hrigSitio = 0;
}

// ERIG Sitio_Sto._Niño
$esitio = "SELECT COUNT(patient_records.post_expo) as total
FROM patient_records WHERE post_expo = 'ERIG' AND patient_records.place_expo = 'Sitio Sto. Niño'"; 

$stmt = $conn->prepare($esitio);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $erigSitio = $row['total'];
}else{
    $erigSitio = 0;
}
?>