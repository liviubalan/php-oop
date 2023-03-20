<html>
<body>

<p>
<?php
var_dump($_POST);
if (!empty($_POST)) {
    echo '<p>Name: ' . $_POST['name'] . '</p>';
}
?>
</p>
<form action="22-02-form.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>

</body>
</html>
