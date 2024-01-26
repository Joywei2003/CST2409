 function abc(mode){
    let abc = "abcdefghijklmnopqrstuvwxyz"
        if (mode == "A" || mode =="Z")
            abc = abc.toUpperCase();

    abc = abc.split("");   

      if (mode =="Z" || mode == "z")
            abc = abc.reverse();
    return abc;
}
function generateABC(modes){
    let letters = modes.split("");
    let results = [];

    letters.forEach(e => {
        let alphaBets = abc(e);
        results.push(alphaBets);
    });
    return results.flat();
}
function updatePage(mode){
    let divABC = document.getElementById("screen-display");
    let results = generateABC(mode);
    console.log({results});
    
    divABC.innerHTML = ""; 

    let style = "abc";
    if (results.length > 53){
        style = "abcS52";
    }

    let divCount = document.getElementById("rowCount");
    divCount.innerHTML = results.length;

    results.forEach(e => {
        let newELement = document.createElement("div");
        newELement.innerHTML = e;
        newELement.classList.add("abc");
        divABC.appendChild(newELement);
    })
    
}
function countFormRadio(pThis){
    let mode = pThis.dataset.mode;
    updatePage(mode);
    console.log({dataset: pThis.dataset})
    let abcGenrator = document.getElementById("abcGenrator")
    abcGenrator.value = mode;

    let highlight = document.getElementById("highlightSelected").value;
    citytech.screen.highlightDiv(highlight);
}
function highlight(pThis){
    let highlight = pThis.dataset.mode;
    console.log({highlight, dataset: pThis.dataset});
    let highlightSelected = document.getElementById("highlightSelected")
    highlightSelected.value = highlight;

    citytech.screen.highlightDiv(highlight);
}
