<html>
  <head>
    <title>My First React App</title>
    <link rel="stylesheet" href="index.css" />
  </head>
  <body>
    <h1>Heipparalla</h1>

  <?php echo "My first PHP ECHO" ?>

  <?php 
  $conn = new PDO("pgsql:host=possukka;port=5432;dbname=postgres;user=postgres;password=example");

 // var_dump (value: $conn) ;
 // print_r(value: $conn) ;
  $query = $conn -> query("SELECT * FROM person") ;
  $rows = $query->fetchAll(PDO::FETCH_ASSOC) ;

  ?>

  <ul>
    <?php foreach($rows as $row) : ?>
      <li><?php echo $row['name'] ?></li>
    <?php endforeach ?>
  </ul>

    <p>Une jam Jasmina dhe jm studente</p>

    <p>sot po mesojme PHP , huomenna opetan kyynimista vielä nuori ja reipas</p>

    <?php // echo phpinfo()?>
  </body>
</html>
