<?php
// isset function


// $variable = 'Hello World';
// if (isset($variable)){
//     echo 'The variable is set';
// } else {
//     echo 'The variable is not set';
// }

// echo '<br/>';

if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch ($today) {
    case 'Monday':
        $color = 'red';
        $content = 'Monday is the only day of the week that is an anagram for single word';
        $pic = './images/monday.png';
        $alt = 'Monday';
        $background = 'background: #ff0000';
        break;

    case 'Tuesday':
        $color = 'orange';
        $content = 'Tuesday, October 29, 1929, is one of the world\'s most infamous Tuesdays, known as Black Tuesday. This is the day of the Great Stock Market Crash, the event which catalyzed the Great Depression in the run-up to World War II.';
        $pic = './images/tuesday.png';
        $alt = 'Tuesday';
        $background = 'background: #ffa500';
        break;
    case 'Wednesday':
        $color = 'yellow';
        $content = 'In Hindu mythology, Buddha is the God of Mercury, mid-week Wednesday, and of Merchants and merchandise.';
        $pic = './images/wednesday.png';
        $alt = 'Wednesday';
        $background = 'background: #ffff00';
        break;
    case 'Thursday':
        $color = 'green';
        $content = 'The astrological and astronomical sign of the planet Jupiter is sometimes used to represent Thursday.';
        $pic = './images/thursday.png';
        $alt = 'Thursday';
        $background = 'background: #008000';
        break;
    case 'Friday':
        $color = 'blue';
        $content = 'In 1719 the Daniel Defoe novel Robinson Crusoe, the main character meets a native to the island he\'s stranded on, with whom he cannot communicate at first. Crusoe and calls him Friday as this is the day of the week when he meets him.';
        $pic = './images/friday.png';
        $alt = 'Friday';
        $background = 'background: #817db7';
        break;
    case 'Saturday':
        $color = 'indigo';
        $content = 'Saturday is the first official day of the regular two-day weekend, and is a day usually synonymous with sleeping in late, being lazy, or going for a night out to paint the town.';
        $pic = './images/saturday.png';
        $alt = 'Saturday';
        $background = 'background: #b193c7';
        break;
    case 'Sunday':
        $color = 'violet';
        $content = 'Worldwide, nearly all banks are closed on Sundays. Months that begin on a Sunday always have a Friday the 13 th in them.';
        $pic = './images/sunday.png';
        $alt = 'Sunday';
        $background = 'background: #ee82ee';
        break;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../src/styles/skeleton.css" rel="stylesheet">
    <title>Switch workshop</title>
    <style>
        body {
            height: 100vh;
            <?php echo $background; ?>
        }


    </style>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="full column" style="text-align: center;">
                <h1>Switch Workshop</h1>
                <img src="<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
                <p><?php echo $content; ?></p>

            </div>
            <div class="row">
            <div class="full column" style="text-align: center;">
            <p>View facts from any day of the week!</p>
                <a href="switch.php?today=Monday">Monday</a>
                <a href="switch.php?today=Tuesday">Tuesday</a>
                <a href="switch.php?today=Wednesday">Wednesday</a>
                <a href="switch.php?today=Thursday">Thursday</a>
                <a href="switch.php?today=Friday">Friday</a>
                <a href="switch.php?today=Saturday">Saturday</a>
                <a href="switch.php?today=Sunday">Sunday</a>
        </div>
            </div>

        </div>


</body>

</html>