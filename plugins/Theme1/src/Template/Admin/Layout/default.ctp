<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

     <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <?= $this->Html->css('admin/plugins/bootstrap/css/bootstrap.css') ?>
    <?= $this->Html->css('admin/plugins/node-waves/waves.css') ?>
    <?= $this->Html->css('admin/plugins/animate-css/animate.css') ?>
    <?= $this->Html->css('admin/css/style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <script src="https://use.fontawesome.com/a7e3adbf73.js"></script>
    <script
              src="http://code.jquery.com/jquery-3.2.1.min.js"
              integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
              crossorigin="anonymous"></script>
</head>
<body class="login-page ls-closed">
    
    <?= $this->Flash->render() ?>
    
        <?= $this->fetch('content') ?>
    
    <footer>
    </footer>
</body>
</html>
