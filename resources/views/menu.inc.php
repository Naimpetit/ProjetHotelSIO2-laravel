<ul>
<li><a href=<?php echo url('/'); ?>/>accueil</a><br /></li>
<li><a href=<?php echo url('/hotels'); ?>/>user1</a><br /></li> 
<li><a href=<?php echo url('/us2'); ?>/>user2</a><br /></li>

<?php if(session('client')) { ?>
    <li><a href=<?php echo url('/deconnexion'); ?>/>déconnexion</a><br /></li>
<?php } 
else { ?>
    <li><a href=<?php echo url('/client'); ?>/>user3</a><br /></li>
    <li><a href=<?php echo url('/connexion'); ?>/>connexion</a><br /></li>
<?php } ?>
</ul>