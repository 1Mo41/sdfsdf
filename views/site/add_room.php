<form method="post">
    <div class="new_room">
        <input type="text" name="room_name" placeholder="Название помещения">
        <input type="text" name="square" placeholder="Площадь">
        <label>Тип помещения
            <select name="room_view_id">
                <?php
                foreach ($roomView as $roomVie){
                    echo "<option value=\"$roomVie->room_view_id\">" . $roomVie->name . '</option>';
                }
                ?>
            </select>
        </label>
        <button>Добавить</button>
    </div>
</form>