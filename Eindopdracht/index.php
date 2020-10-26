<?php require('loadPersonen.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Personen</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Voornaam</th>
                        <th>Achternaam</th>
                        <th>Leeftijd</th>
                        <th>Geslacht</th>
                        <th>Nationaliteit</th>
                    </thead>
                    <tbody>
                    <?php foreach($xml->Person as $person)  { 
                        echo "<tr>";
                        echo "<td>". intval($person['id']+1) . "</td>";
                        echo "<td>$person->FirstName</td>";
                        echo "<td>$person->LastName</td>";
                        echo "<td>$person->Age</td>";
                        echo "<td>$person->Sex</td>";
                        echo "<td>$person->Nationality</td>";
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>