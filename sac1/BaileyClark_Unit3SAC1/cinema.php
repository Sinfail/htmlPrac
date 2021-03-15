<!DOCTYPE html>

<html>


<head>

</head>
<body>
    <?php

function CalculatePurchasePrice($ticketPrice, $comboDealPrice) {

    $purchasePrice = $ticketPrice + $comboDealPrice;
    return $purchasePrice;
}
$comboprice = CalculatePurchasePrice(16.50, 12);
echo "The price of a ticket and combo deal is $";
echo $comboprice; 


?>
</body>



</html>