<?php 

$file= "domo.json";

$json_string= file_get_contents($file);

$json_decode= json_decode($json_string, true);

echo '<table border="1"> <tr><th>ID</th><th>name</th><th>Section</th><th>City</th></tr>';
foreach($json_decode as list( "id"=>$id, "name"=>$name, "section"=>$section, "city"=>$city)){
    ?>
    <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $name; ?></td>
        <td><?php echo $section; ?></td>
        <td><?php echo $city; ?></td>
        
    </tr>
    <?php
}
echo '</table>';