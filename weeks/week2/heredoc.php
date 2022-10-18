
<?php

$book = 'The Handmaid\'s Tale';
$author = 'Margaret Atwood';
$actor = 'Elizabeth Moss';
$charactor = 'June';
$service = 'HULU';

$content = '<p>My favorite book is <b>'.$book.'</b>, written by '.$author.', and is presently a miniseries on '.$service.'.
Hulu\'s viewing audience is extremely excited about the miniseries and looks forward to the fifth season of the award winning '.$book.'.</p>
<p>'.$actor.'\'s rendition as '.$charactor.' is right on! I liked the show\'s first two seasons!</p>';





$newContent = <<<HAND
<p>My favorite book is <b>$book</b>, written by $author, and is presently a miniseries on $service. 
Hulu's viewing audience is extremely excited about the miniseries and looks forward to the fifth season of the award winning
 The Handmaid's Tale.</p>
<p>$actor's rendition as $charactor is right on! I liked the show's first two seasons!</p>
HAND;



?>





            <!-- Main Content -->

    <div class="container">


        <div class="row">
            <div class="one-half column" style="margin-top: 15%">
            <div class="heredoc">
            <h3><b>HereDOC</b>Example</h3>

            </div>

            <?php echo ''.$content.'';?>
            <?php echo ''.$newContent.'';?>
        </div>


           
       

    </div>

    <div class="container">
           


</html>