<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".css">
</head>
<body>
<label for="checkbox">
  <input type="checkbox" id="checkbox" style="display: none;">
  <img src="../../images/icons/dark.svg" alt="Unchecked" class="dark-icon">
  <img src="../../images/icons/light.svg" alt="Checked" class="light-icon">
</label>



    <script>
    const checkbox = document.querySelector('input[type="checkbox"]');
    const darkIcon = document.querySelector('.dark-icon');
    const lightIcon = document.querySelector('.light-icon');
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
     }
    });
    </script>
    <style>
     :root {
 --day-background-color: #fbfbfb;
 --day-text-color: #181818; 
 --night-background-color: #181818; 
 --night-text-color: #fbfbfb;
}

.dark{
 margin-right: -25px;
}
.dark{
 z-index: 1;

}

label[for="checkbox"] {
  cursor: pointer;
}




    </style>
</body>
</html>
