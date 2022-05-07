const navbar = document.querySelector('#navbar')

const primaryNav = document.querySelector('#primary-navigation')
const navToggle = document.querySelector('.mobile-nav-toggle')


navToggle.addEventListener('click', () => {
    const visible = primaryNav.getAttribute('data-visible')
    if (visible === "false"){
        primaryNav.setAttribute('data-visible', true)
    } else {
        primaryNav.setAttribute('data-visible', false)
    }
    console.log(visible)
})
    
