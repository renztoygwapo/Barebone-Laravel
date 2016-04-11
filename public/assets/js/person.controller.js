angular
    .module('app')
    .controller('PersonController', PersonController);


PersonController.$inject = ['PersonFactory'];
function PersonController(PersonFactory) { 
	var vm = this;

	vm.personInfo={};
	vm.personList=[];
	vm.save = save;
	vm.deletePerson = deletePerson;

	getAll();

	function getAll(argument) {
		PersonFactory.getAll().then(function (data) {
			vm.personList=data.data.personList;
			return vm.personList;
		});
	}
	function save(){
		PersonFactory.save(vm.personInfo)
			.then(function(data) {
				vm.personList.push(data.data.person);
				clearInputs();
				return vm.personList;
			});
	}
	function deletePerson(person) {
		PersonFactory.deletePerson(person)
			.then(function(data) {
  				vm.personList.splice(vm.personList.indexOf(person), 1);  
				return vm.personList;
			});
	}

	function clearInputs(){
		vm.personInfo={};
		return vm.personInfo;
	}
}