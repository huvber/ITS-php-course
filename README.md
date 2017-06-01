# Server Side programming and PHP

## Summary

* 01 Introduction
* 02 Syntax and basic operation
* 03 Function
* 04 Array
* 05 Flow Control
* 06 Request in PHP (SUPERGLOBALS)
* 07 Include and Require

## Introduction

Server Side Programs (for now on SSP) are a family of software, and software languages that work behind a server and return tipically a html page or text-format data (XML or JSON). There are many languages of this kind and in general most of every language could be a Server Side Language.

When you write a *URL* in your browser (the client) it will reach the machine (the server) linked to its domain. In this machine a *Server software* knows as a
**[HTTP SERVER](https://en.wikipedia.org/wiki/Web_server)** (Apache, TomCat, Nginx...) receive the request and return a page. In this process it is likely that the web-server will call a script to elaborate the page dynamically, maybe according to data retrieve from a database and return a page with dynamic content. This kind of scripts are the Server-Side Scripting.

![Example of a web request](https://docs.google.com/drawings/d/1FkF39BIxC3kjF1tw4MWrO2FbVqIE7CGqx3g_jBQ5vJ4/pub?w=960&h=720)


Before of the Web as-we-know most of the company and university were writing server software using tipically **C** or **Perl** pair with the  **[CGI](https://en.wikipedia.org/wiki/Common_Gateway_Interface)** protocol.

Soon a lot of scripting languages started to come out in order to simplify the generation of pages. Today we can see SSP in a various of languages like ASP, PHP, JAVA, RUBY, JAVSCRIPT, PYTHON, C#, GO, etc...

Since the beginning one language become quite famous and today is still the most common language used by most of the web. This languages is **PHP**

### PHP

PHP was born in 1995 from [Ramus Lendorf](https://en.wikipedia.org/wiki/Rasmus_Lerdorf) called *PHP/FI (Personal Home Page / Form Interpreter)*, lately rewrote by part of the community and called (in the third version) **PHP = PHP Hypertext Preprocessor**.

The language spread out very quickly, and even if it didn't have specific rules for the syntax and/or some coding style nor a coherent structure, it is more or less a sum of what a lot of people need by a SSP language, it became a standard the-facto of the web programming.

Today most of the biggest web sites and web applications are made partly or entirely in PHP. Some example:
* Facebook (whom is one of the biggest contributor of the language)
* Wikipedia
* Wordpress (and all the site made with it)
* Yahoo
* Zend Framework

In the early days, PHP had a lot of modifications, like the *Object Oriented Technique* or the born of **[HACK Dialect](https://en.wikipedia.org/wiki/Hack_(programming_language)** to improve the performance. But apart from that most of the web is still wrote in the old fashion PHP way. That's why, even if isn't the best language of the world, it's very important to know it and be able to use it if someone wants to become a web-developer.

## Syntax and Basic Operation

Since PHP is born from C, they have a lot of syntax and behaviours in common. Most of the basic functions have the same name as the corresponding one in C. But since PHP is born to simplify the developing of web service it also have some important differences.

### The MAIN?

As you probably know, in C language order is important (you can't write a prototype after the function declaration), but still what is inside the `main` function is what it will run before everything else.

In PHP the main is the entire file. So if you write a command in the beginning of your page it will run immediately. This is important to know because if you don't enclose something inside a function (we will later see how to do that) you can be sure that it will run.

### Scripting

Even if PHP is a completely programming languages and you can use it to wrote any kind of software, it was specifically born to use as a *scripting language*. Without enter inside the specific semantic of this expression we can say that a script is something compiled at run time and mostly of the time encapsulated inside something else.

We will use it typically inside a HTML tags. This is how most of the PHP websites are wrote. Here and Example:

```php
<!DOCTYPE html>
<html>
  <head><title>People Hello People</title></head>
  <body>
    <h1>My first PHP</h1>
    <p><?php echo "Hello People"; ?></p>
</html>
```

If you know a little bit of HTML you can notice something unusual. In the sixth line there is this strange tag `<?php ... ?>` with something inside. There is where we will write all our PHP scripts.
But if you save this file and open it with a modern browser the result wont show what's inside `<p></p>`. That's because most of the browser convert the script tag in HTML comments.

This is because in order to run PHP as explained before we will need a HTTP server with PHP extension. If we put it inside the server the result will be this:

![PHP Render](https://docs.google.com/drawings/d/10Ab-zsQWwPJ_JkvpyveEYM4uEEa-mj74EOH570xOhA4/pub?w=478&h=261)

This because the function `echo` in php render as html the string passed by. This will be the most useful command you will use.

Now you wrote your first PHP script. :D

### PHP.net
In order to proper learn PHP the most useful resource will be [PHP.net](PHP.net). This is the official PHP community website and the most extensive PHP reference.
So as an exercise take a look at the `echo` page inside the website:

http://php.net/manual/en/function.echo.php

As you can see it will start with the prototype of the method

```php
void echo ( string $arg1 [, string $... ] )
```
As we can see further this is a function and it says:
- the returned value (in this case is `void` - that means *nothing*)
- the name of the function
- the list of the parameters.

But let's go a little bit slower, starting with the basic things of php.

### Variables
A **variable** is, like in all the languages, a container of some value. In PHP every variable starts with `$`. So for example if I want to put the number 5 inside a variable called *five* I will write something like this:

```php
<?php
//Remember to start always with this tag
  $five = 5;
/* rember always to close it */
?>
```
>#### Comments
>As you can see I added comments to let you remember something important.

>Line comment will starts with `//`

>Block comments will start with `/*` and and with `*/`.

>Comments are very useful so use it as much as possible

So using the variable is kind of easy like in the other languages. As you can notice we didn't declare a **type** for the variable. That's because PHP is **LOOSELY TYPED** language, that's mean that the variables can contain any sort of data and you don't have to declare it, and you can change the nature of the type during the code (for further information read [Variables Type](https://en.wikipedia.org/wiki/Strong_and_weak_typing#Definitions_of_.22strong.22_or_.22weak.22) )

Another things you should notice that is very important. Most of every line of code (except for *flow control* and scope closures ) need to end with `;`. That's is something to write to stone and it's the first cause of mistake and bug in the PHP scripting language. So remember IT!

The last thing to know about variables are:
* Have always to start with `$`
* the second character has to be a letter.
* You can use only letters, number and `_` to write variables name.
* PHP is case sensitive so `$var` and `$vAr` are two different variables.

### Operations
PHP allow this operators:

* Math operators:
  * `+` Sum
  * `-` Difference
  * `*` Multiplication
  * `/` Division
  * `%` Module
  * `**` Power
* Comparison Operators:
  * `==` Equal
  * `===` Strictly Equal
  * `!=` Different
  * `!==` Strictly Different
  * `<` Less than
  * `>` More than
  * `<=` Less or equal than
  * `>=` More or equal than
* Incremental Operators:
  * `++` add one
  * `--` remove one
  * `+=` add some to
  * `-=` remove some to
  * `*=` multiply some for
  * `/=` divide some for
* Boolean Operators:
  * `&&` AND operator (also `and`)
  * `||` OR operator (also `or`)
  * `!` NOT operator  
  * `xor` XOR operator
* String Operators:
  * `.` string concatenation

You can find more information about operators [here](http://php.net/manual/it/language.operators.php)

## Functions

It's possible to define a function in php like this:
```php
  <?php
    function func($arg='default', ...) {
      ...
      return $res;
    }
  ?>
```

You can see that in order to define a function you should use the *reserved word* `function` followed by the name of the function you will use to call it, and brackets that enclose a list of arguments. For every argument you can set a default value. A difference between php and other languages, inherited by the C language is that if the default value isn't set you must call the function with the same amount of arguments define.

If you need a function that will have a different amount of arguments you should define the function multiple times like this:

```php
<?php
  //function defined with two arguments
  function func($first=0, $second=1){ ... }

  //function defined with three arguments
  function func($first=0, $second=1, $third=2){ ... }
?>
```

A good Technique is to define the most particular function and after define the ones with less arguments that enclose the more specific one.

```php
<?php
  //function defined with two arguments
  function func($first=0, $second=1){
    $third = some_other_func();
    return func($first, $second, $third);
  }

  //function defined with three arguments
  function func($first=0, $second=1, $third=2){ ... }
?>
```

Every arguments of a function is passed by **value**. That's mean that even if you wil change the value of an arguments inside the function, outside of it the variable won't change is value. There is a way to change this behaviour by passed an argument as **reference** using the char & like this:

```php
<?php
  function func(&$arg){
    $arg = 5;
    return;
  }

  ...

  $a = 4;
  func($a);
  //now $a = 5
?>
```

Use this Technique very carefully because change the value inside a function is a side effect that can create bugs very difficult to recognise.
As any other element of PHP a function is valid in his scope. So you can define a function that is valid only inside a function, or you can define some variables that are valid only inside that.

## Arrays
In php, as in other languages an array is a group of items referenced by a variable. An array is defined in PHP in the following ways:

```php
<?php
  $array = [];
  $array = array();
?>
```
There are some differences between arrays in PHP and arrays in other languages. In particular:
* An array could have elements with different type.
  ```php
  <?php
    $array = array(5, 'this is a string', array('another', 'array'));
  ?>
  ```
* An array doesn't have a fixed dimension. you can add (push) and remove (pop) any items of the array.
* An array is always an associative array.
  This is a crucial thing because nobody will assure you that the key of an array will be in the same order.

To access to an element of the array you can use this syntax:
```php
  <?php
    $array = array('a', 'b', 'c');
    echo $array[0]; //will print array a
  ?>
```
To add an element to an array without care about the index you can write:
```php
  <?php
    $array = array('a', 'b', 'c');
    $array[] = 'd'; //it will add the element 'd' at the end of the array
  ?>
```
As we said every array in php is **associative**. That means every element of an array
is actually a key,value couple. when the key isn't define php will give to the element the
last integer from 0 as a key.
For example:
```php
  <?php
    $array = array(
      'name' => 'pippo', //name is the key, pippo is the value
      0 => 'elem_0'
    );
    $array[] = 'elem_1'; //will add a couple like 1 => 'elem_1', because 0 is already used.
  ?>
```
when you assign a value to a specific key of an array it will add it if the key doesn't exits, or
substitute the value if it's already present.

```php
  <?php
    $array = array();
    $array['name'] = 'pippo'; //it will add name => pippo couple.
    echo $array['name']; //will print pippo
    $array['name'] = 'pluto'; //will subsitute pippo with pluto.
  ?>
```

## Flow Control

Like any other languages PHP have some constructs to control the programming flow. The most common are:

* `if ...  elseif ... else`
* `switch`
* `while`
* `do ... while`
* `for`
* `foreach`

I will show you the definition of these construct. Every flow control in PHP can use two synstax.

### IF
```php
  <?php
    if(<condition>){
      <then operations>
    } elseif (<other condition>){
      <else if operations>
    } else {
      <else operations>
    }
  ?>
  ...
  <?php if(<condition>) : ?>
    <then operation>
  <?php elseif(<other condition>) : ?>
    <else if operations>
  <?php else : ?>
    <else operations>
  <?php endif; ?>
```

### SWITCH
```php
  <?php
    switch(<control variable>){
      case <condition 1>: <operations one>; (break;)
      case <condition 2>: <operations two>; (break;)
      case <condition 3>: <operations three>; (break;)
      default: <any other conditions>
    }
  ?>
```

### WHILE / DO ... WHILE
```php
  <?php
    while(<contidion>){
      <repeated operations>
    }    
  ?>

  ...

  <?php while (<condition>) : ?>
    <repeated operations>
  <?php endwhile; ?>
```

### FOR
```php
  <?php
    for($i = 0; $i < $limit; $i++){
      <repeated operations>
    }
  ?>
  ....
  <?php for($i=0; $i< $limit; $i++) : ?>
    <repeated conditions>
  <?php endfor; ?>

```

### FOREACH
```php
  <?php
    $array = array(...);
    foreach($array as $element){
      <repeated condition for each element of the array>
    }
  ?>
  ...
  <?php foreach($array as $element) : ?>
    <repeated condition for each element of the array>
  <?php endforeach; ?>
  ...
  <?php foreach($array as $key => $value) : ?>
    <repeated condition for each element having key and value >
  <?php endforeach; ?>
```

## REQUESTS IN PHP (SUPERGLOBALS)

There are in PHP some variables that are available in all part of your code,
without importing them or *globalize* them (the act to put `global` before a variable,
to let it available inside a function). These variables are called **superglobals**
and allow you to access to specific information. The most common used of this kind of
variables are:
  * `$GLOBALS` (useful to store global informations you need in all your software)
  * `$_SERVER` (contain info about your server and the request of the webpage)
      see (http://php.net/manual/it/reserved.variables.server.php)
  * `$_GET` (contains the query string parameters as array)
  * `$_POST` (contains the form input value as array)
  * `$_FILES` (contains info and files sent by post request with multipart/data form)
  * `$_COOKIE` (contains information about client cookies as array)
  * `$_SESSION` (contains the store session of a request)
  * `$_REQUEST` (contains the merged data of `$_GET`, `$_POST` and `$_COOKIE`)
  * `$_ENV` (contains the environments variables passed by the http server when run php)

Some of them are *read-only* variables in a way that even if you edit them the next iteration
they will be restore as original.

### `$_GET`

The `$_GET` variables contains the query string parameters as associative array.
For example if we have a PHP script called *index.php* in our localhost directory
calling it with this url:
```
  http://localhost/index.php?var1=1&var2=foo
```
we will have inside the `$_GET` variables something like this:
```php
<?php
  $_GET === array(
    'var1' => '1',
    'var2' => 'foo'
  ):
?>
```

It allow to parameterize your code based on the query string sent.

### `$_POST`

As `$_GET` variable `$_POST` contain an associative array with the query body of
a **POST** request. When you send a form, for example, your client will send a
**POST** request to an HTTP server with the inputs of your form as key-value couples
inside the post body. You can see in [this](https://www.tutorialspoint.com/http/http_methods.htm) page
some description of the various HTTP request methods. POST is one of them.

Let's see how it works with an example.
if I have a page with a form like this one:
```html
...
<form method="post" action="">
  <input type="text" name="var1" value="1" />
  <input type="text" name="var2" value="foo" />
  <input type="submit" value="send" />
</form>
```
And we will press the *send* button it will reload the page (because if the `action`
attribute of the  `form` tag is empty it will send to itself) and we will have in the
`$_POST` variable something like this:

```php
<?php
  $_POST === array(
    'var1' => '1',
    'var2' => 'foo'
  ):
?>
```

So with this variable we can interact with the user by using form (or POST ajax requests)
and allow our software to be dynamic and use client information.

### `$_SESSION`

The `$_SESSION` variables allow to store data linked to a specific client-server section.
When a client will connect to your page for the first time, the server will create a specific
and unique **session_id** and sent it back to the client as a cookie. For that point the server
could be access to a specific part of the memory associated to the session_id and read and write informations.

By using the `$_SESSION` variable we can access to that informations and manipulate that.
In order to use this variable we will first need to tell to php we want to access to the session's data.
we can do this by using the `session_start` function.
Here an example to how to use `$_SESSION`

```php
<?php
  session_start();

  //if is login form submit save the username
  if(isset($_POST['user'])){
    $_SESSION['user'] = $_POST['user'];
    $_SESSION['logged'] = true;
  }
?>

...

<p>Hi mister <?php echo $_SESSION['user']; ?></p>
```

## Include & Require
Obviously PHP programming doesn't consist in mere one page script. Big applications are possible in PHP
even if you doesn't heard about (see Facebook or Wordpress).
In order to create bigger application we need something to connect different script and different files.
We can do that using the `require`, `require_once`, `include` and `include_once` function.
These functions will allow you to include inside your code page from another code.
Here an example:
```php
<?php
  //variables.php
  $var1 = 1;
  $var2 = 2;
  $var3 = $var1 + $var2;
?>
```
> variables.php

```php
<?php
  include './variables.php';
  echo $var3 + $var2; //will print 5
?>
```
> main.php

As noticed in the above example what is included will be available after the inclusion
command.

The difference between `include` and `require` is that if the file asked after the command is missing
`require` will throw an error and will sto the execution. `include` instead will throw a warning
and will continue the execution.

It's important to know that an included script can include others. They will be include in the order you will write.
It's also important to know that every time you will include (or require) a script it will be executed.
In order to avoid that you can use the `*_once` alternative of the functions. That will check if in you included
hierarchy will be the file you're trying to include and if there is wont do anything.

`include` and `require` allow you to load php files but these couldn't have php script. This is very useful
for example for html templating:

```php
<!DOCTYPE html>
<html>
  <head>
    <?php include "html_header.php"; ?>
  </head>
  <body>
    <?php include "header.php"; ?>
    <main>
      ...
    </main>
    <?php include "footer.php"; ?>
  </body>
</html>
```
> main.php

```php
<title>HTML Template with PHP include</title>
<meta name="description" content="useful example" />
```
> html_header.php

```php
<?php include 'global_function.php'; ?>
<header>
  <nav>
    <h1><?php get_site_title(); ?><h1>
  </nav>
</header>
```
> header.php

```php
  <footer>Power by us</footer>
```
> footer.php

```php
<?php
  function get_site_title(){
    echo "Site Title";
  }
?>
```
> global_function.php

## OOP with PHP
Like any other modern languages PHP can be written using Object Oriented programming
technique. OOP was introduced in the 3rd version of PHP but was the 5th version to
introduce a strong interfaces to use that technique.
Like in Java OOP in PHP is based on class and instances. You can define a class
like this:

```php
<?php
  class ClassName {
    public publicProperty;
    protected protectedProperty;
    private privateProperty;

    function __constructor(){

    }

    public function publicMethod($args){
      //...
      $this->privateMethod();

    }

    private function privateMethod(){
      //...
    }

  }

  //...

  $instance = new ClassName();
?>
```

In the example above you can see most of the main structure of a class. In the beginning
of the class there are some **properties**. A property is a normal variable precede by
the **visibility** of the property. The **visibility** of the property (or a method)
define where and who can access to methods or properties inside and outside of the class.
There are three level of visibility:

* `private` :

    a private property or method is visible only inside the class itself
    and is accessible only by the method of the class.

* `protected` :

    a protected property or method is visible inside the class itself and inside
    all its subclass.

* `public` :

    a public property or method is accessible in all the scope the class is defined to.
    in general a public property is accessible directly invoking them.

Is it possible to define **methods** as shows above. A method is a function defined
inside the class. Like properties it's possible to define the visibility of a method.
If a method is defined without visibility is *public* as default.
A method can access to all the properties and methods of its class and all
the public/protected properties and methods of eventually parent class.
A method can access to all non-static properties using the variable `$this` follow
by the arrow operator `->`.

`$this` is a reference to the instance of the class inside it.

Is it possible to define a `static` property or method by using `static` keyword
before the definition like the following example:

```php
  class Car {
    private static wheels_number = 4;

    public static function get_wheels_number(){
      return self::wheels_number;
    }
  }

  class Suv extends Car {
    static driving_wheels = 4; //this is public as default

    static function non_driving_wheels(){
      return parent::get_wheels_number() - self::driving_wheels;
    }
  }

  $panda = new Car();
  echo $panda->wheels_number; //FATAL ERROR: the property is private

  echo Car::get_wheels_number();

  $x3 = new Suv();
  echo $x3->driving_wheels; //FATAL ERROR: the property is static so isn't accessible by ->
  echo $x3::$driving_wheels; //good
   
```

A `static` property is a property that is available without instantiate the class.
If you define a `static` method you should be aware that method doesn't modify any
instance's property. 

In the example you should also see that to access inside the class to a `static`
property you should use `self::`.

You can also see another characteristic of the OOP: the **inheritance**. Is
it possible to create a subclass of a superclass (like in any other language). 
You can do that by using the `extends` keyword. A subclass inherit all the 
property and method of a superclass and it can access to all the `public` and `protected`
methods and properties of that. If you want to call a method of a superclass you can use
the keyword `parent::` even if the method isn't `static`.

Form a better explanation of all the OOP in PHP you should read the following guide:

http://php.net/manual/en/language.oop5.php

It will explain all the possibilities of the Object oriented in PHP.

 
