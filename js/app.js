var app = angular.module('myApp', []);
 
app.controller('FormCtrl', FormCtrl);
 
function FormCtrl(){
    this.firstname = "default";
    this.lastname = "default";
    this.emailaddress = "default";
}