<?php
$ping_grezzi = [
    45, 120, -1, 32, 210, 85, -1, 18, 95, 310, 
    45, 60, -1, 150, 28, 240, 18, 72, 90, 190, 12
];

$ping_validi = [];
$contatori_persi = 0;

foreach ($ping_grezzi as $cercate) {
    if ($cercate == -1) {
        $contatori_persi++;
    }
    if ($cercate > 0) {
        $ping_validi[] = $cercate; 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach ($ping_grezzi as $cercate): ?>
            <?php if ($cercate == -1): ?>
                <li> ping perso! </li>
            <?php endif; ?>
            <?php if ($cercate > 0): ?>
                <li> Ping sistemato! </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
    
    <p>Totale contatori persi (valore 1): <?php echo $contatori_persi; ?></p>
</body>
</html>
