<?php 

class ProcessData {
    //Properties
    public $itemsArray; 
    public $quality;
    public $qualityList = ['Unique','Strange','Vintage','Genuine','Haunted','Unusual'];

    //Methods
    function split_items_into_array ($items) {
        $this->itemsArray = explode("\r\n",$items);
        return $this->itemsArray;
    }

    function convert_quality_to_command ($string) {
        //CHANGE THIS TO A FOREACH LOOP YOU DUMB DUCK
        for ($i = 0; $i < sizeof($this->qualityList); $i++) {
            if (strpos($string, $this->qualityList[$i]) !== false) {
                //Removes the quality from string
                $newString = str_ireplace($this->qualityList[$i], "", $string);
                //Add quality command piece to propertie
                $this->quality = '&quality='.$this->qualityList[$i];
                //Returns string without quality
                return $newString;
                break;
            } else {
                $this->quality = '&quality='.$this->qualityList[0];
            }
        }
    }
}