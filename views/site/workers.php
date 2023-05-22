<!--<div class="workers">-->
<!--<h2></h2>-->
<!--<h3>--><?php //= $message ?? ''; ?><!--</h3>-->
<!--  <div class="work">-->
<!--<table>-->
<!--    <tr>-->
<!--        <td>Id</td>-->
<!--        <td>Имя</td>-->
<!--        <td>Дата рождения</td>-->
<!--        <td>Вид подразделения</td>-->
<!--        <td>Название подразделения</td>-->
<!--        <td>Вид помещения</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td>1</td>-->
<!--        <td>Антипов Дмитрий Анатольевич</td>-->
<!--        <td>01.06.1979</td>-->
<!--        <td></td>-->
<!--        <td></td>-->
<!--        <td></td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td>2</td>-->
<!--        <td>Сучков Игорь Александрович</td>-->
<!--        <td>04.13.1985</td>-->
<!--        <td></td>-->
<!--        <td></td>-->
<!--        <td></td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td>3</td>-->
<!--        <td>Грачёв Алексей Юрьевич</td>-->
<!--        <td>02.05.1980</td>-->
<!--        <td></td>-->
<!--        <td></td>-->
<!--        <td></td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td>4</td>-->
<!--        <td>Мишустин Игорь Александрович</td>-->
<!--        <td>03.10.1981</td>-->
<!--        <td></td>-->
<!--        <td></td>-->
<!--        <td></td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td>5</td>-->
<!--        <td>Мышкин Алексей Николаевич</td>-->
<!--        <td>01.07.1982</td>-->
<!--        <td></td>-->
<!--        <td></td>-->
<!--        <td></td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td>6</td>-->
<!--        <td>Соснов Николай Викторович</td>-->
<!--        <td>08.20.1983</td>-->
<!--        <td></td>-->
<!--        <td></td>-->
<!--        <td></td>-->
<!--    </tr>-->
<!---->
<!--</table>-->
<!--  </div>-->
<!--</div>-->
<!---->
<!-- <div class="new_employee">-->
<!--    <form>-->
<!--        <h2>Добавление нового сотрудника</h2>-->
<!--        <input type="text" name="name" placeholder="Имя">-->
<!--        <input type="date" name="date" placeholder="Дата">-->
<!--        <select>-->
<!--            <option>Выберите вид подразделения</option>-->
<!--            <option>"Экономический"</option>-->
<!--            <option>Электронной техники</option>-->
<!--            <option>Систем управления</option>-->
<!--        </select>-->
<!--        <select>-->
<!--            <option>Выберите название подразделения</option>-->
<!--            <option>Кафедра экономики (Э)</option>-->
<!--            <option>Кафедра физики (Э.Т)</option>-->
<!--            <option>Математика (С.У)</option>-->
<!--        </select>-->
<!--        <select>-->
<!--            <option>Выберите вид помещения</option>-->
<!--            <option>Кабинет</option>-->
<!--            <option>Аудитория</option>-->
<!--        </select>-->
<!--        <button>Закрепить данного сотрудника</button>-->
<!--    </form>-->
<!--</div>-->

<div>
    <?php
    foreach ($workers as $worker){
        echo '<div class="workers">';
        echo '<p class="p">Id:' . $worker->id. '</p>';
        echo '<p class="p">Name:' . $worker->name. '</p>';
        echo '<p class="p">Birthday:' . $worker->birthday. '</p>';
        echo '<p class="p">Division_id:' . $worker->division_id. '</p>';
        echo '<p class="p">Room_id:' . $worker->room_id. '</p>';
        echo '<button>Удалить</button>';
        echo '</div>';
    }
    ?>
</div>

