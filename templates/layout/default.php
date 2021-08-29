<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Development';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'custom', 'materialize.min']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-nav-bar">
        <div class="top-nav-title">
            <a class="logo" href="<?= $this->Url->build('/') ?>">CQUniversity</a>
        </div>
        <div class="top-nav-links">
            
            <?= $this->Html->link(__('Lab Equipment'), ['controller' => 'EquipmentItems','action' => 'index']) ?>
            <?= $this->Html->link(__('Material Safety'), ['controller' => 'Msds','action' => 'index']) ?>
            <a target="_blank" rel="noopener" href="https://my.cqu.edu.au/">MyCQU</a>
            <?= $this->Html->link(__('Admin'), ['controller' => 'LabBookings','action' => 'index']) ?>
            
        </div>
    </nav>
    <main class="main">
        <div class="container-new">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
