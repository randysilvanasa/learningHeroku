<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") { //* aqui se utiliza $_SERVER para que esta informacion se haga dentro de nuestro servidor 

    $firstname = htmlspecialchars($_POST["firstname"]); //* aqui se utiliza el htmlspecialchars para evitar que ingresen codigos diferentes y hackeen la informacion//*
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favoritepet = htmlspecialchars($_POST["favoritepet"]);

    if (empty($firstname)) { 
        exit();
    }  //*esto es utilizado para no seguir el codigo en caso de que no se llenen los espacios de informacion, asi mismo en el archivo de HTML se pone esta variable como "required" pero aun asi se puede tener acceso a la informacion si la modificamos desde la pestaña de inspeccionar y lo eliminamos. 


    echo "These are the data, that the user submitted:";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favoritepet;

}