<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


$this->params['breadcrumbs'][] = $this->title;
?>





            <?php $form = ActiveForm::begin(['id' => 'login-form']);


            if(Yii::$app->session->hasFlash('success'))
            {
                print '<div class="alert alert-success">'.Yii::$app->session->getFlash('success').'</div>';
            }

            ?>





                <?= $form->field($model, 'username',[
                        'inputTemplate' => '<div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-user"></i></span>{input}</div>',
                    ])->textInput([
                            'autofocus' => true,
                            'placeholder' => 'Username'
                        ])->label(false) ?>



                <?= $form->field($model, 'password',[
                        'inputTemplate' => '<div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-lock"></i></span>{input}</div>'
])->passwordInput(['placeholder' => 'Password'])->label(false) ?>



                <?= $form->field($model, 'rememberMe')->checkbox() ?>


                <div style="color:#999;margin:1em 0; display: none">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                    <br>
                    Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>

                    <?= Html::a('signup', ['/recruitment/signup'],['class' => 'btn btn-warning']) ?>

                    <?= Html::a('Reset Password', ['/recruitment/request-password-reset'],['class' => 'btn btn-warning']) ?>
                </div>

    <?php ActiveForm::end(); ?>



<?php

$style = <<<CSS
    .login-page { 
          background: url("../../images/login.png") no-repeat center center fixed; 
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
    }
    
    .top-logo {
        display: flex;
        margin-left: 10px;
       
    }
     .top-logo img { 
                width: 120px;
                height: auto;
                position: absolute;
                left: 15px;
                top:15px;
                
          
            }
     .login-logo a  {
        color: #f6c844!important;
        font-family: sans-serif, Verdana;
        font-size: larger;
        font-weight: 400;
     }
     
     input.form-control {
        border-left: 0!important;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        border: 1px solid #f6c844;
    }
    
    span.input-group-text {
        border-right: 0;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        border: 1px solid #f6c844;
    }

    .card {
    background-color: rgba(0,0,0,.1);
   }
   
   .login-card-body {
     background-color: rgba(0,0,0,.1);
   }


CSS;

$this->registerCss($style);






    






