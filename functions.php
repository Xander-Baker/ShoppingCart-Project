<?php

$connect = mysqli_connect("localhost", "root", "", "items");



function displayItems($connect){
    $query = "SELECT * FROM items ORDER BY id ASC";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $itemId = $row["id"];
            $itemName = $row["name"];
            $itemPrice = $row["price"];
            $itemImg = $row["img"];

            echo " <div class='item'>
            <div id='itemimg'>
              <img src = 'resources/$img' height = 100% width = 100%>
            </div>
              $name <br>
              £$price <br>
              <button id='buy'>
                BUY
              </button>
          </div>";


        }
    } 
}

?>