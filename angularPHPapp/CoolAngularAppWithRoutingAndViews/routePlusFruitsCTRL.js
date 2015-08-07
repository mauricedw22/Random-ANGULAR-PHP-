
app.config(function($routeProvider){
	
	$routeProvider.when('/default',{
		templateUrl: 'templates/default.html',
		controller: 'defaultCTRL'		
	}).when('/fruits:username',{
		templateUrl: 'templates/fruits.html',
		controller: 'fruitsCTRL'
    }).when('/view1',{
		templateUrl: 'templates/views/view1.html',
		controller: 'viewCTRL'
    }).when('/view2',{
		templateUrl: 'templates/views/view2.html',
		controller: 'viewCTRL'		
	}).otherwise({ redirectTo: '/default'});	
	
});

app.controller('defaultCTRL', function($scope){
	
	$scope.message = 'This is the default controller and default view!!!';
	
	
});

app.controller('viewCRTL', function($scope, $routeParams){

  $scope.email = $routeParams.userEmail;	
	
});

app.controller('fruitsCTRL',function($scope, $routeParams){
  
  $scope.fruitsCalsTotal = [];
  
  $scope.fruitsCarbsTotal = [];
  
  $scope.totalCals = 0;
  
  $scope.totalCarbs = 0;
  
  $scope.totalData = "";
  
  $scope.noClick = false;
  
  $scope.username = $routeParams.username;
  
  $scope.apple = function(){
  
    $scope.appleCals = 95;
	$scope.appleCarbs = 25;
	
	$scope.fruitsCalsTotal.push($scope.appleCals);
	$scope.fruitsCarbsTotal.push($scope.appleCarbs);
  
  };
  
  $scope.banana = function(){
    
	$scope.bananaCals = 105;
	$scope.bananaCarbs = 27;
	
	$scope.fruitsCalsTotal.push($scope.bananaCals);
	$scope.fruitsCarbsTotal.push($scope.bananaCarbs);
  
  };
  
  $scope.orange = function(){
  
    $scope.orangeCals = 45;
	$scope.orangeCarbs = 11;
	
	$scope.fruitsCalsTotal.push($scope.orangeCals);
	$scope.fruitsCarbsTotal.push($scope.orangeCarbs);
  
  };
  
  $scope.getTotal = function(){
    
	for(var i=0;i<$scope.fruitsCalsTotal.length;i++){
	 
	   $scope.totalCals += $scope.fruitsCalsTotal[i];
	   
	   $scope.totalCarbs += $scope.fruitsCarbsTotal[i];
	 
	 }
	 
	  $scope.totalData = "Total Calories are " + $scope.totalCals + " and total carbs are " + $scope.totalCarbs;
	  
	  $scope.noClick = true;
  
  };

});  