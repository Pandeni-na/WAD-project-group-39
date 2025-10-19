<?php
if ($_POST) {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $ingredients = $_POST["ingredients"];
    $instructions = $_POST["instructions"];
    $image_name = $_POST["image_name"];
    
    $conn = new mysqli('localhost', 'root', '', 'namibian_recipes');
    
    $sql = "INSERT INTO recipes (title, description, ingredients, instructions, image_name) 
            VALUES ('$title', '$description', '$ingredients', '$instructions', '$image_name')";
    
    if ($conn->query($sql) === TRUE) {
        $message = "Recipe added!";
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Submit Recipe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
