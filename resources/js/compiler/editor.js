
const openModal = () => {
    const modal = document.querySelector('.modal')
    const editor = document.querySelector('.editor')
    modal.classList.remove('hidden')
    editor.classList.add('blur-sm')
}

const closeModal = () => {
    const modal = document.querySelector('.modal')
    const editor = document.querySelector('.editor')
    modal.classList.add('hidden')
    editor.classList.remove('blur-sm')
}

const selectLanguage = (language) => {
    const modal = document.querySelector('.modal')
    const editor = document.querySelector('.editor')
    const select_btn = document.querySelector('.select-btn')
    modal.classList.add('hidden')
    editor.classList.remove('blur-sm')
    select_btn.innerHTML = language
}
