<?php snippet('head') ?>

<?php snippet('hero') ?>

<?php snippet('footer') ?>


<h1><?= page()->title() ?></h1>
<?= $page->template() ?>
<br>
<br>

<a href="./">start</a><br>
<a href="panel/users">user</a><br>
<a href="panel">login</a><br>
<a href="profile">profil</a>
<br>
<br>

<form method="post" action="">
<input type="text" name="email" placeholder="email" required><br>
<input type="text" name="password" placeholder="password" required><br>
<input type="submit" name="create" value="create">
</form>

<?php 
    if(isset($_POST['create'])){ 

        //code to be executed

        $kirby->impersonate("kirby");
        $user = $kirby->users()->create([
          #'name'      => '',
          'email'     => $_POST["email"],
          'password'  => $_POST["password"],
          #'language'  => 'en',
          'role'      => 'admin',
          #'content'   => [
          #  'birthdate' => '1989-01-29'
          #]
        ]);
        
        $user->loginPasswordless();
        
        echo 'The user "' . $user->email() . '" has been created';

    } else {

        #echo 'The user could not be created';
        // optional error message: $e->getMessage();
        echo 'no active user <a href="panel">login</a>';
        
    }
?>

<p>
<?php foreach(kirby()->users()->sortBy('email') as $user): ?>
    <?= $user->role() . ' | ' . $user->email() . ' | ' . $user->id() . ' | ' . 
    $user->vote1() . $user->vote2() . $user->vote3() . $user->vote4() . $user->vote5() ?><br>
<?php endforeach ?>
</p>

<p>


</p>
