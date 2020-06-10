<!--
    
    Online Class : Arrays in PHP
    Author : Geetanjali Pawase
    
-->


<?php 


//-------------------------------- Task 1 --------------------------------

/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$food = ["Pizza", "Tandoori Chicken", "Biryani", "Lasagna", "Cheesecake"];

/*
Print every array element in a new line.
*/

echo $food[0] . "<br/>"; // Prints Pizza
echo $food[1] . "<br/>"; // Prints Tandoori Chicken
echo $food[2] . "<br/>"; // Prints Biryani
echo $food[3] . "<br/>"; // Prints Lasagna
echo $food[4] . "<br/>"; // Prints Cheesecake


// task separator
echo "<hr style=\"margin 1rem 0\">";



//-------------------------------- Task 2 --------------------------------



/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo "<ul>";
    
    echo "<li>" . $food[0] . "</li>"; // Prints Pizza
    echo "<li>" . $food[1] . "</li>"; // Prints Tandoori Chicken
    echo "<li>" . $food[2] . "</li>"; // Prints Biryani
    echo "<li>" . $food[3] . "</li>"; // Prints Lasagna
    echo "<li>" . $food[4] . "</li>"; // Prints Cheesecake

echo "</ul>";


// task separator
echo "<hr style=\"margin 1rem 0\">";



//-------------------------------- Task 3 --------------------------------




/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

$food_assoc = [
    
    "Pizza" => "Main Course",
    "Tandoori Chicken" => "Appetizers or Main Course",
    "Biryani" => "Main Course",
    "Lasagna" => "Appetizers or Main Course",
    "Cheesecake" => "Desert"
    
];

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

foreach ($food_assoc as $key => $value) {
   echo $key . " | " . $value . "<br/>";
}


// task separator
echo "<hr style=\"margin 1rem 0\">";



//-------------------------------- Task 4 --------------------------------



/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
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
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/


foreach ($food_assoc as $key => $value) {
   
    echo $key;
    
        foreach($value as $a => $b) {    
        
            echo " | $b";
        
        }   
        
    echo "<br/>";  
    
}



// task separator
echo "<hr style=\"margin 1rem 0\">";


//-------------------------------- Task 5 --------------------------------


/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/


echo "<table width = 45%; border = 1 style = 'border-collapse : collapse;' >";
    
    echo "<tr> 
            <th align = left> Food </th> 
            <th align = left> Type </th> 
            <th align = left> Origin </th> 
          </tr>";

    foreach($food_assoc as $key => $value) {
    
        echo "<tr>";
    
            echo "<td>" .$key . "</td>";
    
                foreach($value as $a => $b) {    
        
                    echo "<td>" . $b . "</td>";
        
                }
        
        echo "</tr>";
    
    }

echo "</table>";

?>