<?php
    // Term project title
    $projectTitle = "<h2>Title: AI-Powered Smart Home System</h2>";

    // Project description with an image
    $projectDescription = "Our term project is an AI-powered smart home system that integrates various IoT devices to provide automation and enhanced user experience. 
    The system will allow users to control their home devices via a centralized application, powered by artificial intelligence for decision-making, 
    providing suggestions and automation to optimize energy use and security features.<br>
    <br>
   <div style='display: flex; justify-content: center; flex-wrap: nowrap;'>
    <img src='smarti.jpg' alt='AI Smart Home System Image' style='display: block; margin: 0 auto; width: 350px;'>
    <img src='ds.jpg' alt='AI Smart Home System Image' style='display: block; margin: 0 auto; width: 350px;'>
    <img src='sm.jpg' alt='AI Smart Home System Image' style='display: block; margin: 0 auto; width: 350px;'>
    </div><br>
    "; // Ensure 'image.jpg' is in the correct location

    // Group members
    $groupMembers = [
        ["name" => "Muhammad Faizan", "id" => "BSCS51F22R003<br>"],
        ["name" => "Muhammad Islam", "id" => "BSCS51F22R011<br>"],
        ["name" => "Abdullah", "id" => "BSCS51F22R013<br>"]
    ];

    // Display the project title
    echo "   " . $projectTitle . "\n";

    // Display the project description
    echo "<h2>Project Description: </h2> " . $projectDescription . "\n";

    // Display group members with their student ids
    echo "<h2>Group Members: </h2>\n";
    foreach ($groupMembers as $member) {
        echo $member['name'] . " - " . $member['id'] . "\n";
    }
?>
