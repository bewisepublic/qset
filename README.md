# Question Sets

This is a simple question set that reflects the minimum requirements for what we do.

* Write a simple plugin called "iamwise" to intercept a view to check a cookie called "areyouwise" and if the cookie is set to "no" or not set, redirect the view to login page at "index.php?option=com_users&view=login" else allow the page to function normally. This plugin should only check for the component called "com_dashboard" and for view "dashboard"
* Write a simple json responding controller in the component "wiseapi" (the controller is called "events") with CORS header that will allow only a site 'http://www.b-yy.com" to access the api. 
* Write a jQuery plugin to receive some data from the "wiseapi" component and set it to a variable "wisedata". Log the variable "wisedata" to a console. Use defer and promise where possible.
*Write a directive in angular called "wisebar", that has an input box that will accept a name. Display this input data in parent container (not in directive but the container that is calling the directive). This directive can be used multiple times in the parent container, each bound with different variables. (isolated scopes)