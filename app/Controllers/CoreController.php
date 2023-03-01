<?php


namespace Mbook\Controllers;

use Mbook\Models\Language;
use Mbook\Models\Etat;
use Mbook\Models\Category;

class CoreController
{


    protected function show($viewName, $viewData = [])

    {
        $absoluteURL = $_SERVER['BASE_URI'];
        global $router;

    
        //dump($viewName);
        extract($viewData);
          
        //$categoryObject = new Category();
        //$homeNavCategories = $categoryObject->findAll();

    
        $languageObject = new Language();
        $footerLanguages = $languageObject->findFooterLanguages();
       
        //dump($footerLanguages);
        

        $etatObject = new Etat();
        $footerEtats = $etatObject->findFooterEtats();


        $categoryObject = new Category();
        $categories = $categoryObject->findAll();
        //dump($categoryObject);//


        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }
}
