const container = document.querySelector(".container");
const buttons = document.querySelector(".form-group buttons");
const logo = document.querySelector(".logo");
const body = document.querySelector("body");

const tl = new TimelineMax();
tl.fromTo(logo, 1, {height:"0%"}, {height: "100%",  ease: Power2.easeInOut})
.fromTo(buttons, 1, {height:"0%"}, {height: "100%",  ease: Power2.easeInOut})
.fromTo(body, 1, {height:"0%"}, {height: "100%",  ease: Power2.easeInOut})
.fromTo(body, 1.2, {height:"0%"}, {height: "100%",  ease: Power2.easeInOut})