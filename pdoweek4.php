<?php
echo "Alle producten<br><";
     $stmt = $pdo->query("select * from producten");
     while ($row = $stmt->fetch()) {
          echo "productnaam " . $row['product_naam']."<br>";
          echo "prijs per stuk " . $row['prijs_per_stuk']."<br>";
          echo "omschrijving " . $row['omschrijving']."<br><br>";
     }

     $productCode = 1;
     echo "productcode 1 <br>";
     $stmt = $pdo->prepare("select * from producten where product_code=?");
     $stmt->execute([$productCode]);

     while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          echo "productnaam " . $row['product_naam'] . "<br>";
          echo "prijs per stuk " . $row['prijs_per_stuk'] . "<br>";
          echo "omschrijving " . $row['omschrijving'] . "<br><br>";
     }

     $productCode = 2;
     echo "Productcode 2 <br>";
     $stmt = $pdo->prepare("select * from producten where product_code = :product_code");
     $stmt->bindParam(':product_code', $productCode);
     $stmt->execute();

     while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          echo "productnaam " . $row['product_naam'] . "<br>";
          echo "prijs per stuk " . $row['prijs_per_stuk'] . "<br>";
          echo "omschrijving " . $row['omschrijving'] . "<br><br>";
     }
     ?>