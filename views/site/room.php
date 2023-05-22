<div>
    <?php
    foreach ($room as $room){
        echo '<div class="workers">';
        echo '<p class="p">Room_id:' . $room->room_id. '</p>';
        echo '<p class="p">Room_name:' . $room->name. '</p>';
        echo '<p class="p">Square:' . $room->square. '</p>';
        echo '<p class="p">Room_id:' . $room->room_view_id. '</p>';
        echo '<button>Удалить</button>';
        echo '</div>';
    }
    ?>
</div>
