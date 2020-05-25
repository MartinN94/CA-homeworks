<?php
$file = "contacts/contacts.csv";

$handle = fopen($file, "r");
$contacts = [];

while (!feof($handle)) {
        $contacts[] = fgetcsv($handle);
}
fclose($handle);
array_shift($contacts);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts Book</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container w-50 mt-5">
        <div class="card bg-dark">
            <div class="card-header p-3">
                <h3 class="text-white float-left">Contacts</h3>
                <form action="edit_contact.php" method="POST">
                    <button type="submit" name="edit_contact" class="btn btn-sm btn-warning float-right">Edit Contact</button>
                </form>
                <form action="add_contact.php" method="post">
                    <button type="submit" name="add_contact" class="btn btn-sm btn-secondary float-right mr-2">Add Contact</button>
                </form>
            </div>
            <div class="card-body text-white">
            <form action="" method="post">
                    <input type="text" name="search" placeholder="Search Contacts" class="w-75">
                    <button type="submit" name="search" class="btn btn-light float-right">Search</button>
                </form>
            
                <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Number</th>
                </tr>
            </thead>
            <tbody>
            <?php
                if (isset($contacts)) {
                    foreach($contacts as $line) {
                        echo "<tr>";
                        echo "<td>".$line['0']."</td>";
                        echo "<td>".$line['3']."</td>";
                        echo "</tr>";
                        }
                }
                ?>
            </tbody>
        </table>
            </div>
        </div> 
    </div>
</body>
</html>