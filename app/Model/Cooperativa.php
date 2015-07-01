<?php

App::uses('AppModel', 'Model');
class Cooperativa extends AppModel {
	
	
	 var $name = 'Cooperativa';
	var $i = 1;


    function import($filename) {
        

     
        $filename = TMP . 'uploads' . DS . 'Cooperativa' . DS . $filename;

      
        $handle = fopen($filename, "r");


        $header = fgetcsv($handle);

    

		
        while (($row = fgetcsv($handle)) !== FALSE) {
            $i++;
            $data = array();

          
            foreach ($header as $k=>$head) {
               
                if (strpos($head,'.')!==false) {
                    $h = explode('.',$head);
                    $data[$h[0]][$h[1]]=(isset($row[$k])) ? $row[$k] : '';
                }
               
                else {
                    $data['Cooperativa'][$head]=(isset($row[$k])) ? $row[$k] : '';
                }
            }

                   
            $id = isset($data['Cooperativa']['id']) ? $data['Cooperativa']['id'] : 0;

     
          if ($id) {
               
                $this->id = $id;
            }

            else {
                $this->create();
            }

        

      
            $this->set($data);
            if (!$this->validates()) {
                $this->_flash('warning');
                $return['errors'][] = __(sprintf('Post for Row %d failed to validate.',$i), true);
            }

    
		!$this->save($data);
             

     
            
            
            
        }


        fclose($handle);


     

    }
}