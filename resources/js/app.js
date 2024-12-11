import "./bootstrap";

import Alpine from "alpinejs";
import mask from "@alpinejs/mask";
Alpine.plugin(mask);

function openModal() {
    document.getElementById("modal").style.display = "block";
}
function closeModal(){
    document.getElementById('modal').style.display = 'none';
}

window.openModal = openModal;
window.closeModal = closeModal;

window.Alpine = Alpine;

Alpine.start();
