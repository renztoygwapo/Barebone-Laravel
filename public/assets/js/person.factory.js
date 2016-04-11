angular
    .module('app')
    .factory('PersonFactory', PersonFactory);

PersonFactory.$inject = ['$http'];
function PersonFactory($http) {
    var service  = {
    	save:save,
    	getAll:getAll,
    	deletePerson:deletePerson
    }
    return service;

    function save(person){
    	return $http.post('/person', person)
    		.then(function(data) {
    			return data;
    		}, function(){
    			alert("Failed!");
    		});
    }
    function getAll(data){
    	return $http.get('/persons')
    		.then(function(data) {
    			return data;
    		}, function(){
    			alert("Failed!");
    		});
    }
    function deletePerson(person) {
    	return $http.delete('/person/'+person.id)
    		.then(function(data) {
    			return data;
    		}, function(){
    			alert("Failed!");
    		});
    }
   
}