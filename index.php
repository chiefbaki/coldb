<?php

require_once 'connect.php';

?>
<head>
      <title>Students</title>
</head>
<body>
      <table>
            <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Surname</th>
                  <th>Group</th>
                  <th>Password</th>
            </tr>
<?php
      $students = mysqli_query($connect,query:"SELECT * FROM `students`");
      $students = mysqli_fetch_all($students);
      foreach ($students as $students) {
        ?>
          <tr>
                <td><?= $students[0] ?></td>
                <td><?= $students[1] ?></td>
                <td><?= $students[2] ?></td>
                <td><?= $students[3] ?></td>  
                <td><?= $students[4] ?></td>
            </tr>
            <?php
      }

?>
      </table>
</body>
</html>
