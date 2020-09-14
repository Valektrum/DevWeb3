<table class='table'>
    <thead>
        <tr>
            <th scope='col'>Firstname</th>
            <th scope='col'>Lastname</th>
        </tr>
    </thead>
    <?php

    foreach ($users as $user) {
        echo ("
            <tr>
                <td>" .
            $user->get_first_name() .
            "</td>" .
            "<td>" .
            $user->get_last_name() .
            "</td>
            <td>
            <button class='btn btn-danger'>Supprimer</button>
            </td>
            </tr>
            ");
    }
    ?>
</table>