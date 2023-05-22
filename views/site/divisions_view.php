<div>
    <?php
    foreach ($divisions_view as $division_view){
        echo '<div class="workers">';
        echo '<p class="p">Division_view_id:' . $division_view->division_view_id. '</p>';
        echo '<p class="p">Name:' . $division_view->name. '</p>';
        echo '<button>Удалить</button>';
        echo '</div>';
    }
    ?>
</div>
