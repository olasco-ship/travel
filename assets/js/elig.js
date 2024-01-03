// window.setTimeout('history.go(0);',1000)
const usaBtnEl = document.querySelector('.usa')
const candaBtnEl = document.querySelector('.canada')
const usaSide = document.querySelector('.uniteds')
const canadaSide = document.querySelector('.canads')
const eligEl = document.querySelector('.eligibility')
const btn = document.querySelectorAll('.btn')


//  SPECIAL FUNCTION
function blue () {
    btn.forEach ((btns) => {
        btns.addEventListener('click' , () => {
            if (btns.classList.contains('blue') === false){
                btns.classList.add('blue')
            }
        })
    })
}

usaBtnEl.addEventListener('click', () => {
    usaSide.classList.add('show')
    canadaSide.classList.remove('show')
    eligEl.classList.add('width')
    blue()
})
candaBtnEl.addEventListener('click', () => {
    canadaSide.classList.add('show')
    usaSide.classList.remove('show')
    eligEl.classList.add('width')
})

//  NEXT BTN SIDE
const lastBtnEl = document.querySelectorAll('.last')
const nextBtnEl = document.querySelector('.next')

lastBtnEl.forEach((last) => {
    last.addEventListener('click', () => {
        nextBtnEl.classList.add('show')
    })
})
nextBtnEl.addEventListener('click',() => {
    eligEl.classList.add('hide')
})


//  SECOND QUESTIONS SCRIPTS
const tuberEl = document.querySelector('.tuber')
const mentalEl = document.querySelector('.mental')
const convictEl = document.querySelector('.conviction')
const noBtnEl = document.querySelector('.tuberno')
const yesBtnEl = document.querySelector('.tuberyes')
const menYesBtnEl = document.querySelector('.mentalyes')
const mentalNoBtnEl = document.querySelector('.mentalno')

const yesNextEl = document.querySelectorAll('.yes')
//  SCRIPT FOR ALL YES BUTTON
yesNextEl.forEach ((yes) => {
    yes.onclick = () => {
        nextTEl.classList.remove('hide')
        // mentalEl.classList.remove('show')
        // convictEl.classList.remove('show')
        tuberEl.classList.add('heightn')
    }
})
//  SCRIPT FOR ALL NO BUTTON
noBtnEl.onclick = () => {
    mentalEl.classList.add('show')
    tuberEl.classList.add('heightn')
    nextTEl.classList.add('hide')
}
mentalNoBtnEl.onclick = () => {
    convictEl.classList.add('show')
    tuberEl.classList.add('heightnd')
    nextTEl.classList.add('hide')
}

nextBtnEl.addEventListener('click', () => {
    tuberEl.classList.add('show')
})

//  NEXT BUTTON FOR 3RD QUESTION
const convitBtnEl = document.querySelectorAll('.convit')
const nextTEl = document.querySelector('.nextub')
convitBtnEl.forEach ((conv) => {
    conv.onclick = () => {
        nextTEl.classList.remove('hide')
        tuberEl.classList.add('heightrd')
    }
})
nextTEl.onclick = () => {
    tuberEl.classList.remove('show')
    citizenEl.classList.add('show')
}

//  CITZENSHIP QUESTION SCRIPT{}
const optionEl = document.querySelector('#countries')
const liveEl = document.querySelector('#live')
const currentEl = document.querySelector('.current')
const livingEl = document.querySelector('.living')
const citizenEl = document.querySelector('.citizen')
const citizBtnNo = document.querySelector('.citizino')
const citizBtnYes = document.querySelector('.citizenyes')
const goBtnEl = document.querySelector('.nextcit')

goBtnEl.onclick = () => {
    spousEl.classList.remove('hide')
    citizenEl.classList.remove('show')
}
optionEl.onclick = () => {
    currentEl.classList.add('show')
    citizenEl.classList.add('heightn')
}

//  NO BTN SCRIPT{}
citizBtnNo.onclick = () => {
    goBtnEl.classList.remove('hide')
    livingEl.classList.remove('show')
    citizenEl.classList.add('heightn')
}
// YES BTN SCRIPT
citizBtnYes.onclick = () => {
    goBtnEl.classList.add('hide')
    livingEl.classList.add('show')
    citizenEl.classList.add('heightnd')
}
liveEl.onclick = () => {
    goBtnEl.classList.remove('hide')
}


// SPOUSE QUESTIONS SCRIPT
const spousEl = document.querySelector('.spouse')
const spouseYesBtn = document.querySelector('.spouseyes')
const spousenoBtn = document.querySelector('.spouseno')
const untoSpouseEl = document.querySelector('.nextsp')
const permitEl = document.querySelector('.permit')
const permitBtnYes = document.querySelector('.permityes')
const permitBtnNo = document.querySelector('.permitno')
const stwEl = document.querySelector('.STWpermit')
const stwBtnEl = document.querySelectorAll('.stw')
const comingEl = document.querySelector('.coming')
const comeBtnEl = document.querySelectorAll('.come')






permitBtnYes.onclick = () => {
    untoSpouseEl.classList.remove('hide')
    stwEl.classList.add('hide')
    blue()
}
stwBtnEl.forEach ((btn) => {
    btn.onclick = () => {
        comingEl.classList.add('show')
        spousEl.classList.add('heightnnd')
        spousEl.classList.add('heightnrd')
        blue()
    }
})
comeBtnEl.forEach((come) => {
    come.onclick = () => {
        untoSpouseEl.classList.remove('hide')
        blue()
    }
})
permitBtnNo.onclick = () => {
    untoSpouseEl.classList.add('hide')
    stwEl.classList.remove('hide')
    spousEl.classList.add('heightnnd')
    blue()
}
spouseYesBtn.onclick = () => {
    permitEl.classList.add('show')
    untoSpouseEl.classList.add('hide')
    spousEl.classList.add('heightns')
    blue()
}
spousenoBtn.onclick = () => {
    untoSpouseEl.classList.remove('hide')
    permitEl.classList.remove('show')
    stwEl.classList.add('hide')
    spousEl.classList.remove('heightns')
    comingEl.classList.remove('show')
    blue()
}

//  SCRIPT FOR EDUCATION
const EduElBtn =  document.querySelector('#edu')
const EduEl = document.querySelector('.education')
const certificatetEl = document.querySelector('.certificate')
const graduationEl = document.querySelector('.graduating')
const graduationBtnEl = document.querySelectorAll('.grad')
const nedBtnEl = document.querySelector('.nexted')

untoSpouseEl.onclick = () => {
    EduEl.classList.remove('hide')
    spousEl.classList.add('hide')
}

EduElBtn.onclick = () => {
    currentEl.classList.add('show')
    EduEl.classList.add('heightrd')
    certificatetEl.classList.remove('hide')
    graduationEl.classList.remove('hide')
}
graduationBtnEl.forEach ((grds) => {
    grds.onclick = () => {
        nedBtnEl.classList.remove('hide')
        blue()
    }
})

//  NETWORTH SCRIPT
const netEl = document.querySelector('.net')
const usdtBtnEl = document.querySelectorAll('.usdt')
const letterSide = document.querySelector('.lastn')

nedBtnEl.onclick = () => {
    netEl.classList.add('show')
    EduEl.classList.add('hide')
}

usdtBtnEl.forEach ((usd) => {
    usd.addEventListener('click', () => {
        letterSide.classList.add('show')
    })
})
const letEl  = document.querySelector('.letter')

letterSide.onclick = () => {
    console.log('hhhhh')
    letEl.classList.add('show')
    netEl.classList.remove('show')
}