<div class="content">
  <form action="index.php">
    <input type="submit" name="Grafana" value="insert" onclick="insert()" />
    <input type="submit" name="Mobile" value="select" onclick="select()" />
</form>

<?php
    function select(){
      echo shell_exec("startx -- -nocursor")
    }
    function insert(){
        echo "The insert function is called.";
    }
?>
</div>
