<style>

body {
    display: flex;
    flex-direction: column;
    float: left;
    background: lightyellow;
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

vote1: <?= kirby()->user()->vote1() ?><br>
vote2: <?= kirby()->user()->vote2() ?><br>
vote3: <?= kirby()->user()->vote3() ?><br>
vote4: <?= kirby()->user()->vote4() ?><br>
vote5: <?= kirby()->user()->vote5() ?><br>

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