<style>
    td{
        border: 2px solid black;
    }
</style>
<table>
<tr>
    <th> Type d'information </th>
    <th> Valeur </th>

</tr>
<?php
    function displayInTable($columnName, $value, $shouldBeDump){
        echo("<tr>");

        echo("<td>");
        echo($columnName);
        echo("</td>");

        echo("<td>");
        if($shouldBeDump)
        {
            var_dump($value);
        }
        else {
            echo($value);
        }
        echo("</td>");

        echo("</tr>");

    }

    function processBody(){
        $content_type = $_SERVER["CONTENT_TYPE"];
        displayInTable('CONTENT_TYPE', $content_type, true);
        $json = file_get_contents('php://input');
        $jsonData = json_decode($json);
        displayInTable('RAW JSON', $json, false);
        displayInTable('DECODED JSON', $jsonData, true);
    }

    $request = $_REQUEST;
    $method = $_SERVER['REQUEST_METHOD'];

    displayInTable('METHOD', $method, false);
    displayInTable('REQUEST', $request, true);

    switch($method){
        case 'GET':
            break;
        case 'POST':
            processBody();
            break;
        case 'PUT':
            break;
        case 'DELETE':
            break;
    }
?>
</table>
