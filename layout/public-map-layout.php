<?php include 'classroom-status.php';?>
  <div class="top-view">
    <div class="layout-container"> 
      <div class="layout">
        <div class="col1">
          <div class="row1">
            <div class="stairs-classroom"style="border:none;">
            </div>
            <div class="stairs-side">
              <div class="stairs-step1">
              </div>
              <div class="stairs-step2">
              </div>
            </div>
          </div>
          <div class="row2">
            <div class="main-col1">
              <div class="main-classrooms1">
                <div class="main-classroom">
                  <button <?php echo getColor(1);?>>Room 1</button>
                </div>
                <div class="main-classroom">
                  <button <?php echo getColor(2);?>>Room 2</button>
                </div>
                <div class="main-classroom">
                  <button <?php echo getColor(3);?>>Room 3</button>
                </div>
              </div>
              <div class="main-classrooms2">
                <div class="main-classroom">
                  <button <?php echo getColor(1);?>>Room 4</button>
                </div>
                <div class="main-classroom">
                  <button <?php echo getColor(2);?>>Room 5</button>
                </div>
                <div class="main-classroom">
                  <button <?php echo getColor(1);?>>Room 6</button>
                </div>
              </div>
            </div>
            <div class="main-col2"></div>
          </div>
          <div class="row3">
            <div class="stairs-classroom2"style="border:none;">
            </div>
            <div class="stairs-side2">
              <div class="stairs-step1a">
              </div>
              <div class="stairs-step2b">
              </div>
            </div>
          </div>
        </div>
        <div class="col2">
          <div class="rowb1">
            <div class="side-classrooms">
              <div class="side-classroom">
                <button <?php echo getColor(3);?>>Room 7</button>
              </div>
              <div class="side-classroom">
                <button <?php echo getColor(1);?>>Room 8</button>
              </div>
              <div class="side-classroom">
                <button <?php echo getColor(2);?>>Room 9</button>
              </div>
            </div>
            <div class="side-alley">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="input">
    <button class="value" id="btn3rdFloor">
    <img src="images/stairs-up-dark.svg" alt="stairs-up">
      3rd Floor
    </button>
    <button class="value" id="btn2ndFloor">
      <img src="images/stairs-dark.svg" alt="stairs">
        2nd Floor
      </button>
    <button class="value" id="btn1stFloor">
      <img src="images/stairs-down-dark.svg" alt="stairs-down">
        1st Floor
      </button>
  </div>
<script>
  const blanks = document.querySelector('.blank');

  blanks.addEventListener('click', () => {
    blanks.innerHTML = 'hello';
  });
