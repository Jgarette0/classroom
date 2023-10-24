let classroomHtml = '';

classrooms.forEach((classroom) => {
  classroomHtml += 
  `
    <div class="div1">
      <div class="diva"><img src="${classroom.image}" alt="${classroom.name}" class="img1"></div>
      <div class="divb">
        <div class="classroom-name">${classroom.name}</div>
        <div class="status">
        <div></div>
        <label class="l-vacant"for="vacant">Vacant</label>
      </div>
      </div>
    </div>
  `;

  const displayToMain = document.querySelector('.js-main');

  displayToMain.innerHTML = classroomHtml;

});
