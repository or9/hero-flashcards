(function (app, undefined) {

	app.directive("flashCard", Directive);

	function Directive () {
		return {
			scope: {
				character: "=character"
			},
			templateUrl: function (e, attr) {
				//console.log("flashCard directive e? ", e, " attr? ", attr);
				return "/js/components/flashCard.html";
			},
			replace: true,
			restrict: "E"
		};
	}

})(angular.module("cardgameApp"));
