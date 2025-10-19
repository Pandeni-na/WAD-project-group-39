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
<div style="max-width: 600px; margin: 20px auto; padding: 20px;">
        <h2>Submit Recipe</h2>
        
        <?php if (isset($message)) { echo "<p>$message</p>"; } ?>
        
        <form method="post">
            <p><input type="text" name="title" placeholder="Recipe Title" required></p>
            <p><textarea name="description" placeholder="Description"></textarea></p>
            <p>
                <select name="image_name">
                    <option value="">No Image</option>
                    <option value="mahangu.jpg">Mahangu Image</option>
                    <option value="kapana.jpg">Kapana Image</option>
                    <option value="oshifima.jpg">Oshifima Image</option>
                </select>
            </p>
            <p><textarea name="ingredients" placeholder="Ingredients" required></textarea></p>
            <p><textarea name="instructions" placeholder="Instructions" required></textarea></p>
            <button type="submit">Submit Recipe</button>
        </form>
        
        <p><a href="index.php">Back to Recipes</a></p>
    </div>
</body>
</html>
