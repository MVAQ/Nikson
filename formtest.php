<?php
/**
 * Created by PhpStorm.
 * User: МВА
 * Date: 03.01.2019
 * Time: 11:51
 */
echo <<<_END
<html>
<head>
<title>form test</title>
</head>
<body>
<form method="post" action="formtest.php">
What is your name?
<input type="text" name="name">
<input type="submit">
</form>
</body>
</html>
_END;
?>