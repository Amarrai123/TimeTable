<?php
include("../db/config.php");
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<title>Student Upload List</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
</head>
<body>
    <div class="container">
    	<h2 class="text-center mt-4 mb-4">Subject List</h2>
        <div id="excel_data" class="mt-5">
        <table class="table table-striped table-bordered">
        <tr>
        <th>Subject Name</th>
        <th>Subject Code</th>
        </tr>
            <?php
            $statement = $pdo->prepare("SELECT * FROM subjects");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);							
            foreach ($result as $row) { ?>

            <tr>
            <td><?php echo $row['subject_name'] ?></td>
            <td><?php echo $row['subject_code'] ?></td>
            </tr>

            <?php
            }
            ?>

            </table>
        </div>
    </div>
</body>
</html>