GumGum - General Web Engineering Skill Test
==========================================

General
-------

- Please name 3 books, 3 people and 3 OSS projects that you find interesting when it comes to Web Development
	* I have the pleasure to met Richard Stallman a very interesting person and also comes to mind Jakob Nielsen for his work on Usability
	* OSS I could name what I use almost on daily basis: jQuery, Wordpress, Webkit but I find interesting other ones such as RoR, Node, CakePHP, Meteor  
- Tabs or spaces? Why?
	* Tab with 4 spaces, quickier and visually cleaner than spaces
- What is your favorite IDE or Editor?
	* I use Espresso because my needs of modifing something quickly that is already on the server
- Are you comfortable working with Linux?
	* I have used many linux commands style on terminal so I think it's ok
- Have you work with the MVC pattern?
	* Have used it on educational level but never in production

HTML / CSS / JS
---------------

- HTML5 is very popular these days, what are your favorite features about it? And what are the important changes from old HTML standards?
	* Canvas and native audio/video tags are my favourite, the main changes at simple gaze are the new elements and attributes making a cleaner and easier code to read
- How do you feel about not using jQuery in your daily projects?
	* Everytime I try to use less and less jQuery so I be glad tu have to use it only when absolutely necesary
- What is your favorite online resource for when you work with CSS?
	* I would say Google
- What is a CDN? And why would you use one?
	* Content Delivery Network and it helps make your site faster and avoid to be overloaded, no downtimes
- What is a beacon pixel? Why are they used?
	* 1x1 clear image that is requested by pages and sents information abour user behavior

PHP
---

- PHP improved lots of things moving from PHP4 to PHP5, what are your favorite changes?
	* Magic methods and use of _construct() (with two underscores) on clases;
- What is the SPL? Give an example of its use.
	* Standard PHP Library, just reading about it, interesting
- Using PHP in the CLI, how would you get a list of the modules loaded into it? And how would you add or remove some of them?
	* php -m
- Have you used a PHP Debugger before? If so, which do you use?
	* Haven't used one
- What is your favorite Dependency Manager? Why?
	* Just know about PEAR
- How do you feel about OOP PHP? Do you know about patterns? What's your favorite one?
	* I like OOP it feels like when I'm doing VG

PHP Code
--------

- What is the problem if you see the following error message:
```Warning: Cannot modify header information - headers already sent```
	* Jus like the warning says, something is sending headers when they already have been sent
- Write an example use of the empty() function
	* if(empty($var)){
		  echo('Nope, the var is empty or false.');
	  };
- In a function definition, what does an ampersand means before the argument-variable name? ```function doSomething(&$a) {}```
	* That it's gonna use the variable reference and not only the value, so if the var is modified inside the function it's also modified outside of it
- What is wrong with this if statement: ```if( !strpos( $haystack, $needle ) ) { something() }```?
	* test
- What is SQL injection and how do you deal with it?
	* When users pass sql commands in input variables and can compromise the db and can be prevented using pdo and prepared queries

Git
---

- What is the difference between pull and fetch commands?
	* Pull do a Fetch and then Merge, with Fetch alone you don't modify your branches
