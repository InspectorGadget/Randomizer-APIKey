<?php require "randomizer.php" ?>
<!DOCTYPE html>

<!--
Copyright (C) 2017 RTGDaCoder

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->
<html>
    <head>
        <title> Randomizer | Auto Generator </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css"> .rtg { max-width: 700px; margin: 50px auto; padding: 30px; text-align: center; box-shadow: 0 0 5px rgba(0,0,0,.5) }
            article { text-align: left; padding: 40px; }
        </style>
    </head>
    <body>
        <div>
            
            <div class="rtg" >
                
                <footer>
                    <h1> PHP Script Auto Generated file! </h1>
                </footer>
                
                <header>
                    
                <h2>
                    
                    <?php
                    
                    $rand = mt_rand(1, 1000);
                    echo "Your randomized code: $rand";
                    
                    ?>
                    
                    <p> </p>
                    
                    <?php 
    
                        $t = date("H");
    
                            if($t < 20) {
                                echo "Have a great Day!"; 
                            }
                            else {
                                echo "Have a great Night!";
                            }
                     
                    ?>
                    
                </h2>
                    
                    <p> NOTE: You can refresh this page to test this feature, the number shouldn't be the same! </p>
                 

                </header>
                
                <footer>
                   <h4> <small> <?php onLast(); ?> </small> </h4>
                </footer>
                
            </div>
             
        </div>
    </body>
</html>