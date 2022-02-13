<?php 
    define('DB_NAME','/opt/lampp/htdocs/crud/data/db.txt');
    function seed(){
        $data           = array(
            array(
                'id'    => 1,
                'fname' => 'Kamal',
                'lname' => 'Ahmed',
                'roll'  => '11'
            ),
            array(
                'id'    => 2,
                'fname' => 'Jamal',
                'lname' => 'Ahmed',
                'roll'  => '12'
            ),
            array(
                'id'    => 3,
                'fname' => 'Ripon',
                'lname' => 'Ahmed',
                'roll'  => '9'
            ),
            array(
                'id'    => 4,
                'fname' => 'Nikhil',
                'lname' => 'Chandra',
                'roll'  => '8'
            ),
            array(
                'id'    => 5,
                'fname' => 'John',
                'lname' => 'Rozario',
                'roll'  => '7'
            ),
        );
        $serializedData = serialize($data);
        file_put_contents(DB_NAME, $serializedData);
    }

    function generateReport(){
        $serializedData = file_get_contents(DB_NAME);
        $students = unserialize($serializedData);
    ?>
        <table class="table table-striped ">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Roll</th>
                <th>Action</th>
            </tr>
            <?php 
                foreach($students as $student){
                    ?>
                        <tr>
                            <td><?php printf("%s", $student['id']); ?></td>
                            <td><?php printf("%s %s", $student['fname'], $student['$lname']); ?></td>
                            <td><?php printf("%s", $student['roll']) ?></td>
                            <td width="25%"><a href="#" class="btn btn-success">Edit</a>  <a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>
                    <?php
                }
            ?>
        </table>
    <?php
    }
?>