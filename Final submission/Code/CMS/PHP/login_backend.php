<?php
    //Include libraries
    include('../../vendor/autoload.php');
    //Create instance of MongoDB client
    $mongoClient = (new MongoDB\Client);

    //Select a database
    $db = $mongoClient->Details;
    //Select a collection
    $collection = $db->Employees;

    if (isset($_GET['param1']) && isset($_GET['param2'])) {
        $username = $_GET['param1'];
        $password = $_GET['param2'];

        $findCriteria = [
            "Name" => $username,
        ];
    
        $cursor = $collection->find($findCriteria);

        foreach ($cursor as $cust) {
            if ($password == $cust['Password']) {
                // echo "Received parameters: param1=$username, param2=$password"; 
                // Prepare the success response as an associative array
                $response = array('success' => true);
            
                // Encode the response as JSON and echo it
                echo json_encode($response);
            } else {
                // Prepare the error response as an associative array
                $response = array('success' => false);
    
                // Encode the response as JSON and echo it
                echo json_encode($response);
            }
        }    
    } 
    // else {
    // // Prepare the error response as an associative array
    // $response = array('success' => false, 'message' => 'Error message');

    //     // Encode the response as JSON and echo it
    //     echo json_encode($response);
    // }
    
