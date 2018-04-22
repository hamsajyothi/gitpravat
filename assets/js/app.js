var ajaxExample = angular.module('ajaxExample', []);
ajaxExample.controller('mainController',function($scope,$http){
    $scope.people;
    $scope.getURL = function() {
          $http({
               method: 'POST',
               url:  BASEURL+'urlshort/create',
               data: {url: $scope.url},
			   //headers: {'Content-Type': 'application/x-www-form-urlencoded'},
          }).then(function (response) {// on success
				$scope.shorturlk=response.data;
				addthis.update('share', 'url', response.data);
				addthis.update('share', 'title', "Shared by ShortURL");
				addthis.update('share', 'description', "Shared by ShortURL");
            
          }, function (response) {
              
               console.log(response.data,response.status);
               
          });
    };


   
});

function copyText(element) {
  var range, selection, worked;

  if (document.body.createTextRange) {
    range = document.body.createTextRange();
    range.moveToElementText(element);
    range.select();
  } else if (window.getSelection) {
    selection = window.getSelection();        
    range = document.createRange();
    range.selectNodeContents(element);
    selection.removeAllRanges();
    selection.addRange(range);
  }
  
  try {
    document.execCommand('copy');
  }
  catch (err) {
    alert('unable to copy text');
  }
}