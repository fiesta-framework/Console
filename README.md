# Console-Plugin

To install the plugin

    $ php pikia require pikia/console

# How to use

add route to use for console : 

Route::get("console",function() { Console::setup("console_ajax"); });
Route::get( "console_ajax" ,function() { consoleResponse::exec(); });

you should change "console_ajax" string to a costum route 


