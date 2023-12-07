import { snippets } from "./defaultSnippets.js"

let editor = undefined
let lang = 'java'

const openModal = () => {
    const modal = document.querySelector('.modal')
    const editor = document.querySelector('.editor')
    modal.classList.remove('hidden')
    editor.classList.add('blur-sm')
}
window.openModal = openModal

const closeModal = () => {
    const modal = document.querySelector('.modal')
    const editor = document.querySelector('.editor')
    modal.classList.add('hidden')
    editor.classList.remove('blur-sm')
}
window.closeModal = closeModal

const selectLanguage = (language) => {
    const modal = document.querySelector('.modal')
    const editor = document.querySelector('.editor')
    modal.classList.add('hidden')
    editor.classList.remove('blur-sm')
    const select_btn = document.querySelector('.select-btn')
    select_btn.innerHTML = language
    lang = language
    swiftLanguage(language)
}
window.selectLanguage = selectLanguage

const swiftLanguage = (lang) => {
    let x = snippets[lang]
    let data = localStorage.getItem(lang)
    if (data) {
        x = JSON.parse(data)
    }
    console.log('shift')
    editor.contentWindow.postMessage({
        eventType: 'populateCode',
        language: x.language,
        files: x.files,
    }, "*")
}

const handleMessage = (e) => {
    if (e.data && e.data.language) {
        const { language, files } = e.data
        localStorage.setItem(e.data.language, JSON.stringify({ language, files }))
    }
}

document.addEventListener('DOMContentLoaded', () => {
    editor = document.getElementById('oc-editor')
    if (editor) {
        window.addEventListener('message', handleMessage)
        setTimeout(() => {
            swiftLanguage(lang)
        }, 500)
    }
})
