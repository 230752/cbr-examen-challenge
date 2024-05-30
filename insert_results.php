<?php
$sqli_prepare = $con->prepare("UPDATE accounts SET resultaat = ?");
$sqli_prepare->bind_param('s', $resultaat);
$sqli_prepare->execute();
$sqli_prepare->close();