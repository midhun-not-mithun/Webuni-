<?php
 try {
 	$dbname ="webuni2"; //name of database
 	$username = "root";
 	$password = "";
 	$host = "localhost";
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            // execute the stored procedure
            $sql = 'CALL fetchall()';
            // call the stored procedure
            $q = $pdo->query($sql);
            $q->setFetchMode(PDO::FETCH_ASSOC);


        } catch (PDOException $e) {
            die("Error occurred:" . $e->getMessage());
        }

?>
  <table>
 <?php while ($r = $q->fetch()): ?>
                <tr>
                    <td><?php echo $r['contact'] ?></td>
                    <td><?php echo $r['user_name'] ?>
                    </td>
                </tr>
<?php endwhile; ?>
   </table>