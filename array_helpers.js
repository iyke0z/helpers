function sameValuesInArray(array){
	var arrCount = array.length
	var counts = [{}]
	var sameValuesInArray = []
	array.forEach(element => {
		counts[element] = (counts[element] || 0) + 1;
	})

	counts.forEach((value, index) => {
		if (value > 1) {
			sameValuesInArray.push(index)
		}	
	})

	return sameValuesInArray	
}

function getElementByValue(key, valueArr, array){
		// key to check agains
		// derivedArray
		// mainArray
	    var objects = [];
	    valueArr.forEach(valueCheck =>{
	    	array.forEach(value=>{
	    		if(value[key] == valueCheck){                
	                objects.push(value);
	            }
	    	})
	    }) 
	    return objects;
}

function getSameValueInObject(object, key){
	if (object.length > 1) {
		var sameValueInArray = []		
			object.forEach(element=>{
				sameValueInArray.push(element[key])
			})					
			var multipleOccurringVal = sameValuesInArray(sameValueInArray)
			var showObjects = getElementByValue(key, multipleOccurringVal, object);
			console.log(showObjects)
			return showObjects
	}else{
		return 'object must be greater than one'
	}
}

function getHighestValueInArray(object, key){
		if (object.length > 1) {
		var sameValueInArray = []		
		object.forEach(element=>{
			sameValueInArray.push(element[key] )			
		})					
		var highestVal = Math.max(...sameValueInArray)
		return highestVal
	}else{
		return 'object must be greater than one'
	}
}

// var array = [{"name":'Ikenna', "age":"25", "gender":'male'}, 
// 	               {"name":'Edmund', "age":"25", "gender":'male'},
// 	               {"name":'Beauty', "age":"22", "gender":'female'},
// 	               {"name":'Maggie', "age":"32", "gender":'female'},
// 	               ];
// 	 	getHighestValueInArray(array, 'age');
/*
	returns a new array
	[
	  { name: 'Ikenna', age: '25', gender: 'male' },
	  { name: 'Edmund', age: '25', gender: 'male' }
	]
*/