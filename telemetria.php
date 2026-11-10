<?php
    $ping_grezzi = [45, 120, -1, 32, 210, 85, -1, 18, 95, 310, 45, 60, -1, 150, 28, 240, 18, 72];
    $ping_validi = [];
    array_push($ping_grezzi, 90, 190, 12);
    $contatori_persi = 0;
?>;

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
            <?php foreach($cercate as $ping_grezzi): ?>;
                <li> <?php if($cercate == -1): ?>; </li>   
                <li> <?php echo($contatori_persi+=1); ?>;
                <li> <?php endif; ?>;
                <li> <?php if($cercate > 0): ?>; </li>
                <li> <?php array_push($ping_validi, $cercate); ?>; 
                <li> <?php endif; ?>;
            <?php endforeach; ?>;
    </ul>
</body>
</html>