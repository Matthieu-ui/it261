<?php 
// rand function
// dice game

$dice = rand(1,6);



echo '<p>'.$dice.'</p>';

//two dice

$dice1 = rand(1,6);
$dice2 = rand(1,6);

echo '<p>'.$dice1.' and '.$dice2.'</p>';

echo '<h2>Adding If Else ! Let\'s play Craps, Roll a 7 or 11 to win!</h2>';

// craps game

$dice1 = rand(1,6);

$dice2 = rand(1,6);

$sum = $dice1 + $dice2;

echo '<p>'.$dice1.' and '.$dice2.' = '.$sum.'</p>';

if($sum == 7 || $sum == 11)
{
    echo 'Winner!';

}else{

    echo 'Sorry, you lose!';

}

//display photos using rand function
echo "<h2>Displaying Random Photos</h2>";
$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

$i = rand(0,4);

$selectedImage = ''.$photos[$i].'.jpg';
echo '<img src="images/'.$selectedImage.'" alt="'.$photos[$i].'">'; 


echo substr ($selectedImage, 0, 6);

echo "<h2>let's create a function!</h2>";
function random_images($photos){
    $my_return = '';
    $i = rand(0,4);
    $selectedImage = ''.$photos[$i].'.jpg';

$my_return = '<img src="images/'.$selectedImage.'" alt="'.$photos[$i].'">'; 
return $my_return;
}

echo random_images($photos);









?>
<?php   include '../components/footer.php'; ?>