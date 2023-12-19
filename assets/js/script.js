const first = document.querySelector(".one");
const second = document.querySelector(".two");
const container = document.querySelector(".container");

// window.setTimeout("history.go(0);", 3100);
// cheak();

// function cheak() {
//   setInterval(() => {
//     if (imgEla === imgEla) {
//       setInterval(() => {
//         imgEla.classList.add("show");
//       }, 1000);
//       setInterval(() => {
//         imgElb.classList.add("show");
//       }, 1000);
//       setInterval(() => {
//         imgElc.classList.add("show");
//       }, 1800);
//       setInterval(() => {
//         imgEld.classList.add("show");
//       });
//     }
//   }, 1000);
// }

let random = Math.floor(Math.random() * 10);

if (random < 1) {
  first.textContent = "USA";
  second.textContent = "Employer-Specific Work";
} else if (random < 2) {
  first.textContent = "Canada";
  second.textContent = "H-1b";
} else if (random < 3) {
  first.textContent = "USA";
  second.textContent = "Employer-Specific Work";
} else if (random <= 4) {
  first.textContent = "Canada";
  second.textContent = "Startup Visa";
} else if (random <= 5) {
  first.textContent = "USA";
  second.textContent = "B1/B2 Visitor Visa";
} else if (random <= 6) {
  first.textContent = "Canada";
  second.textContent = "F-1";
} else if (random <= 7) {
  first.textContent = "USA";
  second.textContent = "EB-1A: Extraordinary Ability";
} else if (random <= 8) {
  first.textContent = "Canada";
  second.textContent = "TN under USMCA";
} else if (random <= 9) {
  first.textContent = "USA";
  second.textContent = "Great Reveal of UUNGD";
} else {
  second.textContent = "H-1b";
}
