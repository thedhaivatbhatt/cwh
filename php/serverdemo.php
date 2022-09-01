<table border="2" align=center cellpadding=10 width='80%'>
<?php
    foreach ($_SERVER as $key => $value) {
        echo "<tr>";
        echo "<td>$key</td><td>$value</td>";
        echo "</tr>";
    }
?>
</table>