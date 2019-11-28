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
        foreach ($this->qualityList as $qualityName) {
            if (strpos($string, $qualityName) !== false) {
                //Removes the quality from string
                $newString = str_ireplace($qualityName, "", $string);
                //Add quality command piece to property
                $this->quality = '&quality='.$qualityName;
                //Returns new string without quality name
                return $newString;
                break;
            } else {
                $this->quality = '&quality='.$this->qualityList[0];
            }
        }
    }
}