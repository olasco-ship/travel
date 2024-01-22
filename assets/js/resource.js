const headEl = document.querySelector(".head");
const questEl = document.querySelector(".questions");
const tempLiEl = document.querySelector(".temp");
const permLiEl = document.querySelector(".perm");
const famLiEl = document.querySelector(".fam");
const OthLiEl = document.querySelector(".others");
const study1HeL = document.querySelector(".study1");
const visit1El = document.querySelector(".visit1");
const parent1El = document.querySelector(".parent1");
const ele1El = document.querySelector(".ele1");
const work1El = document.querySelector(".work1");
const styHead = document.querySelector(".sty");
const styEl = document.querySelector(".stypermit");
// For Permanent Side
const britishEl = document.querySelector(".british");
const exprsEl = document.querySelector(".express");
const strtEl = document.querySelector(".start");
const imiEl = document.querySelector(".immigrate");
const britHead = document.querySelector(".brith");
const britEl = document.querySelector(".brit");
const expHead = document.querySelector(".exph");
const expEl = document.querySelector(".exp");
const strHead = document.querySelector(".strh");
const strEl = document.querySelector(".str");
const immiHead = document.querySelector(".immih");
const immiEl = document.querySelector(".immi");
//
// FOR FAMILY SIDE
const familyEl = document.querySelector(".family");
const gpaEl = document.querySelector(".gpa");
const chEl = document.querySelector(".ch");
const sponHead = document.querySelector(".sponh");
const sponEl = document.querySelector(".spon");
//
const visHead = document.querySelector(".vis");
const visEl = document.querySelector(".vispermit");
const eleHead = document.querySelector(".elec");
const elecEl = document.querySelector(".elepermit");
const parHead = document.querySelector(".par");
const parEl = document.querySelector(".parpermit");
const wrkHead = document.querySelector(".wrk");
const wrkEl = document.querySelector(".wrkpermit");
const tempEl = document.querySelector(".tempoary");
const permEl = document.querySelector(".permanent");
const othersEl = document.querySelector(".others");
const otherEl = document.querySelector(".other");
//      LEFT SIDE SCRIPT
permLiEl.onclick = () => {
  permEl.classList.remove("hide");
  tempEl.classList.add("hide");
  familyEl.classList.add("hide");
};
tempLiEl.onclick = () => {
  permEl.classList.add("hide");
  tempEl.classList.remove("hide");
  familyEl.classList.add("hide");
};
famLiEl.onclick = () => {
  permEl.classList.add("hide");
  familyEl.classList.remove("hide");
  tempEl.classList.add("hide");
};
othersEl.onclick = () => {
  permEl.classList.add("hide");
  familyEl.classList.add("hide");
  tempEl.classList.add("hide");
  otherEl.classList.remove("hide");
};
//   RIGHT SIDE SCRIPT
study1HeL.onclick = () => {
  headEl.classList.add("hide");
  questEl.classList.add("hide");
  styHead.classList.remove("hide");
  styEl.classList.remove("hide");
};
visit1El.onclick = () => {
  headEl.classList.add("hide");
  questEl.classList.add("hide");
  visHead.classList.remove("hide");
  visEl.classList.remove("hide");
};
ele1El.onclick = () => {
  headEl.classList.add("hide");
  questEl.classList.add("hide");
  eleHead.classList.remove("hide");
  elecEl.classList.remove("hide");
};
parent1El.onclick = () => {
  headEl.classList.add("hide");
  questEl.classList.add("hide");
  parHead.classList.remove("hide");
  parEl.classList.remove("hide");
};
work1El.onclick = () => {
  headEl.classList.add("hide");
  questEl.classList.add("hide");
  wrkHead.classList.remove("hide");
  wrkEl.classList.remove("hide");
};
britishEl.onclick = () => {
  headEl.classList.add("hide");
  questEl.classList.add("hide");
  britHead.classList.remove("hide");
  britEl.classList.remove("hide");
};
exprsEl.onclick = () => {
  headEl.classList.add("hide");
  questEl.classList.add("hide");
  expHead.classList.remove("hide");
  expEl.classList.remove("hide");
};
strtEl.onclick = () => {
  headEl.classList.add("hide");
  questEl.classList.add("hide");
  strEl.classList.remove("hide");
  strHead.classList.remove("hide");
};
imiEl.onclick = () => {
  headEl.classList.add("hide");
  questEl.classList.add("hide");
  immiHead.classList.remove("hide");
  immiEl.classList.remove("hide");
};
gpaEl.onclick = () => {
  headEl.classList.add("hide");
  questEl.classList.add("hide");
  sponHead.classList.remove("hide");
  sponEl.classList.remove("hide");
};

