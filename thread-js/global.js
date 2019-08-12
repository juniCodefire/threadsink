const container = document.querySelector('.thread-sink-container');
const homeWallpaper = document.querySelector('.thread-sink-header');
const closeCookies = document.querySelector('.thread-close');
const cookiesBlock= document.querySelector('.thread-sink-top-cookies');
const redirectHomeBtns = Array.from(document.querySelectorAll('.redirect-home-btn'));
let switchcases = 0;
console.log(window)
const monitor = (e) => {
//Show header background when scrolled
const bodyYMovement = window.scrollY;
const getNavBar = document.querySelector('.thread-sink-top-header');
  if (bodyYMovement > 100) {
    getNavBar.style.background = 'rgba(0,0,0,0.2)';
  }else {
    getNavBar.style.background = 'rgba(0,0,0,0.0)';
  }
}
window.addEventListener('scroll', monitor);

// Change The Home background after 5sec
const switchWallpaper = () => {
  homeWallpaper.classList.remove("animated", "fadeIn");
    setTimeout( () => {
        if (switchcases == 0) {
            homeWallpaper.classList.add("animated", "fadeIn");
            homeWallpaper.style.background = `url("svg/undraw_moonlight_5ksn.svg") no-repeat center`;
            homeWallpaper.style.backgroundSize = 'contain';
            switchcases = 1;
        }else if(switchcases == 1) {
            homeWallpaper.classList.add("animated", "fadeIn");
            homeWallpaper.style.background = `url("svg/undraw_selection_92i4.svg") no-repeat center`;
            homeWallpaper.style.backgroundSize = 'contain';
            switchcases = 2;
        } else if(switchcases = 2) {
            homeWallpaper.classList.add("animated", "fadeIn");
          homeWallpaper.style.background = 'url("svg/undraw_solution_mindset_34bi.svg") no-repeat center';
          homeWallpaper.style.backgroundSize = 'contain';
          switchcases = 0;
        }
  }, 200);
}
setInterval(switchWallpaper, 10000);
//Hide cookies policies message
const hideCookies = () => {
cookiesBlock.style.display = 'none';
}
closeCookies.addEventListener('click',hideCookies)
//Click Logo For Home

const redirectHome = () => {
  location.href = location.href;
}
redirectHomeBtns.map(redirectHomeBtn => redirectHomeBtn.addEventListener('click', redirectHome));
