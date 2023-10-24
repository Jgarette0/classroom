<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
<section>
 <div class="container">
  <div class="upper-container">
   <div class="image-container">
     <img src="../../images/classroom/classroom.jpg" alt="classroom">
   </div>
   <div class="detail-container">
     <div class="classroom-name">
      Lecture room
     </div>
     <div class="classroom-status">
       Vacant
     </div>
   </div>
  </div>
  
   <div class="lower-container">
    <div class="question">
     Do you want to occupy lecture room?
    </div>
     <button class="button-yes">occupy</button>
   </div>
<style>
 .upper-container{
  border-left: 1px solid  rgb(22 101 52);
  border-right: 1px solid  rgb(22 101 52);
 }
 .lower-container{
  height: 100%;
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  border: 1px solid  rgb(22 101 52);
  border-bottom-left-radius: 20px;
  border-bottom-right-radius: 20px;
 }
 .question{
  font-weight: bold;
  color: #181818;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  font-size: 30px;
  margin: 20px;
  text-align: center;
 }

 .button-yes {
  cursor: pointer;
  font-weight: bold;
  border-radius: 5px;
  background-color: #181818;
  color: #fbfbfb;
  position: relative;
  font-size: 15px;
  padding: 15px 30px;
  margin: 20px;
}

.button-yes:hover {
  background-color: #fbfbfb;
  color: #181818;
  border: 2px solid #181818;
}
</style>
</section>
<style>

 .container{
  display: flex;
  flex-direction: column;
  align-items: center;

 }
 .upper-container{
  display: flex;
  flex-direction: column;
  align-items: center;


 }
 .detail-container{
  display: flex;
  justify-content: center;
  align-items: center;
  column-gap: 20px;
 }
 .image-container{
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 20px;
  object-fit: cover;
  height: 100%;
  width: 100%;
  
 }
 .image-container img{
  object-fit: cover;
  height: 100%;
  width: 100%;
 }
 


</style>
<style>
/* Mobile Layout */
@media (max-width: 767px) {

 .container{
  display: flex;
  flex-direction: column;
  align-items: center;
  height:100%;
  width: 100%;

 }
 .upper-container{
  display: flex;
  flex-direction: column;
  align-items: center;
  height: 50%;
  width: 100%;
  margin-top: 20%;


 }
 .detail-container{
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: flex-start;
  column-gap: 20px;
  height: 80px;
  width: 100%;
  font-size: 25px;
  margin-top:5px;
 }
 .image-container{
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 15px;
  object-fit: cover;
  height: 100%;
  width: 100%;
  box-sizing: border-box;
  overflow: hidden;
 }
 .classroom-name{
  font-family: Helvetica, Arial;
  font-size: 1.5em;
  margin-left: 10px;
 }
 .classroom-status{
  margin-right: 10px;
 }
 .image-container img{
  object-fit: cover;
  height: 100%;
  width: 100%;
 }



 }
  




</style>
</html>