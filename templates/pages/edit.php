<h3>Edycja notatki</h3>
<div>
<?php 
    $note = $params['note'] ?>
    <?php if (!empty($params['note'])) : ?>
        <form action ="/action=edit" class="note-form" method="post">
            <input type="text" name="id" value="<?php echo $note['id'] ?>" hidden />
            <ul>
                <li>
                    <label for="title">Tytuł<span class="required"></span></label>
                    <input type="text" name="title" id="title" class="field-long" value="<?php echo $note['title'] ?>">
                </li>
            </ul>
</div>


