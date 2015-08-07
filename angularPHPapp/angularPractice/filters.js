
app.filter('myFilter', function(){
  
    return function(num){
		
		var output;
		
		if(!num){
			
			output = 'Type something!';	
			
			
		}else if(!isNaN(num)){
			
			output = 'You decided to type numbers!';
			
		}else if(isNaN(num)){
		
            output = 'You are typing letters and chars!';	
			
		}
		
		return output;
		
	}  
  
  });