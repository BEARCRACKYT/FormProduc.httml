<?php
$producto1 = $_POST['producto1'];
$precio1 = (float)$_POST['precio1'];
$producto2 = $_POST['producto2'];
$precio2 = (float)$_POST['precio2'];
$producto3 = $_POST['producto3'];
$precio3 = (float)$_POST['precio3'];
$total = $precio1 + $precio2 + $precio3;
$descuento = $total * 0.16;
$total_pagar = $total - $descuento;
echo "<p>Producto 1: $producto1 - Precio: $$precio1</p>";
echo "<p>Producto 2: $producto2 - Precio: $$precio2</p>";
echo "<p>Producto 3: $producto3 - Precio: $$precio3</p>";
echo "<p><strong>Total antes del descuento: $$total</strong></p>";
echo "<p><strong>Descuento (16%): $$descuento</strong></p>";
echo "<p><strong>Total a pagar: $$total_pagar</strong></p>";
?>
