var MyApp = angular.module('MyApp', ['ui.bootstrap','ngRoute']);

MyApp.config(function($routeProvider){
    $routeProvider
    .when('/',{
        templateUrl: 'templates/home.html',
        controller:'CarouselDemoCtrl'
    })
    .when('/Login',{
        templateUrl: 'templates/Login.html'
    })
    .when('/SignUp',{
        templateUrl: 'templates/SignUp.html'
    })
    .otherwise({
        template: '<div>Under Ctrn</div>'
    })

});



MyApp.controller('CarouselDemoCtrl',function($scope){
  $scope.myInterval = 3000;
  $scope.slides = [
    {
      image: 'img/bgd1.jpg',
      button_data : 'Login/Signup',
        button_link:'#/Login',
        
    },
    {
      image: 'img/bgd2.jpg',
        button_data : 'About Us',
        button_link:'#/'
    },
    {
      image: 'img/bgd3.jpg',
        button_data : 'Contact Us',
        button_link:'#/'
    },
    {
      image: 'img/bgd1.jpg',
      button_data : 'News Feed',
        button_link:'#/'
    },
      {
      image: 'img/bgd3.jpg',
      button_data : 'Know More',
      button_link:'#/'
    }
  ];
});

MyApp.controller('ExampleController', ['$scope', function($scope) {
  $scope.myHTML =
     'I am an <code>HTML</code>string with ' +
     '<a href="#">links!</a> and other <em>stuff</em>';
}]);


    
