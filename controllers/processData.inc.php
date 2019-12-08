<?php 

class ProcessData {
    //Properties
    public $option;

    public $intent;
    public $limit;

    public $itemsArray; 

    public $quality;
    public $qualityList = ['Unique','Strange','Vintage','Genuine','Haunted','Unusual'];

    public $craftable;

    public $australium;

    
    public $killstreak;
    //Do this ones in methods
    public $effectsArray = json_decode('./unusual_effects.json');

    public $effect;

    public $sellKeys, $buyKeys, $sellRef, $buyRef;

    //Methods
    function set_option($option) {
        if ($option == 'remove') {
            $this->option = '!'.$option.' item=';
        } else {
            $this->option = '!'.$option.' name=';
        }
        return $this->option;
    }

    function set_items ($items) {
        $this->itemsArray = explode("\r\n",$items);
    }

    function set_intent($intent) {
        $this->intent = '&intent='.$intent;
    }
    
    function set_limit($limit) {
        $this->limit = '&limit='.$limit;
    }   

    function convert_quality_to_command ($item) {
        $qualityFound = false;

        foreach ($this->qualityList as $qualityName) {
                if (stripos($item, $qualityName) !== false) {
                    //Removes the quality from string
                    $newItem = str_ireplace($qualityName, "", $item);
                    //Add quality command piece to property
                    $this->quality = '&quality='.$qualityName;
                    
                    $qualityFound = true;

                    return trim($newItem);
                } 
        }

        if ($qualityFound === false) {
            $this->quality = '&quality='.$this->qualityList[0];
            return trim($item);
        }
    }

    function convert_australium_to_command($item) {
        if (stripos($item, "Australium") !== false) {
             //Removes the australium from string
             $newItem = str_ireplace("Australium", "", $item);
             //Add australium command piece to property
             $this->australium = '&australium=true';

             return trim($newItem);
        } else {
            $this->australium = '&australium=false';
            return $item;
        }
    }

    function convert_craftable_to_command($item) {
        if (stripos($item, "Uncraftable") !== false) {
            //Removes the uncraftable from string
            $newItem = str_ireplace("Uncraftable", "", $item);
            //Add craftable command piece to property
            $this->craftable = '&craftable=false';

            return trim($newItem);
       } else {
           $this->craftable = '&craftable=true';
           return $item;
       }
    }

    function convert_killstreak_to_command($item) {
        if (stripos($item, "Prof Killstreak") !== false) {
            //Removes the killstreak from string
            $newItem = str_ireplace("Prof Killstreak", "", $item);
            //Add killstreak command piece to property
            $this->killstreak = '&killstreak=3';

            return trim($newItem);
       } elseif (stripos($item, "Professional Killstreak") !== false) {
            //Removes the killstreak from string
            $newItem = str_ireplace("Professional Killstreak", "", $item);
            //Add killstreak command piece to property
            $this->killstreak = '&killstreak=3';

            return trim($newItem);
       } elseif (stripos($item, "Spec Killstreak") !== false) {
            //Removes the killstreak from string
            $newItem = str_ireplace("Spec Killstreak", "", $item);
            //Add killstreak command piece to property
            $this->killstreak = '&killstreak=2';

            return trim($newItem);
       } elseif (stripos($item, "Specialized Killstreak") !== false) {
            //Removes the killstreak from string
            $newItem = str_ireplace("Specialized Killstreak", "", $item);
            //Add killstreak command piece to property
            $this->killstreak = '&killstreak=2';

            return trim($newItem);
       } elseif (stripos($item, "Killstreak") !== false) {
            //Removes the killstreak from string
            $newItem = str_ireplace("Killstreak", "", $item);
            //Add killstreak command piece to property
            $this->killstreak = '&killstreak=1';

            return trim($newItem);
       } else {
            $this->killstreak = '&killstreak=0';
            return $item;
       }
    }


}