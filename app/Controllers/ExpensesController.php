<?php

namespace App\Controllers;

//use CodeIgniter\Autoload;
use CodeIgniter\Config\Autoload;
use CodeIgniter\Controller;
//use App\Controllers\BaseController;
use App\Models\ExpensesModel; // define Your Model here 

class ExpensesController extends BaseController 
{
    public function __construct() {
        

    }

    private function getConfigs($className, $functionName) {
        require(APPPATH . "Files\ViewsData.php");
        
        $data = $config[$className][$functionName];
        return $data;
    }
    
    private function createViewWithData($className, $functionName, $dataFromControlerToView='') {
        //export that to other class in the future
        $viewsCongigData = $this->getConfigs($className, $functionName);
        
        foreach($viewsCongigData as $sections) {
            if(isset($sections['path'])) {
                if(isset($sections['data'])&&is_array($sections['data'])) {
                    echo view($sections['path'], $sections['data']);
                }else {
                    echo view($sections['path']);
                }
            }
            
            else {
                foreach($sections as $section) {
                    if(isset($section['open'])) {
                        if(isset($section['open'])&&isset($section['contents'])) {
                            echo view($section['open']);

                            foreach($section['contents'] as $component) {
                                if(isset($component['path'])) {
                                    if(isset($component['data'])&&is_array($component['data'])) {
                                        echo view($component['path'], $component['data']);
                                        
                                    }else {
                                        echo view($component['path']);
                                    }
                                }

                                if(isset($component['open'])) {
                                    echo view($component['open']);
                                } 
                                
                                if(isset($component['contents'])) {
                                    foreach($component['contents'] as $item) {
                                        if(isset($item['path'])) {
                                            if(isset($item['data'])&&is_array($item['data'])) {
                                                echo view($item['path'], $item['data']);
                                                
                                            }else {
                                                echo view($item['path']);
                                            }
                                        }

                                        if(isset($item['open'])&&isset($item['contents'])) {
                                            echo view($item['open']);
                                            
                                            foreach($item['contents'] as $element) {
                                                if(isset($element['path'])) {
                                                    if(isset($element['data'])&&is_array($element['data'])) {
                                                        echo view($element['path'], $element['data']);
                                                        
                                                    }else {
                                                        echo view($element['path']);
                                                    }
                                                }
                                            }
                                            
                                        }else {
                                            if(isset($item['open'])) {
                                                echo view($item['open']);
                                            }
                                            if(isset($item['clouse'])) {
                                                echo view($item['clouse']);
                                            }
                                        }
                                    }
                                } 

                                if(isset($component['clouse'])) {
                                    echo view($component['clouse']);
                                }
                            }
                            
                        }else {
                            echo view($section['open']);
                        }

                        if(isset($section['clouse'])) {
                            echo view($section['clouse']);
                        }   
                    }
                }
            }
        }
    }

    public function expenses() {   
        $this->createViewWithData('ExpensesController','expenses');
        
    }
    public function incomes() {   
        $this->createViewWithData('ExpensesController','expenses');
        
    }

    public function getExpenses() {   
        $ExpensesModel = new ExpensesModel();
        $response = $ExpensesModel->read();
        return json_encode($response);
    }
    public function create() {   

        //varibles from post
        $nick = $_POST["nick"];
        
        //init modal
        $ExpensesModel = new ExpensesModel();

        //prepare parameters
        $params = [
            
        ];
        //execute
        $this->$ExpensesModel->create($params);
    }
}


