<?php            
                echo $_REQUEST["ativador"]; 
                $conexaoArduino = fopen("COM3","w");//depende a porta do arduino
                      fwrite($conexaoArduino,$_REQUEST["ativador"]);
                      fclose($conexaoArduino);
?>