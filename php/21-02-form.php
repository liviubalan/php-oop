<html>
<body>

<?php
if (!empty($_POST)) {
    echo '<p>Name: ' . $_POST['name'] . '</p>';
}
?>
<!-- For more info see: https://www.w3schools.com/html/html_form_elements.asp -->
<form action="21-02-form.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>

</body>
</html>
