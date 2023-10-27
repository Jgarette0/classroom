const checkbox = document.querySelector('input[type="checkbox"]');
const darkIcon = document.querySelector('.dark-icon');
const lightIcon = document.querySelector('.light-icon');
const classroomIcon = document.querySelector('.lassroom');
const homeIcon = document.querySelector('.home');
const vacantIcon = document.querySelector('.vaacant');
//const twitterIcon = document.querySelector('.icon4');
//const githubIcon = document.querySelector('.icon5');
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
  classroomIcon.src = 'images/icons/classroom-light.svg';
  homeIcon.src = 'images/icons/home-light.svg';
  vacantIcon.src = 'images/icons/vacant-light.svg';
  //twitterIcon.src = 'image/twitter0.svg';
  //githubIcon.src = 'image/github0.svg';
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
classroomIcon.src = 'images/icons/classroom-dark.svg';
homeIcon.src = 'images/icons/home-dark.svg';
vacantIcon.src = 'images/icons/vacant-dark.svg';
//twitterIcon.src = 'image/twitter1.svg';
//githubIcon.src = 'image/github1.svg';
 }
});