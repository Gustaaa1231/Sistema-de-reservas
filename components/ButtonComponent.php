<?php
function buttonComponent(bool | null $outline, string $text, string | null $icon) {
    $outline = $outline ? "btn-outline" : '';
    $div = $outline ? "btn-div-outline" : '';
    $icon = $icon ? "<img src='$icon'/>" : '';

    echo"<button class='btn'><span>Download</span></button>";
}
?>