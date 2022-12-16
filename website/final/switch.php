<?php

date_default_timezone_set('America/Los_Angeles');
if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {

    $today = date('l');
   
}



// day of the week switch statement about php functions

switch ($today) {
    case 'Monday':
        $function = 'User-defined functions';
        $link = 'https://www.php.net/manual/en/language.functions.php';
        $example = '&lt;? function myFunction() {
            echo "Hello world!";
          }
          
          myFunction();?&gt;';
        $description = 'A user-defined function declaration starts with the word function, followed by a function name, followed by a parenthesized list of zero or more parameters. The body of the function is enclosed by braces. The return value of a function is specified with the return statement.';
        $background = 'background: #195742;';
        $color  = 'color: #fff;';
        break;
    case 'Tuesday':
        $function = 'Function arguments';
        $link = 'https://www.php.net/manual/en/functions.arguments.php';
        $example = '&lt;? function myFunction($fname, $lname) {
            echo $fname . " " . $lname;
          }
          
          myFunction("John", "Doe");?&gt;';
        $description = 'When a function is called, the arguments are passed to it, and the function\'s code is executed. The values of the function\'s arguments can be any expression, and, just like any other variable, they can be assigned to other values.';
        $background = 'background: #415719;';
        $color  = 'color: #fff;';
        break;
    case 'Wednesday':
        $function = 'Returning values';
        $link = 'https://www.php.net/manual/en/functions.returning-values.php';
        $example = '
        &lt;?php 
        function add($x, $y) {
        $total = $x + $y;
        return $total;
        }
          
        echo "1 + 16 = " . add(1, 16);
        ?&gt;';
        $description = 'A function can return a value by using the return statement. The return statement can be used with or without a value. If a value is returned, it can be assigned to a variable.';
        $background = '
        background: #316572;';
        $color = 'color: #fff;';
        break;
    case 'Thursday':
        $function = 'Variable functions';
        $link = 'https://www.php.net/manual/en/functions.variable-functions.php';
        $example = '
        &lt;?
        
          
        ?&gt;';
        $description = 'A variable function is a function name that is stored in a variable. This allows you to call a function by name that is stored in a variable.';
        $background = '
        border-radius: 14px;
        background: #00ff91;
        box-shadow:  9px 9px 0px #00663a,
                     -9px -9px 0px #00ffe8;';
        break;
    case 'Friday':
        $function = 'Internal (built in) functions';
        $link = 'https://www.php.net/manual/en/functions.internal.php';
        $example = '
        &lt;?
          
        ?&gt;';
        $description = 'PHP has a large number of built-in functions that are available to all scripts by default. These functions are divided into several categories, such as string, date, math, and file handling functions.';

        $background = 'background: #773c32;';
        $color = 'color: #fff;';

        break;

    case 'Saturday':
        $function = 'Anonymous functions';
        $link = 'https://www.php.net/manual/en/functions.anonymous.php';
        $example = '&lt;? $var = function ($x) {return pow($x,3);};
        echo "cube of 3 = " . $var(3);?&gt';
        $description = 'Anonymous functions, or closures, allow the creation of functions which have no specified name. They are most useful as the value of callback parameters, but they have many other uses.';
        $background = 'background: #c86237;';

        break;
    case 'Sunday':
        $function = 'Arrow functions';
        $link = 'https://www.php.net/manual/en/functions.arrow.php';
        $example = '&lt;? $fn = fn($a) =&gt; $a + 1;
        echo $fn(1);?&gt;';
        $description = 'Arrow functions are a shorthand for defining anonymous functions. They are similar to closures, but they have no access to the parent scope.';
        $background = 'background: #3c2d2a;';
        $color = 'color: #fff;';
        break;
    default:
        $function = 'No function';
        $link = 'https://www.php.net/manual/en/functions.user-defined.php';
        $example = '&lt;? function myFunction() {
            echo "Hello world!";
          }
          
          myFunction();?&gt;';
        $description = 'A user-defined function declaration starts with the word function, followed by a function name, followed by a parenthesized list of zero or more parameters. The body of the function is enclosed by braces. The return value of a function is specified with the return statement.';
        $background = 'background-color: #f5f5f5;';
        break;
}

include './includes/header.php';
?>


<div class="container">
    <div class="row">
        <div class="full column">
            <h1 class="text-center" style="<?php echo $color?>">DailyPHP Functions</h1>
        </div>
    </div>
    <div class="row">
        <div class="full column">
            <h2 class="text-center"style="<?php echo $color?>"><?php echo $function ?></h2>


        </div>
    </div>
    <section class="row">
        <div class="one-half column">
            <h3 class="">Notes:</h3>
            <p class=""><?php echo $description ?></p>
            <p class="text-center"><a href="<?php echo $link ?>">Click here to learn more about <?php echo $function ?></a></p>
        </div>

        <div class="one-half column">

            <h3 class="">Syntax:</h3>

            <div class="example">


                <pre><code><?php echo $example ?></code></pre>


            </div>
        </div>

        <div class="row">
            <div class="full column">
                <!-- select day of the week -->

                <form class="text-center" action="switch.php" method="get">
                    <label for="today"><?php echo $today?></label>
                    <label for="day">Select a day of the week:</label>
                    <!-- selected stays selected -->
                    <select name="today" id="day">
                        <option value="Monday">Monday</option>
                        
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                        <option value="Saturday">Saturday</option>
                        <option value="Sunday">Sunday</option>
                    </select>
                    <input type="submit" value="Submit">


            </div>
        </div>
</div>



<div class=container>
    <div class=row>
        <div class="full column">

            <?php include './includes/footer.php' ?>

