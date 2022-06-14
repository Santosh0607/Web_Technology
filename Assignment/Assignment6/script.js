function reset() {
    location.reload(true);
};

function dragndrop() {
    



    let position_x;
    let position_y;
    let select;
    function drag(e) {
        select = e.target;
        position_x = e.offsetX === undefined ? e.layerX : e.offsetX;
        position_y = e.offsetY === undefined ? e.layerY : e.offsetY;
        select.style.zIndex = 100;
    }
    document.querySelector('body').addEventListener('dragstart', drag, false);


    function move(e) {
        console.log(e.preventDefault())
        e.preventDefault();
    }
    document.querySelector('body').addEventListener('dragover', move, false);


    function drop(e) {
        e.preventDefault();
        select.style.left = e.pageX - position_x + 'px';
        select.style.top = e.pageY - position_y + 'px';
    }


    document.querySelector('body').addEventListener('drop', drop, false);

}
dragndrop();