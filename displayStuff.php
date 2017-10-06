<html>
<head></head>
<body>

<div class="row">
                
    <table id="InventoryList" class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Item name</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $inventoryFile = file("products.csv");

            $accessData = array();
            foreach($inventoryFile as $line){
                list($itemName,$itemPrice,$itemStock) = explode(',',$line);

                echo '<tr id='.$itemName.'>
                <td>'.$itemName.'</td>
                <td>'.$itemPrice.'</td>
                <td>'.$itemStock.'</td>';
            }
        ?>
        <a href="mainpage.php" class="logo">Operating <span class="lite">Systems</span></a>

        </tbody>
    </table>
</body>

</html>