<!--

    Online Class: Loops in PHP
    Author : Geetanjali Pawase
    
-->

<?php


//-------------------------------- Task 1 --------------------------------


/*
+---+
| 1 |
+---+
Use while-loop to print the numbers 1 to 10.
*/

$a = 1;

while ( $a <= 10) {
    
    echo  $a . "<br/>" ;
    $a += 1;
}



// task separator
echo "<hr style=\"margin 1rem 0\">";



//-------------------------------- Task 2 --------------------------------

/*
+---+
| 2 |
+---+
Use the PHP function range(start, end, step) 
to create array of numbers 5 to 100 with the step 5 
(example: 5, 10, 15, ...)
*/


$array = range(0, 100, 5);



/*
Use for-loop and if-statement to print all odd numbers.

How to check if a number is odd or even? 
Divide it by 2, and if there is a remainder, the number is odd. 
Use modulus operator (outputs the remainder after division), 
for example: 
1 % 2 = 1 -> odd number
2 % 2 = 0 -> even number
3 % 2 = 1 -> odd number
4 % 2 = 0 -> even number
*/


for ($i=0; $i<sizeof($array); $i++) {
    
    if( $array[$i] % 2 === 1 ) {
    
        echo $array[$i] . "<br/>";
    }
}


// task separator
echo "<hr style=\"margin 1rem 0\">";



//-------------------------------- Task 3 --------------------------------

/*
+---+
| 3 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$food = ["Pizza", "Tandoori Chicken", "Biryani", "Lasagna", "Cheesecake"];

/*
Use while-loop to print array elements (every food in a new row).
*/


echo "----------Using While-Loop ----------<br/>";

$i=0;

while($i< sizeof($food)) {
    
    echo $food[$i] . "<br/>";
    $i++;     
}


/*
Use for-loop to print array elements (every food in a new row).
*/


echo "<br/>----------Using For-Loop ----------<br/>";

$i=0;

for ($i=0; $i<sizeof($food); $i++) {
    
    echo $food[$i] . "<br/>";    
}

/*
Use foreach-loop to print array elements (every food in a new row).
*/

echo "<br/>----------Using Foreach-Loop ----------<br/>";

foreach($food as $value) {
    
    echo $value . "<br/>";
}


// task separator
echo "<hr style=\"margin 1rem 0\">";


//-------------------------------- Task 4 --------------------------------

/*
+---+
| 4 |
+---+
Print the array from task 3 as unordered list. Printing has to be done inside the for-loop.

Before looping, you need to print the opening list-tag <ul>
After looping, you need to print the closing list-tag </ul>
*/

echo "<ul>";

for ($i=0; $i<sizeof($food); $i++) {
    
    echo "<li>" . $food[$i] . "<br/>" . "</li>";    
}



// task separator
echo "<hr style=\"margin 1rem 0\">";



//-------------------------------- Task 5 --------------------------------

/*
+---+
| 5 |
+---+
The array from task 3 is turned into associative array. 
The meal courses are broken down based on the type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)

$food_assoc = [
  "pizza" => [
    "type" => "main course",
    "origin" => "Italy"
  ],
  "cheesesake" => [
    "type" => "desert",
    "origin" => "Greece"
  ]
]

So, food_assoc is an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin.
*/


$food_assoc = [

    "Pizza" => [
        
        "type" => "Main Course",
        "origin" => "Italy"
    ],
    
    "Tandoori Chicken" => [
        
        "type" => " Appetizers or Main Course",
        "origin" => "Peshawar"
    ],
    
    "Biryani" => [
        
        "type" => "Main Course",
        "origin" => "India"
    ],
    
    "Lasagna" => [
        
        "type" => "Appetizers or Main Course",
        "origin" => "Italy"
    ],
    
    "Cheesecake" => [
        
        "type" => "Desert",
        "origin" => "Greece"
    ]
    
];



/*
Loop through $food_assoc and use print_r() to print the entire meal course 
(entire array that includes type and origin).
*/

foreach ($food_assoc as $key => $value) {
    
    echo "<pre>" . $key;
    print_r($value);
    echo "</pre>";
}


/*
Loop through $food_assoc and print the meal names (keys of $food_assoc)
as unordered list-items. Loop through the current meal (inner loop through sub-array) 
and print the type and origin as nested list items (see the example below).
*/

echo "<h2> My favourite meals </h2>";

echo "<ul>"; 

foreach ($food_assoc as $key => $value) {
   
    echo "<li>" . $key; 
    
        echo "<ul>";
    
            foreach($value as $a => $b) {
        
                echo "<li>" . $a . " : " . $b ."</li>";
            }
        
        echo "</ul>";
    
    echo "</li>";
}

echo "</ul>";

?>
