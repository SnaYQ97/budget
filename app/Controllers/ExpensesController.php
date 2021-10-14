<?php

namespace App\Controllers;

//use CodeIgniter\Autoload;
use CodeIgniter\Config\Autoload;
use CodeIgniter\Controller;
//use App\Controllers\BaseController;
//use App\Models\YourModel; // define Your Model here 

class ExpensesController extends BaseController 
{
    public function __construct() {
        
        
    }

    private $config;

    private function createViewWithData($className, $functionName, $data='') {
        require(APPPATH . "Files\ViewsData.php"); //export taht to other class in the future
        $this->config = $config;
        $config = $this->config;
        
        $viewConfig = $config[$className][$functionName];
        $data = [
            'data' => $data,
            'header' => $viewConfig['header'],
            'content' => $viewConfig['content'],
        ];
        
        echo view($viewConfig['headerPath'], $viewConfig['header']);

        /* if(isset($viewConfig['components']) && is_array($viewConfig['components'])) {
            $components = $viewConfig['components'];
            foreach($components as $component) {
                //echo view($viewConfig['viewPath'], $data); optional data
                //var_dump($component);
                foreach($component as $items) {
                    //var_dump();
                    echo view($items['path']);
                    // foreach($items as $item) {
                        
                    //    var_dump($item);
                    //} 
                }
            }
        } */

        echo view($viewConfig['viewPath'], $data);
    }

    public function index() 
    {   
        $this->createViewWithData('ExpensesController','index');
        
    }
}


