
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body class="">
    
    <div class="container">
        <header>
            <div class="title">Menu</div>
            <div class="icon-cart">
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1"/>
                </svg>
                <span>0</span>
            </div>
        </header>
        <div class="listProduct">
        <?php
        include "conn.php";
        if($conn){
            $sql = "SELECT * FROM `menu`;";
            $result = mysqli_query($conn,$sql);
            while($data = mysqli_fetch_assoc($result)){
        echo '
            <div data-id="1" class="item">
                <img src="image/'.$data["image_url"].'" alt="">
                <h2>'.$data["name"].'</h2>
                <div class="price">₹'.$data["price"].'</div>
                <button class="addCart">Add to Cart</button>
            </div>
        ';
            }
        }
        ?>
        </div>
    </div>
    <div class="cartTab">
        <h1>Shopping Cart</h1>
        <div class="listCart">
            <hr class="sidebar-divider">
            
        </div>
        <div class="btn">
            <button class="close">CLOSE</button>
            <button class="checkOut">Check Out</button>
        
    </div>
    </div>
</body>
</html>