// Simulated Database.
const recipes = [
  {
        id: 1,
        title: "Mahangu Porridge",
        description: "A traditional and nutritious staple food.",
        ingredients: ["Mahangu flour", "Water", "Salt", "Sugar (optional)"],
        instructions: "Mix mahangu flour with water...", // Shortened for example
        image: "images/mahangu.jpg"
  },
  {
        id: 2,
        title: "Kapana",
        description: "Street-style grilled beef.",
        ingredients: ["Beef strips", "Salt", "Chili spice"],
        instructions: "Grill the beef strips over hot coals...",
        image: "images/kapana.jpg"
  }

  ];
//Display recipes on the page.
function displayRecipes(recipesToDisplay){
  const container = document.getElementById('recipesContainer');
  container.innerHTML = ''; //clear the "loading" text
  
  
