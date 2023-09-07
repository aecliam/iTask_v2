<?php
include "connection.php";

try {
    $db = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

// Fetch projects from the database
$query = "Select name, start_date, end_date FROM project_list";
$stmt = $db->prepare($query);
$stmt->execute();
$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Format the project data
$formattedProjects = [];
foreach ($projects as $project) {
    $formattedProjects[] = [
        'title' => $project['name'],
        'start' => $project['start_date'],
        'end' => $project['end_date']
    ];
}

// Return the project data as JSON
header('Content-Type: application/json');
echo json_encode(['project_list' => $formattedProjects]);
