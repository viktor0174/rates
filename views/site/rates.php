<?
    use yii\helpers\Url;
    use yii\widgets\Pjax;
    use yii\widgets\ActiveForm;
?>
<style>
    .ratesList tr td {cursor:default;}
    .edit {cursor:text !important; }
</style>
<table class="ratesList" cellspacing="5" cellpadding="5">
    <thead>
    <tr>
        <th>№</th>
        <th>Название</th>
        <th>Описание</th>
        <th>Скорость </th>
        <th>Цена</th>
    </tr>
    </thead>
    <tbody>
        <?foreach($queryRates as $value):?>
        <tr id="rate<?=$value->id?>">
            <td><?=$value->id?></td>
            <td><?=$value->name?></td>
            <td><?=$value->description?></td>
            <td id="editSpeed<?=$value->id?>" contentEditable="true" class="edit" title="Отредактируйте скорость как Вам нужно"><?=$value->speed?> Мбит/с</td>
            <td id="Price<?=$value->id?>"><?=$value->price?> ₽</td>
        </tr>
        <?endforeach;?>
    </tbody>
</table>
<?
$url = Url::toRoute("site/update");
$this->registerJs("
    $('.edit').on('focusout',function () {let res=confirm('Сохранить внесенные изменения?'); if(res){
            let node = $(this).parent().attr(\"id\");
            let txt = $(this).text();
            $.ajax({
                url: '".$url."',
                dataType: \"json\", 
                type:\"GET\", 
                data: { \"speed\": separateDigits(txt), \"id\":separateDigits(node)},
                success: function(response) {
                    console.log(response);                    
                    if(response == \"ok\") alert('Сохранено');
                },
                error : function(jqXHR, exception){
                    console.log(jqXHR);
                    console.log(exception);
                }
              });
        }else{return false;}
    });
    function separateDigits(text) {
        const regex = /\D/g;
        return text.replace(regex, '');
    }
    
");
?>
