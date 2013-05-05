<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p> Issue Manger is a Software Development Life Cycle (SDLC) issue management application.<br/>
    Its main goal is to help keep track of all the many issues that arise
    throughout the course of building software applications.<br/>
    It is a user-based application that allows the creation of user accounts and grants access to the
    application features, once a user has been authenticated and authorized.<br/>
    It allows a user to add and manage projects.
</p>

<?php if(!Yii::app()->user->isGuest):?>
<p>
   You last logged in on <?php echo Yii::app()->user->lastLogin; ?>.	
</p>
<?php endif;?>
