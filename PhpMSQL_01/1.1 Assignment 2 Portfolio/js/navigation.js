const navigation = document.querySelector(".nav-tabs");
const tabsLink = document.querySelectorAll(".tabs");

navigation.addEventListener("click", () => {
  tabsLink.classList.toggle("hide");
});
