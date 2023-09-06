<?php
                $email = $row['id_reporter'];

              include( "./PHP/PrintJournalist.php");
              if($email == NULL){
                echo "@Astro Salesianum";
              }else{
              echo "@".$Name.$LastName;
              }
              ?>