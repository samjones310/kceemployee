<?php
$va=$_POST['ename'];
$va1=$_POST['task'];
$va2="/".$va;
require __DIR__."/vendor/autoload.php";
const DEFAULT_URL = 'https://employeetracker-2k20.firebaseio.com/';
const DEFAULT_TOKEN = 'oPsSz0FIa6hN9XImPvJwwdsMAiThXsxEDY0u2O0d';
const DEFAULT_PATH = '';
echo $va2;
$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);
$Feedback1 = $firebase->get(DEFAULT_PATH.'/employeedata'.$va2.'/assigned');
echo $Feedback1;
$Feedback1 = $Feedback1+1;

$Feedback = $firebase->Update(DEFAULT_PATH.'/employeedata'.$va2,["assigned"=>$Feedback1]);
?>