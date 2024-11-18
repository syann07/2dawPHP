<?php
filter_var($_POST["nombre"], FILTER_VALIDATE_STRING);
filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
filter_var($_POST["url"], FILTER_VALIDATE_URL);
filter_var($_POST["convivientes"], FILTER_VALIDATE_NUMBER);


?>