const profileMenuDesktop = document.querySelector(".desktop-menu")
const profileMenuOpen = document.querySelector(".perfil-button")

profileMenuOpen.addEventListener("click", openMenuDesktop)

function openMenuDesktop() {
  profileMenuDesktop.classList.toggle("inactive")
}