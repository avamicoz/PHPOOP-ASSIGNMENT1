<?php
if(isset($_POST['submit'])){

if(isset($_POST['name']) && !empty(($_POST['name']))){
    $name = $_POST['name'];
}

if(isset($_POST['course']) && !empty(($_POST['course']))){
    $course = $_POST['course'];
}
if(isset($_POST['gender']) && !empty(($_POST['gender']))){
    $gender= $_POST['gender'];
}

    $complain = $_POST['complain'];
    $other = $_POST['other'];
    $more = $_POST['more'];


    echo "Thank you ";
    

$studentdata = file_get_contents ('complainform.json');
$datalist = json_decode($studentdata); 
$profile=array(
    'name'=>$name,
    'course'=>$course,
    'gender'=>$gender,
    'complain'=>$complain,
    'other'=>$other,
    'more'=>$more,
);

array_push($datalist, $profile);
$en_datalist = json_encode($datalist);

file_put_contents ('complainform.json', $en_datalist);


echo "Information successfully submitted successfully";



}
?>