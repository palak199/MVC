<?php

 /*** include the controller class ***/
 include __SITE_PATH . '/application/' . 'controller_base.php';

 /*** include the registry class ***/
 include __SITE_PATH . '/application/' . 'registry.php';

 /*** include the router class ***/
 include __SITE_PATH . '/application/' . 'router.php';

 /*** include the template class ***/
 include __SITE_PATH . '/application/' . 'template.php';

 /*** auto load model classes 
    function __autoload($class_name) {
    $filename = strtolower($class_name) . '.php';
    $file = __SITE_PATH . '/model/' . $filename;

    if (file_exists($file) == false)
    {
        return false;
    }
  include ($file);
}

 /*** a new registry object ***/
 $registry = new registry;

 /*** create the database registry object ***/
 // $registry->db = db::getInstance();
?>
