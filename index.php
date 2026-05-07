<?php
require_once 'Alumno.php';
require_once 'Docente.php';

$docente1 = new Docente("Roberto", "Solis", "Robles", 45, "Sistemas", "M.C,", 15);
$docente2 = new Docente("Ana", "Lopez", "Martinez", 38, "Matematicas", "Dr.", 10);
$docente3 = new Docente("Jesus", "Salas", "Marin", 45, "Ingeneria", "Ing.", 11);
$docente4 = new Docente("Diana Sarahi", "Morales", "Venegas", 35, "Ingeneria", "M.I.M.", 9);

$alumno1 = new Alumno("Alonso", "Lira", "Espinoza", 20, "Sistemas", 9.3, 5);
$alumno2 = new Alumno("María", "Gomez", "Perez", 19, "Matemáticas", 8.7, 3);
$alumno3 = new Alumno("Juan de Dios", "Antunez", "Gallegos", 19, "Programacion", 9.0, 3);
$alumno4 = new Alumno("Miguel Angel", "Luna", "Camacho", 19, "Programacion", 9.6, 3);

echo $docente1->obtenerNombreCompleto() . "<br>";
echo $docente2->obtenerNombreCompleto() . "<br>";
echo $docente3->obtenerNombreCompleto() . "<br>";
echo $docente4->obtenerNombreCompleto() . "<br>";
echo $alumno1->obtenerNombreCompleto() . "<br>";
echo $alumno2->obtenerNombreCompleto() . "<br>";
echo $alumno3->obtenerNombreCompleto() . "<br>";
echo $alumno4->obtenerNombreCompleto() . "<br>";

?>