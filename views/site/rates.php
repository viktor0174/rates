
<table>
        <thead>
        <tr>
            <th>№</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Скорость</th>
            <th>Цена</th>
        </tr>
        </thead>
        <tbody>
            <?foreach($queryRates as $value):?>
            <tr>
                <td><?=$value->id?></td>
                <td><?=$value->name?></td>
                <td><?=$value->description?></td>
                <td><?=$value->speed?></td>
                <td><?=$value->price?></td>
            </tr>
            <?endforeach;?>
        </tbody>
    </table>