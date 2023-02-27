<?php

namespace Mbook\Controllers;

use Mbook\Models\{Product, Language, Category, Etat};



class CatalogController extends CoreController
{
    public function categoryAction($urlParams)
    {
        //dump($urlParams);
        $categoryId = $urlParams['id'];
        $CategoryObject = new Category();
    
        $currentCategoryObject = $CategoryObject->find($categoryId);
       
        //dump($currentCategory);

        $productObject = new Product();
        $productsListWithNameAndEtatByCategory = $productObject->findProductsWithNameAndEtatByCategoryID($categoryId);


       // dump($productsListWithNameAndEtatByCategory);
      // dump($currentCategoryObject);
        $this->show('category', [
            'current_category_object' => $currentCategoryObject,
            'products_list_with_name_and_etat_by_category' => $productsListWithNameAndEtatByCategory
        
        ]); 
      
    }


    public function languageAction($urlParams)
    {

        $languageId = $urlParams['id'];
       
        $this->show('language', [

            'language_id' => $languageId,
        ]);
           
    }

    //$productObject = new Product();
    //$product4 = $productObject->find(4);


    public function etatAction($urlParams)
    {


        $etatId = $urlParams['id'];
     
        $etatObject = new Etat();
        $footerEtats = $etatObject->findFooterEtats();

  
        $this->show('etat', [
           
            'etat_id' => $etatId,
           'footer_etats' => $footerEtats,
        
        ]);
    }
 

    public function productAction($urlParams)
    {

        $productId = $urlParams['id'];

        $productObject = new Product();
        $productData =
            $productObject->findProductWithCategoryAndLanguageNAme($productId);

        // var_dump($productData);

        $this->show('product', [
            // 'product_id' => $productId,
            'product_data' => $productData

        ]);
    }





}
