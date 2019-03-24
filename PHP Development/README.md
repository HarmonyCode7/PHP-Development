# PHP Callback Functions and Associative arrays

   #Callback Functions
   In most programming languages functions can be passed to other functions as parameters. They can then be invoked (called within the callee function) inside the function.
   
   In PHP callaback functions can be called in two ways.
   - Callback without parameters, use call_user_func($callback).
   - Callback with parameters, use call_user_func_array($callback, array($params_list).
   
 In this code I have a createTable function, which creates a table with contents of it provided by a callback function. Its important to note that however, if the callback os not provided 
 the function is still able to run.


 
