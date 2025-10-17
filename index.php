<!DOCTYPE html>
<html>
  <head>
    <title>Namibian Recipe Book</title>
    <link rel="stylesheet" href="style.css">
  </head>
  
  <body>
    <header>
      <h1>Namibian Recipe Book</h1>
      <p>Preserving taste, one recipe at a time.</p>
    </header>

    <main>
      <div style="text-align: center; padding: 20px;">
            <input type="text" id="searchInput" placeholder="Search recipes...">
            <button onclick="searchRecipes()">Search</button>
        </div>

        <div class="recipes-container" id="recipesContainer">
            <?php
            $conn = new mysqli('localhost', 'root', '', 'namibian_recipes');
            $result = $conn->query("SELECT * FROM recipes");
            
            while($row = $result->fetch_assoc()) {
                echo '<div class="recipe-card">';
                
                // Show image if it exists
                if (!empty($row["image_name"])) {
                    echo '<img src="images/' . $row["image_name"] . '" style="width: 100%; height: 200px; object-fit: cover;">';
                } else {
                    echo '<div style="width: 100%; height: 200px; background: #eee; display: flex; align-items: center; justify-content: center;">No Image</div>';
                }
                
                echo '<h3>' . $row["title"] . '</h3>';
                echo '<p>' . $row["description"] . '</p>';
                echo '<p><strong>Ingredients:</strong><br>' . nl2br($row["ingredients"]) . '</p>';
                echo '<p><strong>Instructions:</strong><br>' . nl2br($row["instructions"]) . '</p>';
                echo '</div>';
            }
            $conn->close();
            ?>
        </div>
    </main>

    <footer>
        <p><a href="submit.php">Submit Your Own Recipe</a></p>
    </footer>

    <script>
    function searchRecipes() {
        var searchText = document.getElementById('searchInput').value.toLowerCase();
        var recipes = document.getElementsByClassName('recipe-card');
        
        for (var i = 0; i < recipes.length; i++) {
            var recipeText = recipes[i].textContent.toLowerCase();
            
            if (recipeText.includes(searchText)) {
                recipes[i].style.display = 'block';
            } else {
                recipes[i].style.display = 'none';
            }
        }
    }
    </script>
</body>
</html>
