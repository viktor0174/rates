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
$this->registerJs("
    $('.edit').on('focusout',function () {let res=confirm('Сохранить внесенные изменения?'); if(res){
            let txt = $(this).text();
            const { digits, letters } = separateDigits(txt);
            alert(digits+' =>ok');
        }else{return false;}
    });
    function separateDigits(text) {
        const regex = /\D/g;
        let digits = text.replace(regex, '');
        let letters = text.replace(/[^a-z]/gi, '');        
        return { digits, letters };
    }
    
");
?>
