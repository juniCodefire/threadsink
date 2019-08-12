//Get all thread div boxes
const threadBlogViews = Array.from(document.querySelectorAll('.thread-blog-view'));

console.log(threadBlogViews)
//map through the boxes
threadBlogViews.map((result, i) => {
  //Get the wallpaper from the data attribute
  let wallpaper = result.dataset.wallpaper;
  //insert as background image
  result.classList.add('animated', 'fadeIn');
  result.style.background = `url(${wallpaper}) no-repeat center`;
  result.style.backgroundSize = 'cover';
  result.style.transition = '1s all ease';
  result.style.transform = `scaleY('2.003')`;
});

const createFrame = (result) => {
  //Get the data-url attribute
  const url = result.dataset.url;
  //Create the iframe
 frame = document.createElement('iframe');
 //add Notice if you browser does not support iframe
 frame.innerHTML = "<p style=margin:0; padding:0;>This browser is not support, please <span class='browser_support'>click here...</span> to read more!</p>";
 frame.setAttribute('src', url);
 frame.style.margin = '0';
 frame.style.padding = '0';
 frame.style.width = '100%';
 frame.style.height = '100%';
 frame.setAttribute('target', "_top");
 result.appendChild(frame);
 console.log(result);
}

threadBlogViews.map((result, i) => {
  result.addEventListener('click', () => {
    createFrame(result);
  })
})

//https://www.bellanaija.com/
