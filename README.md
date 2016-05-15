# Console-Plugin

To install the plugin

    $ php pikia require pikia/console

# How to use

add route to use for console : 

get("console",function()
{
	Console::setup("jj");
});

add ajax route

get("jj",function()
{
	consoleResponse::exec();
});


