<?php
    require_once 'Configuration.php';
    require_once 'sys/Autoloader.php';

    $folderName = '/students/'; # Moramo da vodimo racuna da ako preimenojumo folder, ovo izmenimo!!!

?>

<!doctype html>
<html>
<body>

    <table class="table table-striped table-hover table-bordered" id="tabela">
        <thead class="thead-inverse">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Grades</th>
                <th>Average</th>
                <th>Result</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($DATA['students'] as $student): ?>
                <tr >
                    <td><?php echo htmlspecialchars($student->id); ?></td>
                    <td><?php echo htmlspecialchars($student->name); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table> 


</body>
</html>