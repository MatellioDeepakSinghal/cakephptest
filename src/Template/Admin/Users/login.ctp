<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="users form login-box">
<?= $this->Flash->render('auth') ?>
    <div class="card">
        <div class="body">
        <?= $this->Form->create() ?>
           <div class="msg">Sign in to start your session</div>
           <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input aria-required="true" class="form-control" name="username" placeholder="Username" required="" autofocus="" autocomplete="false" type="text" id="username">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input aria-required="true" class="form-control" name="password" placeholder="Password" required="" autofocus="" type="password" id="password">
                        </div>
                    </div>
                
            <div class="row">
                <div class="col-xs-8 p-t-5">
                            <input name="rememberme" id="rememberme" class="filled-in chk-col-pink" type="checkbox">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                        <?= $this->Form->button(__('SIGN IN'),['class'=>'btn btn-block bg-pink waves-effect']); ?>
                           
                        </div>
            </div>
            
            <?= $this->Form->end() ?>
            <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="add">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.html">Forgot Password?</a>
                        </div>
                    </div>
        </div>
    </div>
    
</div>
