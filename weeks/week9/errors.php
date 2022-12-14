<?php

// errors page with each loop
// counting errors

//more than 0 errors is bad

if(count($errors) > 0): ?>
<div class="error">
<?php foreach($errors as $error): ?>

<p>
<?= $error; ?>
</p>

<?php endforeach ?>

</div>

<?php endif ?>




