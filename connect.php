<?php
    $teamName=$_POST['teamName'];
    $leaderName=$_POST['leaderName'];
    $leaderEnrollment=$_POST['leaderEnrollment'];
    $leaderEmail=$_POST['leaderEmail'];
    $member1Name=$_POST['member1Name'];
    $member1Enrollment=$_POST['member1Enrollment'];
    $member1Email=$_POST['member1Email'];
    $member2Name=$_POST['member2Name'];
    $member2Enrollment=$_POST['member2Enrollment'];
    $member2Email=$_POST['member2Email'];


    //database connection
    $conn = new mysqli('localhost','root','','ieee registration');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt=$conn->prepare("insert into registrations(teamName,leaderName,leaderEnrollment,leaderEmail,member1Name,member1Enrollment,member1Email,member2Name,member2Enrollment,member2Email) values(?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssssss",$teamName,$leaderName,$leaderEnrollment,$leaderEmail,$member1Name,$member1Enrollment,$member1Email,$member2Name,$member2Enrollment,$member2Email);
        $stmt->execute();
        echo "Registration Successful";
        $stmt->close();
        $conn->close();
    }
?>