<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<div class="row">
    <div class="form">
        <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'login-form',
            'enableClientValidation'=>true,
            'clientOptions'=>array(
                'validateOnSubmit'=>true,
            ),
            'htmlOptions'=>array(
                'class'=>'form-signin',
                'role'=>'form',
            ),

        )); ?>
        <?php echo $form->errorSummary($model); ?>
        <h2 class="form-signin-heading">Please sign in</h2>
        <?php echo $form->textField($model,'email', array(
                'class'=>'form-control',
                'placeholder'=>'Email address'
        )); ?>
        <?php echo $form->passwordField($model,'password', array(
            'class'=>'form-control',
            'placeholder'=>'Password'
        )); ?>

        <?php echo $form->checkBox($model,'rememberMe'); ?>
        <?php echo $form->label($model,'rememberMe'); ?>

        <div class="actions buttons">
            <?php echo CHtml::submitButton('Sign in', array(
                'class' => 'btn btn-lg btn-primary btn-block',
            )); ?>
            <p class="reset">
                <a tabindex="4" href="<?=Yii::app()->createUrl('site/resetpassword');?>" title="Recover your username or password">Recover your password</a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?=Yii::app()->createUrl('site/registration');?>">Get Started</a>.
            </p>
        </div>
        <?php $this->endWidget(); ?>
    </div>
</div>