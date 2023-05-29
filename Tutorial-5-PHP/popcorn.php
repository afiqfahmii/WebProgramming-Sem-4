<!-- AFIQ FAHMI BIN ROSLAN
     A21EC0153 -->

<html>

<head>
    <style>
        #table {

            text-align: center;
        }
    </style>
</head>

<body>

    <?php

    
    $unpop_cost = ((int)$_POST["unpop"]) * 3;
    $caramel_cost = ((int)$_POST["caramel"]) * 4;
    $caramelnut_cost = ((int)$_POST["caramelnut"]) * 5;
    $toffeynut_cost = ((int)$_POST["Toffeynut"]) * 6;

    $total_items = (int)$_POST["unpop"] + (int)$_POST["caramel"] + (int)$_POST["caramelnut"] + (int)$_POST["Toffeynut"];

    $total_price = $unpop_cost + $caramel_cost + $caramelnut_cost + $toffeynut_cost;



    ?>
    <h2> Welcome to Millenium Gymnastic Booster Club Popcorn Sales </h2>

    <!-- Insert A borderless table of text widgets for name and address -->
    <table>
        <tr>
            <td> Buyer's Name : <?php echo $_POST["name"]; ?><br></td>
        </tr>

        <tr>
            <td> Street Address: <?php echo $_POST["street"]; ?><br></td>
        </tr>

        <tr>
            <td> City, State, Zip:<?php echo $_POST["city"]; ?><br> </td>
        </tr>

    </table>
    <br>

    <table border="2" ; width="50%" id="table">

        <!-- First, insert the column headings -->
        <tr>
            <th> Product Name </th>
            <th> Price </th>
            <th> Quantity Ordered </th>
            <th> Item Cost </th>
        </tr>

        <!-- Now, insert the three of table data entries -->
        <tr>
            <td> Unpopped Popcorn </td>
            <td> $3.00 </td>
            <td> <?php echo (int)$_POST["unpop"]; ?></td>
            <td><?php echo "$".sprintf('%0.2f',$unpop_cost); ?></td>
        </tr>

        <tr>
            <td> Caramel Popcorn </td>
            <td> $4.00 </td>
            <td> <?php echo (int)$_POST["caramel"]; ?></td>
            <td><?php echo "$".sprintf('%0.2f',$caramel_cost); ?></td>
        </tr>

        <tr>
            <td> Caramel Nut Popcorn </td>
            <td> $5.00 </td>
            <td> <?php echo (int)$_POST["caramelnut"]; ?></td>
            <td><?php echo "$" . sprintf('%0.2f',$caramelnut_cost); ?></td>
        </tr>

        <tr>
            <td> Toffey Nut Popcorn </td>
            <td> $6.00 </td>
            <td> <?php echo (int)$_POST["Toffeynut"]; ?></td>
            <td> <?php echo "$" . sprintf('%0.2f',$toffeynut_cost); ?></td>
        </tr>
        <br>


    </table>
    <br><br>

    <?php echo "Your Total Ordered of popcorn items is: " . $total_items; ?> <br>
    <?php echo "Your choosen method of payment is: " . $_POST["payment"]; ?> <br>
    <?php echo "Your total bill is: $" . sprintf('%0.2f',$total_price); ?> <br>

</body>

</html>