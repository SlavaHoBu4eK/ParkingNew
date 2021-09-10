<?php
$total_floor = 50;
$total_place = 50;
$busy = false;
$free = true;
$parking = [];
for ($floor_number = 1; $floor_number <= $total_floor; $floor_number++) {
    for ($place_number = 1; $place_number <= $total_place; $place_number++) {
        $parking[$floor_number][$place_number] = $place_number % 2 == 0 ? $busy : $free ;
    }
}
?>
<!doctype html>
<head>
    <title>Паркинг</title>
</head>
<body>
<table border='1'>
    <td bgcolor='#a9a9a9'>Место/Этаж</td>
    <?php
    for ($place_number = 1; $place_number <= $total_place; $place_number++) {
        echo "<td bgcolor='#a9a9a9'><b>Паркоместо № " . $place_number . "</b></td>";
    }
    for ($floor_number = 1; $floor_number <= $total_floor; $floor_number++) {
        echo "<tr><td bgcolor='#a9a9a9'><b>Этаж №" . $floor_number . "</b></td>";
        for ($place_number = 1; $place_number <= $total_place; $place_number++) {
            echo $parking[$floor_number][$place_number] == true ? "<td bgcolor='aqua'> Свободно</td>" : "<td bgcolor='#db7093'> Занято</td>";
        }
    }
    ?>
</table>
</body>