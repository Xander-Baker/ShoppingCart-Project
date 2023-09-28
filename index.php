<?php

$connect = mysqli_connect("localhost", "root", "", "items");



function displayItems($connect){
    $query = "SELECT * FROM itemstable ORDER BY id ASC";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $itemId = $row["id"];
            $itemName = $row["name"];
            $itemPrice = $row["price"];
            $itemImg = $row["img"];

            echo " <div class='item'>
            <div id='itemimg'>
              <img src = 'resources/products/$itemImg' height = 100% width = 100% id='imgId'>
              <img src = 'resources/spiky.png' class='hide'>
            </div>
              $itemName <br>
              £$itemPrice <br>
              <button class='addBasket'>
                ADD TO BASKET
              </button>
          </div>";


        }
    } 
}

?>

<!DOCTYPE html>
  <head>
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/70eac9f187.js" crossorigin="anonymous"></script>
    <title>Eggly</title>
    <link rel = "icon" href = "resources/logo2.png" type = "image/x-icon">
    <script src="index.js"></script>
  </head>
  <body>
    <header>
      <div id="storename">
        <img src="resources/eggly.png" id="eggly" type="button" onclick='location.href="index.php"'> 
        <div id="logo">
          <img src="resources/logo2.png">
        </div>
      </div>

      </div>
      <div id="searchbar">
        <input type="text" placeholder="Search...">
        <img src="resources/right-arrow3.png" type="button">
      </div>

      <div id="cart">
        <img src = "resources/shopping-bag.png" type="button" onclick='location.href="cart.php"' id="cartImg">
      </div>

    </header>


    <div class="sidebar">
      <h1>Sort By</h1>
    </div>
    
    <div class="body">
    <div class="items">
    <?php displayItems($connect)?>  
    </div>
    </div>

  </body>
</html>