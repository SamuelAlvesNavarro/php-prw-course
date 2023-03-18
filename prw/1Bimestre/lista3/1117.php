<?php
  $notasval = 0;
  $cont = 0;
  
  while ($cont < 2) {
      $nota = readline();
  
      if ($nota < 0 || $nota > 10) {
          print("nota invalida\n");
      } else {
          $notasval += $nota;
          $cont++;
      }
  }
  
  $media = $notasval / 2;
  $media = number_format($media, 2, ".", "");
  print("media = $media\n");
?>