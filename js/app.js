var app = angular.module('myApp', []);
 
app.controller('FormCtrl', FormCtrl);
 
function FormCtrl(){
    this.firstname = "";
    this.lastname = "";
    this.emailaddress = "";
}