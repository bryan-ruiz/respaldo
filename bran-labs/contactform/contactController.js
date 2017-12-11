angular.module('branLabs').controller('ContactCtrl', ['$scope', '$http', ContactCtrl]);

function ContactCtrl($scope, $http) {
	$scope.sendmail = function() {
		console.log('ENTRA');
		
	}
}