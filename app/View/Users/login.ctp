<?php $this->layout = 'login'; ?>
<div class="col-md-4 col-md-offset-4">
    <div class="login-panel panel panel-transparent">
        <div class="panel-heading">
            <h3 class="panel-title">Please Sign In</h3>
        </div>
        <div class="panel-body">

            <?php
                echo $this->Form->create('User', array(
                    'action' => 'login',
                    'inputDefaults' => array(
                        'class' => 'form-control'
                    )
                )
                );
                echo $this->Form->inputs(array(
                    'legend' => __('Login'),
                    'username',
                    'password'
                )); ?>
            <br>
            <?php echo $this->Form->end(array(
                    'label' => 'Connexion',
                    'class' => 'btn btn-primary btn-connexion',
                    'div' => array(
                        'class' => 'btn-login btn-river'
                    )
                ));
            ?>
        </div>
    </div>
</div>



  <!--<form role="form">
                <fieldset>
                    <div class="form-group">
                        <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                    </div>

                    <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a>
                </fieldset>
            </form>-->
