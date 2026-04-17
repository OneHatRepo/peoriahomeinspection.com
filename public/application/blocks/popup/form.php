<?php defined('C5_EXECUTE') or die('Access Denied.'); ?>

<div id="form-container-<?php echo $uniqueID; ?>">

    <div class="tab-content mt-4">

        <div class="js-tab-pane">

            <div class="mb-4">
                <?php echo $form->label($view->field('title'), t('Title')); ?>
                <?php echo $form->text($view->field('title'), $title, ['maxlength'=>'255']); ?>
            </div>

            <div class="mb-4">
                <?php echo $form->label($view->field('message'), t('Message').' *'); ?>
                <?php echo $form->textarea($view->field('message'), $message); ?>
            </div>

            <div class="mb-4">
                <?php echo $form->label($view->field('show_again_after_minutes'), t('Show again after ? minutes')); ?>
                <?php echo $form->text($view->field('show_again_after_minutes'), $show_again_after_minutes, ['maxlength'=>'255']); ?>
                <div class="form-text"><?php echo t('Leave blank for default (1440 minutes = 1 day)'); ?></div>
            </div>

        </div>

        <hr/>

        <div class="form-text">* <?php echo t('Required fields'); ?></div>

    </div>

</div>