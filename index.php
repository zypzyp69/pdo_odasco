<?php require_once 'dbConfig.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // NUMBER 3
    // select lahat ng data sa table na appointments
    //$stmt = $pdo->prepare("SELECT * FROM appointments");
    //if ($stmt->execute()) {
        //echo "<pre>";
        //print_r($stmt->fetchAll());
        //echo "<pre>";
    //}
    // NUMBER 4
    // select ang data sa table na appointments na may id na 3 
    //$stmt = $pdo->prepare("SELECT * FROM doctors WHERE doctor_id = 3");
    //if ($stmt->execute()) {
        //echo "<pre>";
        //print_r($stmt->fetch());
        //echo "<pre>";
    //}
    // NUMBER 5
    // magiinsert ng new doctor sa doctors 
    //$stmt = $pdo->prepare("Insert into doctors(doctor_id, first_name, last_name, specialization, phone_number, email, years_of_experience, created_at) 
    //values (11, 'Royce', 'Hayley', 'Neurologist', '555-1111111', 'ruys@gmail.com', 7, '2024-10-12 00:11:07')");

    //if ($stmt->execute()) {
        //echo "<pre>";
        //print_r($stmt->fetch());
        //echo "<pre>";
    //}
    // NUMBER 6
    // delete ang data sa table na doctor na may id na 11
    //$stmt = $pdo->prepare("DELETE FROM doctors WHERE doctor_id = 11");

        //if ($stmt->execute()) {
        //echo "<pre>";
        //print_r($stmt->fetch());
        //echo "<pre>";
        //}
    // NUMBER 7
    //update ang data sa doctors table na may doctor id na 1
    //$stmt = $pdo->prepare("UPDATE doctors SET first_name = 'Royce', last_name = 'Hayley'
    //WHERE doctor_id = 1;");

    //if ($stmt->execute()) {
        //echo "<pre>";
        //print_r($stmt->fetch());
        //echo "<pre>";
    //}
    // NUMBER 8
    // select ang data sa table na doctors na may id na 1
    //$query = "Select * from doctors where doctor_id = 1";

    //$stmt = $pdo->prepare($query);      

    //if ($stmt->execute()) {
        //$doctor_id1 = $stmt->fetch();
        //didisplay ang first name, last name, specialization ng id 1
        //echo "First name: ". $doctor_id1['first_name'] . "<br>";
        //echo "Last name: ". $doctor_id1['last_name'] . "<br>";
        //echo "Specialization: ". $doctor_id1['specialization'] . "<br>";
        //}


    ?>
</body>
</html>
