<?php
include 'Sex.php';
include 'Age.php';
include 'dog_exposure.php';
include 'cat_exposure.php';
include 'cat_1.php';
include 'protst_exposure.php';

// Initialize variables to store totals
$totalMale = $totalFemale = $totalLess15 = $totalGreater15 = $totalPetDog = $totalStrayDog = $totalPetCat = $totalStrayCat = $totalCat1 = $totalCat2 = $totalCat3 = $totalTCV = $totalHRIG = $totalERIG = 0;

$totalTCV += $tcvvictoria + $tcvTunasan + $tcvPoblacion + $tcvSouthville + $tcvPutatan_Main + $tcvPutatan_Annex + $tcvBayanan_Main + $tcvBayanan_Annex + $tcvAlabang + $tcvAyala + $tcvCupang + $tcvBuli + $tcvSucat + $tcvBagong_Silang + $tcvtSitio;
$totalHRIG += $hrigvictoria + $hrigTunasan + $hrigPoblacion + $hrigSouthville + $hrigPutatan_Main + $hrigPutatan_Annex + $hrigBayanan_Main + $hrigBayanan_Annex + $hrigAlabang + $hrigAyala + $hrigCupang + $hrigBuli + $hrigSucat + $hrigBagong_Silang + $hrigSitio;
$totalERIG += $erigVictoria + $erigTunasan + $erigPoblacion + $erigSouthville + $erigPutatan_Main + $erigPutatan_Annex + $erigBayanan_Main + $erigBayanan_Annex + $erigAlabang + $erigAyala + $erigCupang + $erigBuli + $erigSucat + $erigBagong_Silang + $erigSitio;

$totalMale += $mv + $mt + $mp + $ms + $mpu + $mpua + $mba + $mbannex + $ma + $mayala + $mc + $mb + $msu + $msilang + $mnino;
$totalFemale += $fv + $ft + $fp + $fs + $fpu + $fpua + $fba + $fbannex + $fa + $fayala + $fc + $fb + $fsu + $fsilang + $fnino;
$totalLess15 += $less15 + $Tunasan + $Poblacion + $Southville + $Putatan_Main22 + $Putatan_Annex22 + $Bayanan_Main22 + $Bayanan_Annex22 + $Alabang22 + $Ayala + $Cupang + $Buli + $Sucat22 + $Bagong_Silang + $Sitio22;
$totalGreater15 += $greatervictoria + $greatertunasan + $greaterPoblacion + $greaterSouthville + $greaterPutatan_Main + $greaterPutatan_Annex + $greaterBayanan_Main + $greaterBayanan_Annex + $greaterAlabang1 + $greaterAyala + $greaterCupang + $greaterBuli + $greaterSucat + $greaterBagong_Silang + $greaterSitio;
$totalPetDog += $victoria1 + $Tunasan1 + $Poblacion1 + $Southville1 + $Putatan_Main1 + $Putatan_Annex1 + $Bayanan_Main1 + $Bayanan_Annex1 + $Alabang1 + $Ayala1 + $Cupang1 + $Buli1 + $Sucat1 + $Bagong_Silang1 + $Sitio1;
$totalStrayDog += $strayvictoria1 + $strayTunasan1 + $strayPoblacion1 + $straySouthville1 + $strayPutatan_Main1 + $strayPutatan_Annex1 + $strayBayanan_Main1 + $strayBayanan_Annex1 + $strayAlabang1 + $strayAyala1 + $strayCupang1 + $strayBuli1 + $straySucat1 + $Bagong_Silang11 + $straysitio1;
$totalPetCat += $victoria + $Tunasan + $Poblacion + $Southville + $Putatan_Main + $Putatan_Annex + $Bayanan_Main + $Bayanan_Annex + $Alabang + $Ayala + $Cupang + $Buli + $Sucat + $Bagong_Silang22 + $Sitio;
$totalStrayCat += $strayvictoria + $strayTunasan + $strayPoblacion + $straySouthville + $strayPutatan_Main + $strayPutatan_Annex + $strayBayanan_Main + $strayBayanan_Annex + $strayAlabang + $strayAyala + $strayCupang + $strayBuli + $straySucat + $strayBagong_Silang22 + $straysitio;
$totalCat1 += $cat1victoria + $cat1tunasan + $cat1Poblacion + $cat1Southville + $cat1Putatan_Main + $cat1Putatan_Annex + $cat1Bayanan_Main + $cat1Bayanan_Annex + $cat1Alabang + $cat1Ayala + $cat1Cupang + $cat1Buli + $cat1Sucat + $cat1Bagong_Silang + $cat1sitio;
$totalCat2 += $cat2victoria + $cat2tunasan + $cat2Poblacion + $cat2Southville + $cat2Putatan_Main + $cat2Putatan_Annex + $cat2Bayanan_Main + $cat2Bayanan_Annex + $cat2Alabang + $cat2Ayala + $cat2Cupang + $cat2Buli + $cat2Sucat + $cat2Bagong_Silang + $cat2sitio;
$totalCat3 += $cat3victoria + $cat3tunasan + $cat3Poblacion + $cat3Southville + $cat3Putatan_Main + $cat3Putatan_Annex + $cat3Bayanan_Main + $cat3Bayanan_Annex +$cat3Alabang + $cat3Ayala + $cat3Cupang + $cat3Buli + $cat3Sucat + $cat3Bagong_Silang + $cat3sitio;


?>