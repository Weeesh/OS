<html>
<head></head>
<body>

<div class="row">
                
    <table id="InventoryList" class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Buyer</th>
                <th>Item name</th>
                <th>Cost</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $inventoryFile = file("cart.csv");

            $accessData = array();
            foreach($inventoryFile as $line){
                list($buyer,$itemName,$itemPrice,$itemStock) = explode(',',$line);

                echo '<tr id='.$itemName.'>
                <td>'.$buyer.'</td>
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