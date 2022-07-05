# Guía para poder trabajar con un server de bases de datos 

[ ] Conexión a server y selección de base de datos

    mysqli_connect();  

[ ] Creación de mensaje SQL

    $sql = "SELECT ...";  

[ ] Ejecución de mensaje SQL

    mysqli_query();  

[ ] Informes (muestreo de reporte en pantalla)  

> Generamos vista con el reporte resultado de la ejecución de mensaje SQL  
> Si es una consulta, para mostrar un listado, vamos a utilizar 
> la función intermedia  

    mysqli_fetch_assoc();

