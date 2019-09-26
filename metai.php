<html>
<body>
<form method="post">
    Enter the Year: <input type="text" name="year">
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
<?php
if($_POST)
{
    //get the year
    $year = $_POST['year'];

    //multiple conditions to check the leap year
    if( (0 == $year % 4) and (0 != $year % 100) or (0 == $year % 400) )
    {
        echo "$year Keliamieji metai";
    }
    else
    {
        echo "$year nėra keliamieji metai";
    }
}
?>
<?php
function isLeap($year)
{
    return (date('L', mktime(0, 0, 0, 1, 1, $year))==1);

}
//For testing
for($year=1991; $year<2016; $year++)
{
    If (isLeap($year))
    {
        echo "$year : Keliamieji metai<br />\n";
    }
    else
    {
        echo "$year : nėra keliamieji metai<br />\n";
    }
}
?>
