<?php
$this->menu=array(
    array('label'=>'Вывод списка книг', 'url'=>array('stats/books')),
    array('label'=>'Вывод списка авторов', 'url'=>array('stats/users')),
    array('label'=>'Вывод случайных книг', 'url'=>array('stats/rand')),
);
?>
    <h1>Вывод списка авторов, чьи книги в данный момент читает более трех читателей.</h1>
<?php
$this->widget('zii.widgets.grid.CGridView',array(
    'id'=>'',
    'dataProvider'=>$odpBooks,
    'columns'=>array(
        array(
            'name'=>'name',
            'type'=>'raw',
            'value'=>'MAuthor::model()->strAuthors($data)'
        )
    )
));