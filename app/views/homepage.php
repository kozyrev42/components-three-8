<!-- подключаем Шаблон template.php, передаём ему данные через 'title'-->
<?php $this->layout('template', ['title' => 'User Profile']) ?>

<!-- следующий фрагмент кода будет внедрён в template.php, в '$this->section('content')' -->
<h1>User Profile</h1>
<p>Hello, <?=$this->e($name)?></p>  
