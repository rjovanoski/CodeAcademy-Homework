<?php if (count($messages) > 0) : ?>
    <div class="message">
        <?php foreach ($messages as $message) : ?>
            <p class="message"><?php echo $message ?></p>
        <?php endforeach ?>
    </div>
<?php endif ?>