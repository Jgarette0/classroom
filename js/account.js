


const checkbox = document.querySelector('input[type="checkbox"]');
const darkIcon = document.querySelector('.dark-icon');
const lightIcon = document.querySelector('.light-icon');
const classroomIcon = document.querySelector('.classroom');
const homeIcon = document.querySelector('.home');
const vacantIcon = document.querySelector('.vacants');
const mapIcon = document.querySelector('.mapSvg');
checkbox.addEventListener('change', () => 
{
 if (checkbox.checked) 
 {
  darkIcon.style.display = 'none';
  lightIcon.style.display = 'inline';
  const root = document.documentElement;
  root.style.setProperty('--day-background-color', '#181818');
  root.style.setProperty('--day-text-color', '#fbfbfb');
  root.style.setProperty('--night-background-color', '#fbfbfb');
  root.style.setProperty('--night-text-color', '#181818');


 }
 else
 {
  lightIcon.style.display = 'none';
  darkIcon.style.display = 'inline';
  const root = document.documentElement;
root.style.setProperty('--day-background-color', '#fbfbfb');
root.style.setProperty('--day-text-color', '#181818');
root.style.setProperty('--night-background-color', '#181818');
root.style.setProperty('--night-text-color', '#fbfbfb');

//twitterIcon.src = 'image/twitter1.svg';
//githubIcon.src = 'image/github1.svg';
 }
});


