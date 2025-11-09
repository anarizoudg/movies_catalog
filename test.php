<?php
try {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=movies_catalog", "root", "TuNuevaContraseña");
    echo "listo"; 
} catch (PDOException $e) {
    echo " Error: " . $e->getMessage(); 
}
