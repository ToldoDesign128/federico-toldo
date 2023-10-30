// On page load or when changing themes, best to add inline in `head` to avoid FOUC
if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
  } else {
    document.documentElement.classList.remove('dark');
  };
  
  function setDarkTheme() {
    document.documentElement.classList.add("dark");
    localStorage.theme = "dark";
  };
  
  function setLightTheme() {
    document.documentElement.classList.remove("dark");
    localStorage.theme = "light";
  };
  
  function onThemeSwitcherItemClick(event) {
    const theme = event.target.dataset.theme;
  
    if (theme === "system") {
      localStorage.removeItem("theme");
      setSystemTheme();
    } else if (theme === "dark") {
      setDarkTheme();
    } else {
      setLightTheme();
    }
  };
  
  const themeSwitcherItems = document.querySelectorAll("#theme-switcher");
  themeSwitcherItems.forEach((item) => {
    item.addEventListener("click", onThemeSwitcherItemClick);
  });
//Hamburger menu
jQuery("#hamburgerButton").click(function () {
    jQuery("#hamburgerButton").toggleClass("is-active");
    jQuery("#menuClose").toggleClass("hidden");
    jQuery("#menuOpen").toggleClass("lg:flex");
    jQuery("#menu").toggleClass("open");
  });
// Loader
document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function() {
        document.querySelector("body").classList.add("loaded");
    }, 10)
  });