</script>
  <script>
    // JavaScript to change the content based on button clicks
    const topView = document.querySelector(".top-view");
    const btn2ndFloor = document.getElementById("btn2ndFloor");
    const btn3rdFloor = document.getElementById("btn3rdFloor");
    const btn1stFloor = document.getElementById("btn1stFloor");

    // Simulate a click on the 2nd Floor button to set it as the default
    btn2ndFloor.click();

    btn2ndFloor.addEventListener("click", () => {
      topView.innerHTML = `
      <div class="top-view">
    <div class="layout-container"> 
      <div class="layout">
        <div class="col1">
          <div class="row1">
            <div class="stairs-classroom">
            <button <?php echo getColor(10);?>>Room 10</button>
            </div>
            <div class="stairs-side">
              <div class="stairs-step1">
              </div>
              <div class="stairs-step2">
              </div>
            </div>
          </div>
          <div class="row2">
            <div class="main-col1">
              <div class="main-classrooms1">
                <div class="main-classroom">
                  <button <?php echo getColor(11);?>>Room 11</button>
                </div>
                <div class="main-classroom">
                  <button <?php echo getColor(12);?>>Room 12</button>
                </div>
                <div class="main-classroom">
                  <button <?php echo getColor(13);?>>Room 13</button>
                </div>
              </div>
              <div class="main-classrooms2">
                <div class="main-classroom">
                  <button <?php echo getColor(14);?>>Room 14</button>
                </div>
                <div class="main-classroom">
                  <button <?php echo getColor(15);?>>Room 15</button>
                </div>
                <div class="main-classroom">
                  <button <?php echo getColor(16);?>>Room 16</button>
                </div>
              </div>
            </div>
            <div class="main-col2"></div>
          </div>
          <div class="row3">
            <div class="stairs-classroom2">
              <button <?php echo getColor(17);?>>Room 17</button>
            </div>
            <div class="stairs-side2">
              <div class="stairs-step1a">
              </div>
              <div class="stairs-step2b">
              </div>
            </div>
          </div>
        </div>
        <div class="col2">
          <div class="rowb1">
            <div class="side-classrooms">
              <div class="side-classroom">
                <button <?php echo getColor(18);?>>Room 18</button>
              </div>
              <div class="side-classroom">
                <button <?php echo getColor(19);?>>Room 19</button>
              </div>
              <div class="side-classroom">
                <button <?php echo getColor(20);?>>Room 20</button>
              </div>
            </div>
            <div class="side-alley">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      `;
    });

    btn3rdFloor.addEventListener("click", () => {
      topView.innerHTML = ` 
      <div class="top-view">
  <div class="layout-container"> 
    <div class="layout">
      <div class="col1">
        <div class="row1">
          <div class="stairs-classroom">
            <button <?php echo getColor(21);?>>Room 21</button>
          </div>
          <div class="stairs-side">
            <div class="stairs-step1">
            </div>
            <div class="stairs-step2">
            </div>
          </div>
        </div>
        <div class="row2">
          <div class="main-col1">
            <div class="main-classrooms1">
              <div class="main-classroom">
                <button <?php echo getColor(22);?>>Room 22</button>
              </div>
              <div class="main-classroom">
                <button <?php echo getColor(23);?>>Room 23</button>
              </div>
              <div class="main-classroom">
                <button <?php echo getColor(24);?>>Room 24</button>
              </div>
            </div>
            <div class="main-classrooms2">
              <div class="main-classroom">
                <button <?php echo getColor(25);?>>Room 25</button>
              </div>
              <div class="main-classroom">
                <button <?php echo getColor(3);?>>TVL Room</button>
              </div>
              <div class="main-classroom">
                <button <?php echo getColor(2);?>>Computer Laboratory</button>
              </div>
            </div>
          </div>
          <div class="main-col2"></div>
        </div>
        <div class="row3">
          <div class="stairs-classroom2">
            <button <?php echo getColor(1);?>>Lecture Room</button>
          </div>
          <div class="stairs-side2">
            <div class="stairs-step1a">
            </div>
            <div class="stairs-step2b">
            </div>
          </div>
        </div>
      </div>
      <div class="col2">
        <div class="rowb1">
        </div>
      </div>
    </div>
  </div>
</div>
      `;
    });

    btn1stFloor.addEventListener("click", () => {
      topView.innerHTML = `
      <div class="top-view">
    <div class="layout-container"> 
      <div class="layout">
        <div class="col1">
          <div class="row1">
            <div class="stairs-classroom" style="border:none;">
            </div>
            <div class="stairs-side">
              <div class="stairs-step1">
              </div>
              <div class="stairs-step2">
              </div>
            </div>
          </div>
          <div class="row2">
            <div class="main-col1">
              <div class="main-classrooms1">
                <div class="main-classroom">
                  <button <?php echo getColor(1);?>>Room 1</button>
                </div>
                <div class="main-classroom">
                  <button <?php echo getColor(2);?>>Room 2</button>
                </div>
                <div class="main-classroom">
                  <button <?php echo getColor(3);?>>Room 3</button>
                </div>
              </div>
              <div class="main-classrooms2">
                <div class="main-classroom">
                  <button <?php echo getColor(4);?>>Room 4</button>
                </div>
                <div class="main-classroom">
                  <button <?php echo getColor(5);?>>Room 5</button>
                </div>
                <div class="main-classroom">
                  <button <?php echo getColor(6);?>>Room 6</button>
                </div>
              </div>
            </div>
            <div class="main-col2"></div>
          </div>
          <div class="row3">
            <div class="stairs-classroom2" style="border:none;">
            </div>
            <div class="stairs-side2">
              <div class="stairs-step1a">
              </div>
              <div class="stairs-step2b">
              </div>
            </div>
          </div>
        </div>
        <div class="col2">
          <div class="rowb1">
            <div class="side-classrooms">
              <div class="side-classroom">
                <button <?php echo getColor(7);?>>Room 7</button>
              </div>
              <div class="side-classroom">
                <button <?php echo getColor(8);?>>Room 8</button>
              </div>
              <div class="side-classroom">
                <button <?php echo getColor(9);?>>Room 9</button>
              </div>
            </div>
            <div class="side-alley">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      `;
    });
  </script>
  <style>
    body{
      
  overflow-y: hidden;
}
  </style>
