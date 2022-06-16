const rect = document.getElementById('rect');
const resize = document.getElementById('resize');

resize.addEventListener('mousedown', startResize, false);

function startResize(e) {
   document.addEventListener('mousemove', Resize, false);
   document.addEventListener('mouseup', stopResize, false);
}

function Resize(e) {
   rect.style.width = (e.clientX - rect.offsetLeft) + 'px';
   rect.style.height = (e.clientY - rect.offsetTop) + 'px';
}

function stopResize(e) {
    document.removeEventListener('mousemove', Resize, false);
    document.removeEventListener('mouseup', stopResize, false);
}