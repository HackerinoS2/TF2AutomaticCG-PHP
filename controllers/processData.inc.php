<?php 

class ProcessData {
    //Properties
    public $itemsArray; 
    public $quality;

    //Methods
    function split_items_into_array ($items) {
        $this->itemsArray = explode("\r\n",$items);
        return $this->itemsArray;
    }

    function quality_to_command ($quality) {
        switch ($quality) {

            default:
            $this->quality = '';
        }
    }
}