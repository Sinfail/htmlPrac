

<!DOCTYPE html>
<html>

<head>

</head>

<body>

<?php


class Book
{
//Properties of the class (also called variables).
public $title; //Title of the book.
public $numPages; //Number of pages in the book.

//Constructor for the class.
function __construct($bookTitle, $bookNumPages)
{
$this->title = $bookTitle; //No $ prefix for title when using $this.
$this->numPages = $bookNumPages; //No $ prefix for numPages when using $this.
}

//Methods of the class (also called member functions).
function setNumPages($numPages)
{
//This method sets the number of pages for the book.
//Inputs a variable called $numPages and assigns that
//value to the class property called $numPages.
$this->numPages = $numPages;
}

function getNumPages()
{
//This method gets the number of pages for the book
//by reading the class property $numPages and
//returning the value to the calling code.
return $this->numPages;
}

function setBookTitle($bookTitle)
{
//This method sets the book title.
//Inputs a variable called $bookTitle and assigns that
//value to the class property called $title.
$this->title = $bookTitle;
}

function getBookTitle()
{
//This method gets the title of the book
//by reading the class property $title and
//returning it to the calling code.
return $this->title;
}

function __destruct(){
    echo 'The Book title is {$this->title} and the page count is {$this->count}';
}


}


//Create a book object - an instance of class Book.
//Set the title and number of pages in the constructor.




$fictionBook001 = new Book('Once upon a time', 100);

//Use the set method to change the book title.
$fictionBook001->setBookTitle('Sleeping Beauty');

//Use the set method to change the number of pages.
$fictionBook001->setNumPages(150);



echo $fictionBook001->getNumPages();
echo '<br>';

echo $fictionBook001->title;

echo '<br>';


$currentNumPages = $fictionBook001->numPages;
echo $currentNumPages;

echo '<br>';


class MultiVolumeBook extends Book
{
//Constructor is inherited from Book.
//Properties are inherited from Book.
//Methods are inherited from Book.

//MultiVolumeBook can have additional properties and methods.
//Properties of the class (also called variables).
private $numVolumes; //Number of volumes in the set.

//Methods of the class (also called member functions).
function setNumVolumes($numVolumes)
{
//This method sets the number of volumes for the book.
//Inputs a variable called $numVolumes and assigns that
//value to the class property called $numVolumes.
$this->numVolumes = $numVolumes;
}

function getNumVolumes()
{
//This method gets the number of pages for the book
//by reading the class property $numPages and
//returning the value to the calling code.
return $this->numVolumes;
}
}

$multiBook001 = new MultiVolumeBook('The Dictionary',2000);
echo $multiBook001->getBookTitle();
echo '<br>';
echo $multiBook001->getNumPages();
echo '<br>';

$multiBook001->setNumVolumes(2);
echo $multiBook001->getNumVolumes();
echo '<br>';




?>





</body>





</html>