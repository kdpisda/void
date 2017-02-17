<?php 

/* Void 0.1
*  Author :: Kuldeep Pisda
*
*  Routing of the application will be done here in this file
*
*  For routing we will use an array. We will put the routing as a key in the array
*  For Example 
*  
*  Consider the given URL
*  www.example.com/myClass/myMethod/123
*  We are calling myMethod method of controller myController and giving it a parameter 123
*  
*  so we will write here
*  $route['myClass/myMethod/:'] = 'myClass/myMethod';
*  
*  ':' speifies that a parameter is reuired.
*  
*  Note: We can have different names too in route key other than the name of controller and the method.
*  The only thing required is we must specify it here.
*
*  You must specify a default controller and if a corresponding method is not defined index method will 
*  be called. This is for all the routing values i.e.
*  
*  www.example.com/myClass will berouted as,
*  $route['myClass'] = 'myClass';
*  By default it will call index method as is it not defined.
*
*  So write your values here
*/

$route['default'] = 'welcome';