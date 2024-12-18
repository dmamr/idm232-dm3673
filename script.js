const menu = document.getElementById('menu');
const overlay = document.getElementById('overlay');
let mustLeave = false;
document.getElementById('menu').onmouseenter = () => {
	if (!mustLeave) {
		overlay.classList.add('show');
		overlay.classList.remove('hidden');
	}
};
document.getElementById('menu').onmouseleave = () => {
	mustLeave = false;
};
document.getElementById('close').onclick = () => {
	overlay.classList.remove('show');
	overlay.classList.add('hidden');
	mustLeave = true;
};