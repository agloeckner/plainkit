<style>

body {
    display: flex;
    flex-direction: column;
    float: left;   
}

p {
    background: #eee;
    display: inline-block;
    padding: 12px;
}
</style>

<h1><?= page()->title() ?></h1>
<?= $page->template() ?>
<?php if(kirby()->user() == ''): ?>

no user logged in <a href="./">back</a>

<?php else: ?>

<p> 
<a href="<?= site()->url() ?>">back</a> | 
<a href="<?= site()->url() ?>/panel/users/<?= kirby()->user()->id() ?>">panel</a> |
<a href="<?= site()->url() ?>/panel/users">all</a> |
<a href="<?= site()->url() ?>/profile">profile</a> | 
<a href="<?= site()->url() ?>/profile-success">success</a>
</p>


<p>

<?php
    $vote1 = kirby()->user()->vote1()->toInt();
    $vote2 = kirby()->user()->vote2()->toInt();
    $vote3 = kirby()->user()->vote3()->toInt();
    $vote4 = kirby()->user()->vote4()->toInt();
    $vote5 = kirby()->user()->vote5()->toInt();
    $votemax = '5';
?>

</p>

<p>

<form method="post" action="">
vote1: <?= kirby()->user()->vote1() ?><input type="text" id="vote1" name="vote1" value="1"><br>
vote2: <?= kirby()->user()->vote2() ?><input type="text" id="vote2" name="vote2" value="2"><br>
vote3: <?= kirby()->user()->vote3() ?><input type="text" id="vote3" name="vote3" value="3"><br>
vote4: <?= kirby()->user()->vote4() ?><input type="text" id="vote4" name="vote4" value="4"><br>
vote5: <?= kirby()->user()->vote5() ?><input type="text" id="vote5" name="vote5" value="5"><br>
<input type="submit" name="vote" value="vote">
</form>

<?php 
    if(isset($_POST['vote'])){ 

         //code to be executed
         $kirby->user(kirby()->user())->update([
            'vote1' => $_POST['vote1'],
            'vote2' => $_POST['vote2'],
            'vote3' => $_POST['vote3'],
            'vote4' => $_POST['vote4'],
            'vote5' => $_POST['vote5'],
          ]);
        
          go('profile-success');
    } else {
         //code to be executed  
         #echo 'no update';
    }
?>

</p>

<p>
name: <?= kirby()->user()->name() ?><br>
user: <?= kirby()->user()->email() ?><br>
role: <?= kirby()->user()->role() ?><br>
</p>

<p>
street: <?= kirby()->user()->street() ?><br>
zip: <?= kirby()->user()->zip() ?><br>
city: <?= kirby()->user()->city() ?><br>
country: <?= kirby()->user()->country() ?><br>
</p>

<?php endif ?>