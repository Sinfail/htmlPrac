<!DOCTYPE html>
<html>

<head>
</head>
<body>



<?php


class Truck
{
//Properties of the class (also called variables).
public $truckmake; //Title of the book.
public $trucksize;
public $trucknumber; //Number of pages in the book.
public $fuelcapacity;
//Constructor for the class.
function __construct($size, $make, $nmbr, $fuel)
{
$this->trucksize = $size;
$this->truckmake = $make; //No $ prefix for title when using $this.
$this->trucknumber = $nmbr;
$this->fuelcapacity = $fuel;




}

//Methods of the class (also called member functions).
function setfuelamount($fuelcapacity)
{
//This method sets the number of pages for the book.
//Inputs a variable called $numPages and assigns that
//value to the class property called $numPages.
$this->fuel = $fuelcapacity;
}

function SetTruckMake($truckmake)
{
//This method gets the number of pages for the book
//by reading the class property $numPages and
//returning the value to the calling code.
$this->make = $truckmake;
}

function SetTrucknmbr($trucknumber)
{
//This method gets the number of pages for the book
//by reading the class property $numPages and
//returning the value to the calling code.
$this->nmbr = $trucknumber;
}
function SetTrucksize($trucksize)
{
//This method gets the number of pages for the book
//by reading the class property $numPages and
//returning the value to the calling code.
$this->size = $trucksize;
}

function getfuelamount()
{
//This method gets the title of the book
//by reading the class property $title and
//returning it to the calling code.
return $this->fuel;
}

function gettruckmake()
{
//This method gets the title of the book
//by reading the class property $title and
//returning it to the calling code.
return $this->make;
}



function __destruct(){
  // echo 'The Book title is {$this->title} and the page count is {$this->count}';
}


}






$newtruck = new Truck('3.4','ford', '0004', '60 litres');

//Use the set method to change the book title.
$newtruck->setfuelamount('60 Litres');

//Use the set method to change the number of pages.
$newtruck->SetTruckMake('Ford');

$newtruck->SetTrucknmbr('0004');

$newtruck->SetTrucksize('3.4');




echo $newtruck->make;
echo '<br>';

echo $newtruck->size;

echo '<br>';

echo $newtruck->nmbr;

echo '<br>';
echo $newtruck->fuel;

echo '<br>';






echo '<br>';


?>


</body>










</html>