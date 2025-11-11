<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tabel Perkalian</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: white;
      margin: 30px;
    }
    table {
      border-collapse: collapse;
      text-align: center;
    }
    th, td {
      border: 1px solid black;
      width: 40px;
      height: 30px;
      font-weight: bold;
    }
    .header {
      background-color: limegreen;
      color: white;
    }
    .kolom {
      background-color: limegreen;
      color: white;
    }
    .kuning {
      background-color: yellow;
    }
    .biru {
      background-color: cyan;
    }
    .judul {
      background-color: #d8fdd8;
      font-weight: bold;
    }
  </style>
</head>
<body>
  
  <?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
  ?>
  <table>
    <tr>
      <th class="judul">bilangan</th>
      <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<th class='header'>$i</th>";
        }
      ?>
    </tr>

    <?php
      for ($i = 1; $i <= 10; $i++) {
          echo "<tr>";
          echo "<td class='kolom'>$i</td>";
          for ($j = 1; $j <= 10; $j++) {
              $hasil = $i * $j;
              if ($i % 2 != 0 && $j % 2 != 0) {
                  echo "<td class='kuning'>$hasil</td>";
              } else {
                  echo "<td class='biru'>$hasil</td>";
              }
          }
          echo "</tr>";
      }
    ?>
  </table>

</body>
</html>
