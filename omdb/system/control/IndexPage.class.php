<?php
/**
 * @author Katija Jurić i Lucija Mikulić
 * @copyright 2022
 */

 //defaultni controller
 class IndexPage extends AbstractPage {
     //TODO: Što definirati u index controlleru?
     //primjer: 
     //https://www.php.net/manual/en/yaf.tutorials.php
     //Controllers are the heart of your application, as they determine how HTTP requests should be handled.
     //https://www.php.net/manual/en/language.oop5.abstract.php
     
     public function code()
     {
        $this->templateName = 'index';
        $this->v['resursi'] = [
           'https://localhost/omdb/Fetch',
           'https://localhost/omdb/CreateUser',
           'https://localhost/omdb/test'
        ];

        //....
     }
    
}
 