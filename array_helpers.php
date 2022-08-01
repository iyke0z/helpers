<?php 

	function sameValuesInArray(array $array) {
		/*
		    Author: Anikwe Ikenna
		    Email: eddyiyke3@gmail.com		    
		    php function returns values that occur more than once in an array    
		    $array1 = array("a"=>"red","b"=>"green","c"=>"red", "d" => "blue", "e" => "blue");
			$array2 = [1,1,3,4,5,6,2,7,8,9,9];
			sameValuesInArray($array1);
		    
		    expected output:
		    Array
		    (
		        [0] => 1
		        [1] => 9
		    )
		*/
	    $samevalues = array();
	    $getCount = array_count_values($array);
	    foreach ($getCount as $key => $value) {    
	        $value > 1 ? array_push($samevalues, $key) : '';        
	    }        
	    return $samevalues;
	}


	//php function returns value that are thesame in an array    
	function getElementByValue(string $key, array $valueArr, array $array){
	    $objects = array();
	    foreach ($valueArr as $valueCheck) {
	        foreach ($array as $value) {
	            if($value[$key] == $valueCheck){                
	                array_push($objects, $value);
	            }
        	}
	    }
	    return $objects;
	}

	//php function returns values that are thesame in an object
	function getSameValueInObject(array $object, string $key){		
    	if(count($object) > 1){
        	$sameValue = array();                        	          
            	foreach ($object as $value) {              
            		array_push($sameValue, $value[$key]);                 
                }                              
	        $multipleOccurringVal = sameValuesInArray($sameValue);        
	        $showObjects = getElementByValue($key, $multipleOccurringVal, $object);
	        return $showObjects;
	    }else{
	        return "Array size must be greater than one";
	    }
		
	}

	function getHighestValueInObject(array $object, string $key){
		$highest = [];
		foreach ($object as $value) {
			array_push($highest, $value[$key]);
		}		
		return max(...$highest);

	}

	// $array = [ ["name"=>'Ikenna', "age"=>"25", "gender"=>'male'], 
	//                ["name"=>'Edmund', "age"=>"25", "gender"=>'male'],
	//                ["name"=>'Beauty', "age"=>"22", "gender"=>'female'],];
	//  	getHighestValueInObject($array, 'age');
	// returns a new array
	// [
	//   { name: 'Ikenna', age: '25', gender: 'male' },
	//   { name: 'Edmund', age: '25', gender: 'male' }
	// ]
?>