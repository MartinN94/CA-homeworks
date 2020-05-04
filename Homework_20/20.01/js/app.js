var container = document.querySelector(".card");

var a = document.querySelector(".title");
a.textContent = "Javascript";

var button = document.querySelector("button");
button.addEventListener("click", toggleData);

var collapse = document.querySelector(".collapse");

var list = document.querySelector(".list-group");

var liOne = document.querySelector("#one");
var liTwo = document.querySelector("#two");
var liThree = document.querySelector("#three");
var liFour = document.querySelector("#four");


var liOneText = document.createElement("a");
liOneText.textContent = "Language";
liOneText.className = ("text-light");
liOne.appendChild(liOneText);

var liTwoText = document.createElement("a");
liTwoText.textContent = "Practise";
liTwoText.className = ("text-light");
liTwo.appendChild(liTwoText);

var liThreeText = document.createElement("a");
liThreeText.textContent = "Interview";
liThreeText.className = ("text-light");
liThree.appendChild(liThreeText);

var liFourText = document.createElement("a");
liFourText.textContent = "Pullze";
liFourText.className = ("text-light");
liFour.appendChild(liFourText);


function toggleData(){
    if(collapse.classList.contains("show")){
        collapse.classList.remove("show");

    }else {
        collapse.classList.add("show");
    }
}

function change(){
    liOne.classList.remove("bg-dark");
    liOne.classList.add("bg-light");
    liOneText.classList.remove("text-light");
    liOneText.classList.add("text-dark");

    liTwo.classList.remove("bg-dark");
    liTwo.classList.add("bg-light");
    liTwoText.classList.remove("text-light");
    liTwoText.classList.add("text-dark");

    liThree.classList.remove("bg-dark");
    liThree.classList.add("bg-light");
    liThreeText.classList.remove("text-light");
    liThreeText.classList.add("text-dark");

    liFour.classList.remove("bg-dark");
    liFour.classList.add("bg-light");
    liFourText.classList.remove("text-light");
    liFourText.classList.add("text-dark");

}

function changeBack(){
    liOne.classList.remove("bg-light");
    liOne.classList.add("bg-dark");
    liOneText.classList.remove("text-dark");
    liOneText.classList.add("text-light");

    liTwo.classList.remove("bg-light");
    liTwo.classList.add("bg-dark");
    liTwoText.classList.remove("text-dark");
    liTwoText.classList.add("text-light");

    liThree.classList.remove("bg-light");
    liThree.classList.add("bg-dark");
    liThreeText.classList.remove("text-dark");
    liThreeText.classList.add("text-light");

    liFour.classList.remove("bg-light");
    liFour.classList.add("bg-dark");
    liFourText.classList.remove("text-dark");
    liFourText.classList.add("text-light");
}