<?php

//В нас є сайт з продажу побутової техніки.
//Додатково ми надаємо користувачу можливість
//розрахувати, чи пройде товар в його двері.
//Реалізуйте 2 форми: перша для розмірів
//товару(висота, ширина, глибина), друга – для
//розміру дверей.
//Видайте користувачу інформацію, чи зможе він
//занести товар до себе в будівлю.

if ($_GET) {
    $product_arr = [$_GET['product-height'], $_GET['product-width'], $_GET['product-depth']];
    $door_arr = [$_GET['door-height'], $_GET['door-width']];
}

?>

    <form method="GET">
        <div class="product-form">
            <div class="product-form__title">Розмір товару:</div>
            <input type="number" name="product-height" placeholder="висота" value="<?php echo $product_arr[0]; ?>">
            <input type="number" name="product-width" placeholder="ширина" value="<?php echo $product_arr[1]; ?>">
            <input type="number" name="product-depth" placeholder="глибина" value="<?php echo $product_arr[2]; ?>">
        </div>
        <div class="spacer" style="height: 15px"></div>
        <div class="door-form">
            <div class="door-form__title">Розмір дверей:</div>
            <input type="number" name="door-height" placeholder="висота" value="<?php echo $door_arr[0]; ?>">
            <input type="number" name="door-width" placeholder="ширина" value="<?php echo $door_arr[1]; ?>">
        </div>
        <div class="spacer" style="height: 15px"></div>
        <div class="form-result-btn">
            <input type="submit" value="Розрахувати">
        </div>
    </form>

<?php

if ($product_arr && $door_arr) {
    echo ($product_arr[0] <= $door_arr[0]) && ($product_arr[1] <= $door_arr[1]) ? 'Параметри товару ЗАДОВІЛЬНЯЮТЬ' : 'Параметри товару НЕ ЗАДОВІЛЬНЯЮТЬ';
}
