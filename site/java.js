// const container = document.querySelector(".container");
// const buttons = document.querySelector(".form-group buttons");
// const logo = document.querySelector(".logo");
// const body = document.querySelector("body");

// const tl = new TimelineMax();
// tl.fromTo(logo, 1, {height:"0%"}, {height: "100%",  ease: Power2.easeInOut})
// .fromTo(buttons, 1, {height:"0%"}, {height: "100%",  ease: Power2.easeInOut})
// .fromTo(body, 1, {height:"0%"}, {height: "100%",  ease: Power2.easeInOut})
// .fromTo(body, 1.2, {height:"0%"}, {height: "100%",  ease: Power2.easeInOut})

// Code voor Opdracht 3

// window.addEventListener("load", function() {
//     var animatedBox = document.getElementById("animatedBox");
//     animatedBox.classList.add("animation-class");
// });

// Code voor Opdracht 3

// JavaScript code for word-by-word animation

// JavaScript code for word-by-word animation

window.addEventListener("load", function() {
    var paragraphElements = document.querySelectorAll(".animate");

    for (var i = 0; i < paragraphElements.length; i++) {
        var paragraph = paragraphElements[i];
        var sentence = paragraph.textContent;
        var words = sentence.split(" ");

        paragraph.innerHTML = ""; 

        for (var j = 0; j < words.length; j++) {
            var wordSpan = document.createElement("span");
            wordSpan.textContent = words[j] + " ";
            wordSpan.style.opacity = 0;
            wordSpan.style.animation = "wordAnimation 1s ease-in-out " + (j * 0.1) + "s forwards";
            paragraph.appendChild(wordSpan);
        }
    }
});


