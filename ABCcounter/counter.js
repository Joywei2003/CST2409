"use strict";

(function(citytech) {
    citytech.screen = citytech.screen || {};

    const querySelectorAll = "#screen-display > div";

   /* citytech.screen.updateRowCount = function() {
        let divSelections = document.querySelectorAll(querySelectorAll);
        console.log({lengthByDeveloper : divSelections.length});
        let span = document.getElementById('rowCount');
        span.innerHTML = divSelections.length;
    }; */

    function clear(){
        let nodeSelections = document.querySelectorAll(querySelectorAll);
        let divSelectionArray = [...nodeSelections];

        divSelectionArray.forEach(element => {
            element.classList.remove('highlight');
        });
    }

    citytech.screen.highlightDiv = function (mode) {
        clear();
       
        let method = undefined;
        switch(mode) {
            case 'v':
                method = isVowel;
                break;
            case 'c':
                method = isConstant;
                break;
            default :
                method = clear;
                break;
            case 'a':
                method = isLetter;
                break;
        }
        let nodeSelections = document.querySelectorAll(querySelectorAll);
        let divSelectionArray = [...nodeSelections];

        divSelectionArray.filter(e => method(e.innerHTML))
                         .forEach(e => e.classList.add('highlight'));
    }

    function isVowel(text){
        let pattern = /[AEIOUaeiou]/;
        let result = pattern.test(text);
        return result;
    }

    function isLetter(text){
        let pattern = /[A-Za-z]/;
        let result = pattern.test(text);
        return result;
    }

    function isConstant(text){
        return !isVowel(text) && isLetter(text);
    } 


}) (window.citytech = window.citytech || {});
