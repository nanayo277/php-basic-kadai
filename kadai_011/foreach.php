<html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP課題</title>
 </head>
 
 <body>
     <p>
         <?php
         $personal_date = ['名前' => '玉ねぎ', '値段' => '200', '産地' => '北海道' ];
 
         
         foreach ($personal_date as $key => $value) {
        echo "{$key}:{$value}<br>";
         }
         ?>
     </p>
 </body>
 
 </html>