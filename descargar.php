


<?php
header("Content-disposition: attachment; filename=poder-y-finanzas-nov-18.pdf");
header("Content-type: application/pdf");
readfile("poder-y-finanzas-nov-18.pdf");
?>

<?php
//PHP en general
$file ="poder-y-finanzas-nov-18.pdf"; 
$filename = "poder-y-finanzas-nov-18"; // el nombre con el que se descargara, puede ser diferente al original 
header("Content-type: application/octet-stream"); 
header("Content-Type: application/force-download"); 
header("Content-Disposition: attachment; filename=\"$filename\"\n"); readfile($file); 
// Para KumbiaPHP, este seria nuestro metodo de accion
 public function descargar($nombre_archivo) {
        View::select(null, null); //Para no seleccionar ni vista ni template
        $file = dirname(APP_PATH) . "poder-y-finanzas-nov-18.pdf";
        $filename = "nombre_archivo.extencion";
        header("Content-type: application/octet-stream");
        header("Content-Type: application/force-download");
        header("Content-Disposition: attachment; filename=\"$filename\"\n");
        readfile($file);
    }