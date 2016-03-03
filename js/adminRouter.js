var MyApp = angular.module('MyApp', ['ui.bootstrap','ngRoute']);

MyApp.config(function($routeProvider){
    $routeProvider
    .when('/User_Activities',{
        templateUrl: 'templates/CMS/admin_home.html'
    })
    .otherwise({
        template: '<div>Under Ctrn</div>'
    })

});

MyApp.controller('sidebar', function($scope) 
                 {
  var trigger = false;
    $scope.user=true;
    $scope.hambrgr="hamburger is-open";
    $scope.wrapper="wrapper toggled";
        $scope.toggle = function() {
                  if(trigger==true)
                {
                    $scope.hambrgr="hamburger is-open";
                    $scope.wrapper="wrapper toggled";
                    trigger=false;
                }
            else
                {
                    $scope.hambrgr="hamburger is-closed";
                    $scope.wrapper="wrapper";
                    trigger=true;
                }
        }
});
