<?php
date_default_timezone_set('america/los_angeles');
if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}
switch ($today) {
    case 'Monday':
        $comicTitle = 'Web Of Mystery';
        $content = 'Williamsburg pork belly sustainable, flannel helvetica DSA butcher jianbing ethical 90\'s vibecession bitters wolf. Echo park yr pug, deep v marfa coloring book flannel trust fund VHS copper mug single-origin coffee. Before they sold out edison bulb pour-over gastropub vaporware taxidermy, la croix vape tousled snackwave affogato PBR&B subway tile mukbang. Ramps franzen church-key, fashion axe hell of small batch intelligentsia schlitz flexitarian live-edge migas. Fit fixie austin polaroid locavore mukbang hella 90\'s hell of food truck.';
        $pic = './src/assets/images/Web_of_Mystery.jpg';
        $alt = 'Web Of Mystery';
        $background = 'border-radius: 6px;
        background: #dd3131;
        box-shadow:  6px 6px 12px #c22b2b,
                     -6px -6px 12px #f83737;';
        $size = 'width: 85%';
        break;
    case 'Tuesday':
        $comicTitle = 'Hap Hazard';
        $color = 'orange';
        $content = 'Williamsburg pork belly sustainable, flannel helvetica DSA butcher jianbing ethical 90\'s vibecession bitters wolf. Echo park yr pug, deep v marfa coloring book flannel trust fund VHS copper mug single-origin coffee. Before they sold out edison bulb pour-over gastropub vaporware taxidermy, la croix vape tousled snackwave affogato PBR&B subway tile mukbang. Ramps franzen church-key, fashion axe hell of small batch intelligentsia schlitz flexitarian live-edge migas. Fit fixie austin polaroid locavore mukbang hella 90\'s hell of food truck.';
        $pic = './src/assets/images/Hap_Hazard.jpg';
        $alt = 'Tuesday';
        $background = 'border-radius: 6px;
        background: #31dd9b;
        box-shadow:  6px 6px 12px #2bc288,
                     -6px -6px 12px #37f8ae;';
        $size = 'width: 85%';

        break;
    case 'Wednesday':
        $comicTitle = 'Indian Braves';
        $color = 'yellow';
        $content = 'Williamsburg pork belly sustainable, flannel helvetica DSA butcher jianbing ethical 90\'s vibecession bitters wolf. Echo park yr pug, deep v marfa coloring book flannel trust fund VHS copper mug single-origin coffee. Before they sold out edison bulb pour-over gastropub vaporware taxidermy, la croix vape tousled snackwave affogato PBR&B subway tile mukbang. Ramps franzen church-key, fashion axe hell of small batch intelligentsia schlitz flexitarian live-edge migas. Fit fixie austin polaroid locavore mukbang hella 90\'s hell of food truck.';
        $pic = './src/assets/images/Indian_braves.jpg';
        $alt = 'Wednesday';
        $background = 'border-radius: 6px;
        background: #7381ed;
        box-shadow:  6px 6px 12px #6572d1,
                     -6px -6px 12px #8190ff;';
        $size = 'width: 85%';
        break;
    case 'Thursday':
        $comicTitle = 'World War III';
        
        $color = 'green';
        $content = 'Williamsburg pork belly sustainable, flannel helvetica DSA butcher jianbing ethical 90\'s vibecession bitters wolf. Echo park yr pug, deep v marfa coloring book flannel trust fund VHS copper mug single-origin coffee. Before they sold out edison bulb pour-over gastropub vaporware taxidermy, la croix vape tousled snackwave affogato PBR&B subway tile mukbang. Ramps franzen church-key, fashion axe hell of small batch intelligentsia schlitz flexitarian live-edge migas. Fit fixie austin polaroid locavore mukbang hella 90\'s hell of food truck.';
        $pic = './src/assets/images/ww3.jpg';
        $alt = 'Thursday';
        $background = 'border-radius: 6px;
        background: #d973ed;
        box-shadow:  6px 6px 12px #bf65d1,
                     -6px -6px 12px #f381ff;';
        $size = 'width: 85%';
        break;
    case 'Friday':
        $comicTitle = 'Midnight';
        $color = 'blue';
        $content = 'Williamsburg pork belly sustainable, flannel helvetica DSA butcher jianbing ethical 90\'s vibecession bitters wolf. Echo park yr pug, deep v marfa coloring book flannel trust fund VHS copper mug single-origin coffee. Before they sold out edison bulb pour-over gastropub vaporware taxidermy, la croix vape tousled snackwave affogato PBR&B subway tile mukbang. Ramps franzen church-key, fashion axe hell of small batch intelligentsia schlitz flexitarian live-edge migas. Fit fixie austin polaroid locavore mukbang hella 90\'s hell of food truck.';
        $pic = './src/assets/images/Midnight.jpg';
        $alt = 'Friday';
        $background = 'border-radius: 6px;
        background: #e5ed73;
        box-shadow:  6px 6px 12px #cad165,
                     -6px -6px 12px #ffff81;';
        $size = 'width: 85%';
        break;
    case 'Saturday':
        $comicTitle = 'Haunted Thrills';
        $color = 'indigo';
        $content = 'Williamsburg pork belly sustainable, flannel helvetica DSA butcher jianbing ethical 90\'s vibecession bitters wolf. Echo park yr pug, deep v marfa coloring book flannel trust fund VHS copper mug single-origin coffee. Before they sold out edison bulb pour-over gastropub vaporware taxidermy, la croix vape tousled snackwave affogato PBR&B subway tile mukbang. Ramps franzen church-key, fashion axe hell of small batch intelligentsia schlitz flexitarian live-edge migas. Fit fixie austin polaroid locavore mukbang hella 90\'s hell of food truck.';

        $pic = './src/assets/images/Haunted_Thrills.jpg';
        $alt = 'Saturday';
        $background = 'border-radius: 6px;
        background: #e47c44;
        box-shadow:  6px 6px 12px #c96d3c,
                     -6px -6px 12px #ff8b4c;';
        $size = 'width: 85%';
        break;
    case 'Sunday':
        $comicTitle = 'Sam Hill';
        $color = 'violet';
        $content = 'Williamsburg pork belly sustainable, flannel helvetica DSA butcher jianbing ethical 90\'s vibecession bitters wolf. Echo park yr pug, deep v marfa coloring book flannel trust fund VHS copper mug single-origin coffee. Before they sold out edison bulb pour-over gastropub vaporware taxidermy, la croix vape tousled snackwave affogato PBR&B subway tile mukbang. Ramps franzen church-key, fashion axe hell of small batch intelligentsia schlitz flexitarian live-edge migas. Fit fixie austin polaroid locavore mukbang hella 90\'s hell of food truck.';

        $pic = './src/assets/images/Sam_Hill.jpg';
        $alt = 'Sunday';
        $background = 'border-radius: 6px;

        background: #958b9c;
        box-shadow:  6px 6px 12px #837a89,
                     -6px -6px 12px #a79caf;';
        $size = 'width: 85%';
        break;
}




