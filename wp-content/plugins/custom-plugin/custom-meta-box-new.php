<?php

function dwwp_add_custom_metabox() {
    add_meta_box(
            'custombox', 
            'Terminals', 
            'custom_callback', 
            '', 
            'normal', 
            '', 
            ''
    );
    add_meta_box(
            'box', 
            'customBox', 
            'custom1_callback'
    );
}

add_action('add_meta_boxes', 'dwwp_add_custom_metabox');

function custom_callback() {
    ?>


    <div>
        <div class="row">
            <div class="header">
                <label class="row-title" for="custom-id">Custom Id</label>
            </div>

            <div class="footer">
                <input type="text" name="custom-id" value="" id="custom-id" />

            </div>
        </div>
        <div class="row">
            <div class="header">
                <label class="row-title" for="custom-id">Radio Buttons</label>
            </div>

            <div class="footer">
                Male: <input type="radio" name="custom-id" value="" id="custom-id" />
                Female: <input type="radio" name="custom-id" value="" id="custom-id" />

            </div>
        </div>
        <div class="row">
            <div class="header">
                <label class="row-title" for="custom-id">Check Boxes</label>
            </div>

            <div class="footer">
                Hyderabad: <input type="checkbox" name="custom-id" value="" id="custom-id" />
                Chennai: <input type="checkbox" name="custom-id" value="" id="custom-id" />
                Mumbai: <input type="checkbox" name="custom-id" value="" id="custom-id" />
                Bangalore: <input type="checkbox" name="custom-id" value="" id="custom-id" />
            </div>
        </div>
        <div class="row">
            <div class="header">
                <label class="row-title" for="custom-id">DropDown</label>
            </div>

            <div class="footer">
                <select>
                    <option value="volvo">Volvo</option>
                    <option value="bmw">BMW</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
            </div>
        </div>
    </div>


    <?php
}
