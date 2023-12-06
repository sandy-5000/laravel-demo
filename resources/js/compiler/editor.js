
const openModal = () => {
    const modal = document.querySelector('.modal')
    const editor = document.querySelector('.editor')
    modal.classList.remove('hidden')
    editor.classList.add('blur-sm')
}

const selectLanguage = (language) => {
    console.log(language)
    const modal = document.querySelector('.modal')
    const editor = document.querySelector('.editor')
    const select_btn = document.querySelector('.select-btn')
    modal.classList.add('hidden')
    editor.classList.remove('blur-sm')
    select_btn.innerHTML = language
}
