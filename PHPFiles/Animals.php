<?php
    $animals = array("cats","dogs","rabbits");
    $animals[3] = "badgers";

    echo "I like ".$animals[0]."<br />";
    echo count($animals)."<br />";

    for ($x=0; $x < count($animals); $x++)
    {
        echo $animals[$x]."<br />";
    };
    "<br />";
    "<br />";
?>
<?php
    $class = array("Marcus"=>"D1","Joseph"=>"D2","Chris B"=>"C2",);

    $class['Joel'] = "D5";

    echo "Marcus is in seat ".$class["Marcus"].". <br />";

    foreach($class as $x => $x_value)
    {
        echo $x. " is in seat " . $x_value. "<br />";
    };
