<?php

function dwwp_add_custom_metabox() {
    add_meta_box(
            '2', 'Terminals', 'custom_callback', '', 'normal', '', ''
    );
    add_meta_box(
            '1', 'customBox', 'custom1_callback'
    );
}

add_action('add_meta_boxes', 'dwwp_add_custom_metabox');

function custom_meta_callback() {
    ?>


    <div class="">
        <div class="row">
            <div class="header">
                <label class="row-title" for="custom-id">Custom Id</label>
            </div>

            <div class="footer">
                <input type="text" name="custom-id" value="" id="custom-id" />

            </div>
        </div>
    </div>

  
    <?php
}
