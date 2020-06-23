<?php 

$bd = new SQLite3("banco.db");

$sql = "DROP TABLE IF EXISTS cards";

if ($bd->exec($sql)) 
echo "\nTabela apagada \n";

$sql = "CREATE TABLE cards(
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        nome VARCHAR(200) NOT NULL,
        descricao VARCHAR(200),
        imagem VARCHAR(200),
        link VARCHAR(200)
    )
    ";

    if ($bd->exec($sql)) 
        echo "\nTabela criada \n";
    else
        echo "\nTabela não criada \n";

        $sql = "INSERT INTO cards (id, nome, descricao, imagem, link) VALUES
        (0, 'Motores',
        'Nenhuma',
        'https://cdn.pixabay.com/photo/2017/03/19/18/51/tuning-2157354_960_720.jpg',
        '')";

         if ($bd->exec($sql)) 
         echo "\nCard inserido\n";

         $sql = "INSERT INTO cards (id, nome, descricao, imagem, link) VALUES
         (
             1, 
             'Turbo',
             'Nenhuma',
             'https://media.istockphoto.com/photos/turbocharger-structure-scheme-picture-id649330904',
             ''
             )";

             if ($bd->exec($sql))
             echo "\nCard inserido\n";
             $sql = "INSERT INTO cards (id, nome, descricao, imagem, link) VALUES
             (
                 2, 
                 'Filtros de ar',
                 'Nenhuma',
                 'https://cdn.pixabay.com/photo/2018/01/06/21/57/motor-3066046_960_720.jpg',
                 ''
                 )";
    
                 if ($bd->exec($sql))
                 echo "\nCard inserido\n";; 
                 $sql = "INSERT INTO cards (id, nome, descricao, imagem, link) VALUES
                 (
                     3, 
                     'Cilindros',
                     'Nenhuma',
                     'https://media.istockphoto.com/photos/engine-pistons-crankshaft-mechanism-3d-render-picture-id1059972498',
                     ''
                     )";
        
                     if ($bd->exec($sql))
                     echo "\nCard inserido\n";; 
          