// ANSWERS TO THE QUESTION ASKED
const gapEl = document.querySelector(".gap");
const gapsEl = document.querySelector(".gaps");
const legalEl = document.querySelector(".legal");
const legalsEl = document.querySelector(".legals");
const canEl = document.querySelector(".can");
const cansEl = document.querySelector(".cans");
const howEl = document.querySelector(".how");
const howsEl = document.querySelector(".hows");
const statuEl = document.querySelector(".statu");
const statusEl = document.querySelector(".status");
const applyEl = document.querySelector(".apply");
const appliesEl = document.querySelector(".applies");
const restoreEl = document.querySelector(".restore");
const restoresEl = document.querySelector(".restores");
const useEl = document.querySelector(".use");
const usesEl = document.querySelector(".uses");
const cancelEl = document.querySelector(".cancel");
const cancelsEl = document.querySelector(".cancels");
const needEl = document.querySelector(".need");
const needsEl = document.querySelector(".needs");
const letterEl = document.querySelector(".letter");
const lettersEl = document.querySelector(".letters");
const proveEl = document.querySelector(".prove");
const provesEl = document.querySelector(".proves");
const exactEl = document.querySelector(".exact");
const exactsEl = document.querySelector(".exacts");
const underEl = document.querySelector(".under");
const undersEl = document.querySelector(".unders");
const yearEl = document.querySelector(".year");
const yearsEl = document.querySelector(".years");
const submitEl = document.querySelector(".submit");
const submitsEl = document.querySelector(".submits");
const marketEl = document.querySelector(".market");
const marketsEl = document.querySelector(".markets");

gapEl.onclick = () => {
  gapsEl.classList.remove("hide");
  styHead.classList.add("hide");
  styEl.classList.add("hide");
};
legalEl.onclick = () => {
  legalsEl.classList.remove("hide");
  styHead.classList.add("hide");
  styEl.classList.add("hide");
};
canEl.onclick = () => {
  cansEl.classList.remove("hide");
  styHead.classList.add("hide");
  styEl.classList.add("hide");
};
applyEl.onclick = () => {
  appliesEl.classList.remove("hide");
  visHead.classList.add("hide");
  visEl.classList.add("hide");
};
howEl.onclick = () => {
  howsEl.classList.remove("hide");
  visHead.classList.add("hide");
  visEl.classList.add("hide");
};
restoreEl.onclick = () => {
  restoresEl.classList.remove("hide");
  visHead.classList.add("hide");
  visEl.classList.add("hide");
};
useEl.onclick = () => {
  usesEl.classList.remove("hide");
  visHead.classList.add("hide");
  visEl.classList.add("hide");
};
statuEl.onclick = () => {
  statusEl.classList.remove("hide");
  visHead.classList.add("hide");
  visEl.classList.add("hide");
};
needEl.onclick = () => {
  needsEl.classList.remove("hide");
  parHead.classList.add("hide");
  parEl.classList.add("hide");
};
letterEl.onclick = () => {
  lettersEl.classList.remove("hide");
  parHead.classList.add("hide");
  parEl.classList.add("hide");
};
proveEl.onclick = () => {
  provesEl.classList.remove("hide");
  parHead.classList.add("hide");
  parEl.classList.add("hide");
};
cancelEl.onclick = () => {
  cancelsEl.classList.remove("hide");
  parHead.classList.add("hide");
  parEl.classList.add("hide");
};
exactEl.onclick = () => {
  exactsEl.classList.remove("hide");
  britHead.classList.add("hide");
  britEl.classList.add("hide");
};
underEl.onclick = () => {
  undersEl.classList.remove("hide");
  expEl.classList.add("hide");
  expHead.classList.add("hide");
};
yearEl.onclick = () => {
  yearsEl.classList.remove("hide");
  expHead.classList.add("hide");
  expEl.classList.add("hide");
};
submitEl.onclick = () => {
  submitsEl.classList.remove("hide");
  strHead.classList.add("hide");
  strEl.classList.add("hide");
};
marketEl.onclick = () => {
  marketsEl.classList.remove("hide");
  immiHead.classList.add("hide");
  immiEl.classList.add("hide");
};
