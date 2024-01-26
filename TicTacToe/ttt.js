const tds = [... document.querySelectorAll("#game tbody td")];

let clear = function() {
    tds.forEach(element => {
        element.innerHTML='N';
    });
};
