<?php

function craate_form_group($name, $label, $errors, $type)
{
    echo '<div class="form-group">';
    echo '<label for="'.$name.'">'.$label.'</label>';
    echo '<input type="'.$type.'" class="form-control';
    if (isset($errors[$name]) && !empty($errors[$name])) {
        echo ' is-invalid';
    }
    echo '" id="'.$name.'" name="'.$name.'" />';

    if (isset($errors["email"]) && !empty($errors["email"])) {
        echo '<div class="invalid-feedback d-block">' . $errors[$name] . '</div>';
    }
    echo '</div>';
}