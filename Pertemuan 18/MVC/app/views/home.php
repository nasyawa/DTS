<h1>Welcome to the Home Page </h1>
<h2>Users:</h2>
<ul>
    <?php foreach ($users as $user):?>
            <li><?php echo $user['name']; ?></li>
            <?php endForeach;?>
</ul>