?>

<?php include './src/components/header.php' ?>
<div class="container">
    <div class="row">
        <div class="full-column">
            <?php include './src/components/nav.php' ?>
        </div>
        
    </div>
</div>



<div class="container" style="padding: 5em; <?php echo $background ?>">


<div class="row">
    <div class="full-column">
        <h1 style="color: <?php echo $color ?>; text-align: center; font-size: 3em; font-family: 'Bangers', cursive; text-shadow: 2px 2px 4px #000000;">Daily Comics of Public Domain</h1>
    </div>
</div>
    <div class="row">
        <div class="one-half column">
            <h2><?php echo $comicTitle ?></h2>
            <?php echo $content ?>
        </div>

        <div class="one-half column">
            <?php echo '<img src="' . $pic . '" alt="' . $alt . '" style="' . $size . '">' ?>
        </div>
    </div>
    <div class="row">
        <div class="dailyMenu">


            <a href="daily.php?today=Monday" >Monday</a>
            <a href="daily.php?today=Tuesday" >Tuesday</a>
            <a href="daily.php?today=Wednesday" >Wednesday</a>
            <a href="daily.php?today=Thursday" >Thursday</a>
            <a href="daily.php?today=Friday" >Friday</a>
            <a href="daily.php?today=Saturday" >Saturday</a>
            <a href="daily.php?today=Sunday" >Sunday</a>

        </div>
    </div>
</div>



    <?php include './src/components/footer.php' ?>