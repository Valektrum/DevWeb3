

<table>
<tr>
<td>Firstname</td>
<td>Lastname</td>
</tr>
<?php

    foreach ($users as $user) {
        echo (
            "<tr>
                <td>". 
                    $user->get_first_name().
                "</td>".
                "<td>".
                    $user->get_last_name().
                "</td>
            </tr>");

    }
?>
</table>