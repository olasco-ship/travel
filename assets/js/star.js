const studyEl = document.querySelectorAll('.study')
const visitEl = document.querySelectorAll('.visit')
const workEl = document.querySelectorAll('.work')
const immigrateEl = document.querySelectorAll('.immigrate')
const sin = document.querySelectorAll('.single')
const job = document.querySelectorAll('.tiny')

const study = document.querySelector('.checka')
const visit = document.querySelector('.checkb')
const work = document.querySelector('.checkc')
const immigrate = document.querySelector('.checkd')

study.addEventListener('click' , () => {
    if(study.checked === true){
    sin.forEach((sing) => {
        const single = sing
        studyEl.forEach((study) => {
            study.parentElement.classList.add('show')
            single.classList.add('hide')
        })
    })
    } else if (study.checked === false){
        sin.forEach((sing) => {
            const single = sing
            studyEl.forEach((study) => {
                study.parentElement.classList.remove('hide')
                single.classList.remove('hide')
            })
        })
    }
})

visit.addEventListener('click' , () => {
    if( visit.checked === true){
        sin.forEach((sing) => {
            const single = sing
            visitEl.forEach((visit) => {
                visit.parentElement.classList.add('show')
                single.classList.add('hide')
            })
        })
    } else if(visit.checked === false){
        console.log('cow')
        sin.forEach((sing) => {
            const single = sing
            visitEl.forEach((visit) => {
                visit.parentElement.classList.remove('hide')
                single.classList.remove('hide')
            })
        })
    }
  
})
work.addEventListener('click' , () => {
    if( work.checked === true){
        sin.forEach((sing) => {
            const single = sing
            workEl.forEach((work) => {
                work.parentElement.classList.add('show')
                single.classList.add('hide')
            })
        })
    } else if (work.checked === false){
        sin.forEach((sing) => {
            const single = sing
            workEl.forEach((work) => {
                work.parentElement.classList.remove('show')
                single.classList.remove('hide')
            })
        })
    }
  
})
immigrate.addEventListener('click' , () => {
    if(immigrate.checked === true){
        sin.forEach((sing) => {
            const single = sing
            immigrateEl.forEach((immigrate) => {
                immigrate.parentElement.classList.add('show')
                single.classList.add('hide')
            })
        })
    }
    else if (immigrate.checked === false){
        sin.forEach((sing) => {
            const single = sing
            immigrateEl.forEach((immigrate) => {
                immigrate.parentElement.classList.remove('hide')
                single.classList.remove('hide')
            })
        })
    }
  
})


// SLIDER

const slider = document.getElementById('slider')
const value = document.querySelector('.value')
const sv = slider.value
value.textContent = `US$${sv}`
slider.oninput = function () {
    const sg = this.value
    value.textContent = ` US$${sg}`
    job.forEach((jo) => {
        if (sg === 10000){
            sin.forEach((si) => {
                si.classList.add('hide')
            })
        } else if (jo.textContent === 'Net Wroth 10K'){
            sin.forEach((si) => {
                jo.parentElement.classList.add('show')
                si.classList.add('hide')
            })
        } else if (jo.textContent === 'Net worth 25k'){
            sin.forEach((si) => {
                jo.parentElement.classList.add('show')
                si.classList.add('hide')
            })
        }
    })
}
// RADIO

const yesEl = document.getElementById('Yes')
const noEl = document.getElementById('No')


yesEl.addEventListener('click' , () => {
    job.forEach((jo) => {
        const bo = jo
        sin.forEach((si) => {
            if(jo.textContent === 'Job offer needed'){
                jo.parentElement.classList.add('show')
                si.classList.add('hide')
            }
        })
    })
})
noEl.addEventListener('click' , () => {
    job.forEach((jo) => {
        const bo = jo
        sin.forEach((si) => {
            if(noEl.checked === true){
                jo.parentElement.classList.add('hide')
                si.classList.add('show')
            } 
        })
    })
})

// reseet

const reseet = document.getElementById('reset')

reseet.addEventListener('click', () => {
    window.setTimeout('history.go(0);', 100)
})

// INPUT FEILD

const inputEl = document.getElementById('field')
inputEl.addEventListener('click' , () => {
    job.forEach((jo) => {
        sin.forEach((sing) => {
            if (inputEl.value === jo.textContent){
                
                console.log('cow')
                // workEl.forEach((work) => {
                //    work.parentElement.classList.add('show')
                //     sing.classList.add('hide')
                // })
            }
        })
    })
})

// LANGUAGE
const lanBtnEl = document.querySelectorAll('#lan') 
const BtnElNoEnglish = document.querySelector('.no')
const eleBtnEl = document.querySelector('.ele')
const limiBtnEl = document.querySelector('.limi')
const proBtnEl = document.querySelector('.pro')
const fullBtnEl = document.querySelector('.full')
const nativeBtnEl = document.querySelector('.native')

lanBtnEl.forEach((language) => {
    language.addEventListener('click', () => {
        job.forEach((jo) => {
            const bo = jo
            sin.forEach((si) => {
                if(jo.textContent === 'CBL 4'){
                    jo.parentElement.classList.add('show')
                    si.classList.add('hide')
                }
            })
        })
    })
})

eleBtnEl.addEventListener('click', () => {
    job.forEach((jo) => {
        const bo = jo
        sin.forEach((si) => {
            if(jo.textContent === 'CBL 5'){
                jo.parentElement.classList.add('show')
                si.classList.add('hide')
            }
        })
    })
})
limiBtnEl.addEventListener('click', () => {
    job.forEach((jo) => {
        const bo = jo
        sin.forEach((si) => {
            if(jo.textContent === 'CBL 5'){
                jo.parentElement.classList.add('show')
                si.classList.add('hide')
            }
        })
    })
})
proBtnEl.addEventListener('click', () => {
    job.forEach((jo) => {
        const bo = jo
        sin.forEach((si) => {
            if(jo.textContent === 'CBL 5'){
                jo.parentElement.classList.add('show')
                si.classList.add('hide')
            }
        })
    })
})
fullBtnEl.addEventListener('click', () => {
    job.forEach((jo) => {
        const bo = jo
        sin.forEach((si) => {
            if(jo.textContent === 'CBL 7'){
                jo.parentElement.classList.add('show')
                si.classList.add('hide')
            }
        })
    })
})
nativeBtnEl.addEventListener('click', () => {
    job.forEach((jo) => {
        const bo = jo
        sin.forEach((si) => {
            if(jo.textContent === 'CBL 7'){
                jo.parentElement.classList.add('show')
                si.classList.add('hide')
            }
        })
    })
})