let nextDom = document.getElementById('next');
let prevDom = document.getElementById('prev');
let carouselDom = document.querySelector('.carousel');
let listItemDom = document.querySelector('.carousel .list');
let thumbnailDom = document.querySelector('.carousel .thumbnail');
const mainMenu = document.querySelector('.mainMenu');
const closeMenu = document.querySelector('.closeMenu');
const openMenu = document.querySelector('.openMenu');

nextDom.onclick = function(){
    showSlider('next');
}
prevDom.onclick = function(){
    showSlider('prev');
}
let timeRunning = 3000;
let timeAutoNext = 7000;
let runTimeOut;
let runAutoRun = setTimeout(()=>{
    nextDom.click();
}, timeAutoNext);
function showSlider(type){
    let itemSlider = document.querySelectorAll('.carousel .list .item');
    let itemThumbnail = document.querySelectorAll('.carousel .thumbnail .item')

    if(type === "next"){
        listItemDom.appendChild(itemSlider[0]);
        thumbnailDom.appendChild(itemThumbnail[0]);
        carouselDom.classList.add('next');
    }else{
        let positionLastItem = itemSlider.length - 1;
        listItemDom.prepend(itemSlider[positionLastItem]);
        thumbnailDom.prepend(itemThumbnail[positionLastItem]);
        carouselDom.classList.add('prev');
    }

    clearTimeout(runTimeOut);
    runTimeOut = setTimeout(() =>{
        carouselDom.classList.remove('next');
        carouselDom.classList.remove('prev');
    }, timeRunning);

    clearTimeout(runAutoRun);
    runAutoRun = setTimeout(()=>{
        nextDom.click();
    }, timeAutoNext);
}


openMenu.addEventListener('click', show);
closeMenu.addEventListener('click', close);

function show(){
    mainMenu.style.display = 'flex';
    mainMenu.style.top = '0';
}

function close(){
    mainMenu.style.display = 'none';
}


function addShowHideListener(triggerClass, targetClass, closeClass) {
    const triggers = document.querySelectorAll(`.${triggerClass}`);
    const targets = document.querySelectorAll(`.${targetClass}`);
    
    triggers.forEach((trigger, index) => {
        trigger.addEventListener('click', () => {
            targets[index].classList.add('show');
        });
    });

    const closeButtons = document.querySelectorAll(`.${closeClass}`);
    closeButtons.forEach((closeButton, index) => {
        closeButton.addEventListener('click', () => {
            targets[index].classList.remove('show');
        });
    });
}

// Update your class names if needed
const locations = [
    { trigger: 'tbilisib', target: 'tbilisi', close: 'closetb' },
    { trigger: 'sairmeb', target: 'sairme', close: 'closesa' },
    { trigger: 'batumib', target: 'batumi', close: 'closeba' },
    { trigger: 'signagib', target: 'signagi', close: 'closesig' },
    { trigger: 'makhuntsetib', target: 'makhuntseti', close: 'closemak' },
    { trigger: 'martvilib', target: 'martvili', close: 'closemar' },
];

locations.forEach(location => {
    addShowHideListener(location.trigger, location.target, location.close);
});

