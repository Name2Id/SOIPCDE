<h1>Como se crea un unico punto de acceso.</h1>
<p>
    Para obtener un unico punto de acceso
    se necesitan de dos archivos esencialmente
    el archivo .htaccess y el archivo index
    <br><br>
    en el archivo index debera estar almacenado
    el codigo referente al manejo de las rutas 
    mientras que en el archivo .htaccess deberas
    escribir el siguiente codigo :
    <br><br>
    <p>
    <?php highlight_file('.htaccess'); ?>
    </p>
</p>
<h2>el index</h2>
<p>
    <?php highlight_file('./index.php'); ?>
</p>
<h2>el Autoload</h2>
<p>
    <?php highlight_file('./Autoload.php'); ?>
</p>
<h2>el Autoload Carga la Clase FiltrarUrl</h2>
<p>
    <?php highlight_file('./FiltrarUrl.php'); ?>
</p>
<h2>el UrlsRegister</h2>
<p>
    <?php highlight_file('./UrlsRegister.php'); ?>
</p>
<p>
    En este archivo almacenaremos 
    todas las rutas que seran validas
    en este proyecto.
</p>
<h2>el Switcher</h2>
<p>
    <?php highlight_file('./Switcher.php'); ?>
</p>
<p>
    El Switcher se encarga de verificar
    que el url ingresado por el navegador
    este registrado y una vez se verifica 
    su existencia se procede a realizar
    la busqueda de las acciones requeridas.
</p>