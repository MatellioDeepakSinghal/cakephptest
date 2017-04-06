<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="login-box">
<div class="card">
<div class="body">
    <?= $this->Form->create($user) ?>
   <div class="msg">Register a new membership</div>
   <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input id="username" aria-required="true" class="form-control" name="username" placeholder="User Name" required="" autofocus="" type="text">
                        </div>
                    </div>
    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input id="email" aria-required="true" class="form-control" name="email" placeholder="Email Address" required="" type="email">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input id="password" aria-required="true" class="form-control" name="password" placeholder="Password" required="" type="password">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">control_point</i>
                        </span>
                        <div class="form-line">
                           <input id="role" aria-required="true" class="form-control" name="role" placeholder="Role" required="" type="number">
                            
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">face</i>
                        </span>
                        <div class="form-line">
                            <textarea name="bio" placeholder="Bio" id="bio" class="form-control"> </textarea>
                            
                        </div>
                    </div>
                     <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">rowing</i>
                        </span>
                        <div class="form-line">
                           <input id="status" aria-required="true" class="form-control" name="status" placeholder="Status" required="" type="number">
                            
                        </div>
                    </div>
   
    <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-block btn-lg bg-pink waves-effect']) ?>
    <?= $this->Form->end() ?>
    <div class="m-t-25 m-b--5 align-center">
                        <a href="login">You already have a membership?</a>
                    </div>
</div>
</div>
</div>