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

    <div class="basket-cont">
        <div class="basket">
        <div class="basket-header">
            <h1>Basket</h1> <br>
        </div>
            
        <div class="basketItems">
            <div class="basketItem">
                <div>
                    <img src="resources/products/chicken.png" height=80% width=80%>
                </div>
                <div>
                    Chicken Egg <br>
                    £19.99
                </div>
                <div id="itemEnd">
                    <select name="Quantity">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                <div id="removeBut">
                    <img src="resources/trash-bin.png" height=80% width=80%>
                </div>
                </div>

            </div>
        </div>
        </div>
    </div>

</body>