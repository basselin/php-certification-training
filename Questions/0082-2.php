<form action="" method="post">
    <select name="myselect[]" multiple="multiple">
        <option value="1">Item #1</option>
        <option value="2">Item #2</option>
        <option value="3">Item #3</option>
        <option value="4">Item #4</option>
    </select>
    <input type="submit"/>

<?php var_dump($_POST); ?>

</form>