<?php
namespace App\Models;
class mobileSANumber {
  // Properties
  public $number;
  public $action;
  public $result;

  // Methods
  /*function __construct($number) {
    $this->number = $number;
  }*/
  function check_number($number) {
    
    //check if is present +27 prefix, in case not, adding it 
    $lenght = strlen($number);
    echo $lenght;
    if($lenght==9){
        $number = "+27".$number;
    }elseif($lenght==11){

    $number="+".$number;

    }
    echo "\n".$number;
    if( preg_match( "/^\+27[0-9]{9}$/", $number ) ){
        
        $result =  "Valid number";
    
    } else {
        
        $result = "Invalid number";
    
    }
    echo "\n".$result;
    echo "<script>
    alert('".$result."');
    location='/';
    </script>";
    }
  function check_csv($file) {

    $outputArray=[];

    while(!feof($file)){  
      $csvAsArray = fgetcsv($file);
        if(!feof($file))                    
        foreach($csvAsArray as $line){
                          
          $this->result="";
          $this->action="";
                          
          //get the nuber typed by the user
          $this->number = $line;
          echo $this->number."\n";
          //check if is present +27 prefix, in case not, adding it 
          $lenght = strlen($this->number);
          echo $lenght;
                            
            if($lenght==9){
                $this->number = "+27".$this->number;
                $this->action="CORRECTED adding +27";
                
              }elseif($lenght==11){
                              
                  $this->number="+".$this->number;
                  $this->action="CORRECTED adding just +"; 
                          
                   }
                              
              if( preg_match( "/^\+27[0-9]{9}$/", $this->number ) ){
                                  
                  $this->result =  "Valid number";
                                
                  } else {
                                  
                        $this->result = "Invalid number";
                              
                      }
                          
                      echo "\n".$this->result;
                               
                      array_push($outputArray, array($this->number, $this->result, $this->action));
                                
                      }
                      }
                        var_dump($outputArray);
                          
                          
                        echo "<script>
                          location='index.html';
                          </script>";
                          
                        ob_clean();
                          
                        $data=[];
                        // Create an array of data in order to create the CSV file response
                        foreach($outputArray as $line)
                        array_push($data, $line);
                          
                        //var_dump($data);
                        // Open a file handle for writing
                        $fp = fopen('data.csv', 'w');
                          
                        // Write the data to the file
                        foreach ($data as $row) {
                            fputcsv($fp, $row);
                          }
                          
                        // Close the file handle
                        fclose($fp);
                          
                          
                        // download file
                       /* header('Content-type: text/csv');
                        header('Content-disposition:attachment; filename="data.csv"');
                        readfile("data.csv");*/
  }
}