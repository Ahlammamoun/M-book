<?php


namespace Mbook\Controllers;

use Mbook\Models\Language;
use Mbook\Models\Etat;


class CoreController
{


    protected function show($viewName, $viewData = [])

    {
        $absoluteURL = $_SERVER['BASE_URI'];
        global $router;



        //dump($viewData);
        extract($viewData);



        $languageObject = new Language();
        $footerLanguages = $languageObject->findFooterLanguages();
        //dump($footerLanguages);


        $etatObject = new Etat();
        $footerEtats = $etatObject->findFooterEtats();

        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }
}
