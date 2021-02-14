<?php
if (!filter_has_var(INPUT_GET, 'email')) {
    echo "email no encontrado como parámetro GET";
} else {
    echo "email encontrado como parámetro GET";
}
