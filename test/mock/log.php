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
       <img src="../../images/icons/close.svg" alt="close">
     </div>
   </div>
  </div>
   <div class="lower-container">
     <button class="button-yes">End Class</button>
   </div>

   </section>
<style>

@media (min-width: 768px) {
.container{
 display: flex;
 align-items: center;
 border: 1px black solid;
 height: 100vh;
}
.upper-container{
 display: flex;
 align-items: flex-start;
 width: 90%;
}
  
.button-yes {
  cursor: pointer;
  border-radius: 0.375rem;
  background-color: #DC2626;
  color: #fbfbfb;
  position: relative;
  font-size: 20px;
  padding: 13px 24px;
  height: 100%;
  width: 100%;
  margin: 20px;
 font-weight: bolder;
 border: 3px solid #DC2626;
}

.button-yes:hover {
  background-color: #FEE2E2;
  color: #DC2626;
  border: 3px solid #DC2626;
}

 .lower-container{
  width: 10%;
  z-index: 999;
  position: fixed;
  right: 6%;
  width: 300px;
 }
 .lower-container button{
  font-size: 25px;
 }
 .classroom-name{
  font-size: 60px;
  text-align: center;
  font-family:Helvetica, Arial;
  
 }
 .image-container{
  position: fixed;
  top:5%;
  height: 90%;

 }
 .image-container img{
  height:100%;
  width:100%;
  object-fit: cover;
  border-radius:40px;
  
 }
 .detail-container{
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
  align-items: center;
  height: 40px;
  font-size: 25px;
  margin-top:5px;
  position: fixed;
  right:3%;
  top:30%;
 }
 .classroom-status img{
   height: 30px;
   width: 40px;
   margin-top:-20px;
  margin-left:-10px;
 }
}
 


/* Mobile Layout */
@media (max-width: 767px) {

  
 .button-yes {
  cursor: pointer;
  border-radius: 0.375rem;
  background-color: #DC2626;
  color: #fbfbfb;
  position: relative;
  font-size: 20px;
  padding: 13px 24px;
  height: 100%;
  width: 100%;
  margin: 20px;
 font-weight: bolder;
 border: 3px solid #DC2626;
}

.button-yes:hover {
  background-color: #FEE2E2;
  color: #DC2626;
  border: 3px solid #DC2626;
}




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
 .lower-container{
  width:100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  border-radius: 15px;
  margin-top: 20px;
 }


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
  align-items: center;
  column-gap: 20px;
  height: 40px;
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
  font-size: 25px;
  margin-left: 10px;
  font-variant: small-caps;
 }
 .classroom-status{
  margin-right: 10px;
  margin-top: -10px ;
 }
 .classroom-status img{
  width:20px;
  height: 20px;
 }
 .image-container img{
  object-fit: cover;
  height: 100%;
  width: 100%;
 }



 }
</style>





</html>