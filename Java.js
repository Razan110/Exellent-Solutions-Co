
//img galury Achievements
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
var mybutton = document.getElementById("ourClint");


///popup windows foe manpower..etc



///


const openModalButtons = document.querySelectorAll('[data-modal-target]')
const closeModalButtons = document.querySelectorAll('[data-modal-button]')
const overlay = document.getElementById('overlay')

openModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = document.querySelector(button.dataset.modalTarget)
    openModal(modal)
  })
})

overlay.addEventListener('click', () => {
  const modals = document.querySelectorAll('.modal.active')
  modals.forEach(modal => {
    closeModal(modal)
  })
})

closeModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = button.closest('.modal')
    closeModal(modal)
  })
})

function openModal(modal) {
  if (modal == null) return
  modal.classList.add('active')
  overlay.classList.add('active')
}

function closeModal(modal) {
  if (modal == null) return
  modal.classList.remove('active')
  overlay.classList.remove('active')
}



///Callcenter popup?????????????

const openModalButtonsCallCenter = document.querySelectorAll('[data-ModalCallCenter-target]')
const closeModalButtonsCallCenter = document.querySelectorAll('[data-modalCallCenter-button]')
const overlayCallCenter = document.getElementById('overlayCallCenter')

openModalButtonsCallCenter.forEach(button => {
  button.addEventListener('click', () => {
    const ModalCallCenter = document.querySelector(button.dataset.modalTarget)
    openModalCallCenter(ModalCallCenter)
  })
})

overlayCallCenter.addEventListener('click', () => {
  const ModalCallCenters = document.querySelectorAll('.ModalCallCenter.active')
  ModalCallCenters.forEach(ModalCallCenter => {
    closeoeModalCallCenter(ModalCallCenter)
  })
})

closeModalButtonsCallCenter.forEach(button => {
  button.addEventListener('click', () => {
    const ModalCallCenter = button.closest('.ModalCallCenter')
    closeoeModalCallCenter(ModalCallCenter)
  })
})

function openModalCallCenter(ModalCallCenter) {
  if (ModalCallCenter == null) return
  ModalCallCenter.classList.add('active')
  overlayCallCenter.classList.add('active')
}

function closeoeModalCallCenter(ModalCallCenter) {
  if (ModalCallCenter == null) return
  ModalCallCenter.classList.remove('active')
  overlayCallCenter.classList.remove('active')
}
