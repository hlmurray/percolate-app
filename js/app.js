var app = angular.module('myApp', []);
 
app.controller('FormCtrl', FormCtrl);
 
function FormCrtl(){
    this.firstname = "default";
    this.lastname = "default";
    this.emailaddress = "default";
}