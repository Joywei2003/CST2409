<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>02 While loop w/ CSS</title>
        <link rel="stylesheet" href='while.css'>
        <script>
            function selectElement(id, valueToSelect){
                let element = document.getElementById(id);
                element.value = valueToSelect;
            }
        </script>
    </head>
    <body>
        <?php include 'function.php';?>
        <?php
            $startWith = get("startWith", 0);
            $countTo = get("countTo", 10);
            $highlight = get("highlight", 'n');
            $incrementBy =get("incrementBy", 1);
        ?>
        <h1> Developer: Wei, Joyce</h1>
        <h1> Count to: <?= $countTo ?></h1>
        <form>
            <label>Start with: </label> <input class ="data-entry" name="startWith" type="text" value= "<?= $startWith ?>"/>
            <label>Count to: </label> <input class ="data-entry" name="countTo" type="text" value= "<?= $countTo ?>"/>
            <label>Increment by: </label> <input class ="data-entry" name="incrementBy" type="text" value= "<?= $incrementBy ?>"/>
            <label>Highlight: </label>
            <select name="highlight" id='highlight'>
                <option value='n'>None</option>
                <option value='e'>Even</option>
                <option value='o'>Odd</option>
                <option value='m4'>Multiple of 4</option>
                <option value='m5'>Multiple of 5</option>
                <option value='m6'>Multiple of 6</option>
                <option value='m7'>Multiple of 7</option>
                <option value='m8'>Multiple of 8</option>
                <option value='m9'>Multiple of 9</option>
                <option value='m10'>Multiple of 10</option>
                <option value='c9'>Contains 9</option>
            </select>
            <input type="submit" value="Enter"/>
        </form>
        <div id="screen-display">
        <?php
            $x = $startWith; 
            while($x <= $countTo ) {
                $select = " ";
                if ($highlight == "e" && $x % 2 == 0){
                    $select = "highlight";
                }
                else if ($highlight == "o" && $x % 2 != 0) {
                    $select = "highlight";
                }
                else if ($highlight == "m4" && $x % 4 == 0) {
                    $select = "highlight";
                }
                else if ($highlight == "m5" && $x % 5 == 0) {
                    $select = "highlight";
                }
                else if ($highlight == "m6" && $x % 6 == 0) {
                    $select = "highlight";
                }
                else if ($highlight == "m7" && $x % 7 == 0) {
                    $select = "highlight";
                }
                else if ($highlight == "m8" && $x % 8 == 0) {
                    $select = "highlight";
                }
                else if ($highlight == "m9" && $x % 9 == 0) {
                    $select = "highlight";
                }
                else if ($highlight == "m10" && $x % 10 == 0) {
                    $select = "highlight";
                }
                else if ($highlight == "c9" && str_contains($x ,"9")) {
                    $select = "highlight";
                }
                echo "<div class='n123 $select'> $x </div>";
                $x = $x + $incrementBy ;
            } 
        ?>
        <script>
            selectElement("highlight","<?= $highlight ?>");
        </script>
    </body>
</html>
