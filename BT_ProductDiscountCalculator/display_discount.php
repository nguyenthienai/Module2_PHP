<html>
    <head>
        <title>Product Discount Calculator</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <?php
            $produce = $_POST['description'];
            $price = $_POST['price'];
            $percent = $_POST['discount_percent'];
            $amout = $price * $percent * 0.1 / 100;
            $discountPrice = $price - $amout;
        ?>
        <div id="content">
            <h1>Product Discount Calculator</h1>
            <label>Product Description: </label>
            <span><?php echo $produce ?></span><br/>
            <label>Price: </label>
            <span><?php echo "$".$price ?></span><br/>
            <label>Discount Percent: </label>
            <span><?php echo $percent."%" ?></span><br/>
            <label>Discount Amount: </label>
            <span><?php echo "$".$amout ?></span><br/>
            <label>Discount Price: </label>
            <span><?php echo "$".$discountPrice ?></span><br/>
        </div>
    </body>
</html>