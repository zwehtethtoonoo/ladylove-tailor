<style>
  :root {
    --black: rgb(30, 30, 30);

  }
  .nav {
  width: 100%;
  height:90px;
  font-family: "Signika Negative", sans-serif;
  padding: 8px 5px;
  font-size: 1.7rem;
  box-shadow: 1px 1px 2px 2px rgb(172, 174, 179);
  background-color: #2fe552;
  position: sticky;
  z-index: 1;
  top: 0;
  margin-bottom: 20px;
  display:flex;
  justify-content: space-between;
  align-content:flex-start;
}


.link-home {
  float: right;
  list-style: none;
  margin-top: 10px;
  margin-left: 15px;
  margin-right: 50px;
}
.link-home:hover {
  transform: scale(1.3);
}
.logo {
  width: 90px;
  height: 75px;
  border-radius: 10px;
  box-shadow: 1px 1px 5px rgb(172, 174, 179);
  margin-left:24px;
  cursor:pointer;
}
.logo:hover {
  box-shadow: 2px 2px 30px rgb(172, 174, 179);
}
 .link-home > a {
  text-decoration: none;
  padding: 20px 15px;
  color: black;
  text-shadow: 3px 3px 7px rgb(172, 174, 179);
  overflow: hidden;
}
/* .btn-mode{
  top:30%;
  right: 5%;
  display: inline-block;
  position: absolute;
  background-color: var(--black);
  color: whitesmoke;
  font-size:1.2rem;
  padding: 5px 10px 5px 10px;
  font-weight: bold;
  text-align: center;
  cursor: pointer;
  width: 150px;
  height: 40px;
  border:0;
  border-radius:2rem;
} */
.icon-logout{
  width:16px;
  height:16px;
  margin-right:5px;
}
.btn-logout{
  color:white;
  padding: 10px 20px;
  color:black;
  background-color:rgba(247,247,247,1);
  border-radius:1rem;
  font-family:sans-serif;
  font-size:1rem;
  border:1px solid rgba(0,0,0,0.5);
  text-decoration:none;
}
.btn-logout:hover{
  color:black;
  background-color:rgba(240,240,240,1);
}
.btn-logout:visited{
  color:black;
}
.item-2 {
    display:flex;
    align-self: center;
    margin: auto;
    justify-content:flex-start;

}
.item-3 {
    display:flex;
    align-items: center;
    margin: auto;
    justify-content:flex-end;
    margin-right:8%;
}
.dark-theme{
  background-color:var(--black);
}
.white{
  color:white;
}
.b-0{
  border:0;
}
@media screen and (max-width: 770px) {
    nav {
      display:flex;
      justify-content: center;
    }
    nav > img {
      margin-left:0;
    }

  }
  @media screen and (max-width: 520px) {
    .item-2 {
      display:none;
    }
  }

</style>

<!-- Nav -->
    <nav class="nav">
        <div style="flex-grow: 1" class="item-1"><img class="logo" src="images/logo.jpg" onclick="location.href = './index.php';"></div>
        <div style="flex-grow: 1" class="item-2"><li class="ms-5 link-home"><a href="index.php">Home</a></li></div>
        <div style="flex-grow: 8" class="item-3"> <a align="right" href="./logout.php" class="btn-logout"><img src="./images/logout.png" alt="" class="icon-logout">Logout</a></div>

  </nav>
        <!-- <button id="btn" class="btn-mode" onclick="changeMode()">Dark Mode</button> -->

        <!-- script -->
        <!-- <script>
                function changeMode() {
                var body = document.body;
                var app = document.getElementById('app');
                var label = document.getElementById('label');
                // var show = document.getElementById('dtBasicExample_length');
                
                // toggle the theme
                body.classList.toggle("dark-theme");
                app.classList.toggle("dark-theme");
                label.classList.toggle("white");
                // show.classList.toggle("white");
                
                let button = document.getElementById('btn');
                
                // change the button text
                if (button.innerHTML == "Dark Mode") {
                    button.innerHTML = "Normal Mode";
                } else {
                    button.innerHTML = "Dark Mode"
                }
      }
        </script> -->
    
    <!-- end of nav -->