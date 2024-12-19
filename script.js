const menu = document.getElementById('menu');
const overlay = document.getElementById('overlay');
let mustLeave = false;
function showOverlay() {
	overlay.classList.add('show');
	overlay.classList.remove('hidden');
}
menu.onclick = showOverlay;
menu.onmouseenter = () => {
	if (!mustLeave) {
		showOverlay();
	}
};
menu.onmouseleave = () => {
	mustLeave = false;
};
document.getElementById('close').onclick = () => {
	overlay.classList.remove('show');
	overlay.classList.add('hidden');
	mustLeave = true;
};