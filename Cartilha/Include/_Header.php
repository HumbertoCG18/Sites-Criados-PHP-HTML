<body>
<header>
        <div class="container" id="topnav">
            <input type="checkbox" name="" id="check">
            <div class="nav-btn">
                <div class="nav-links" style="margin-top: 8px;">
                    <ul>
                        <li class="nav-link" style="--i: .6s">
                            <a href="Index.php">Home</a>
                        </li>
                        <li class="nav-link" style="--i: .6s">
                            <a href="Artigo.php?id=1">O Que É Dislexia?</a>
                        </li>
                        <li class="nav-link" style="--i: .6s">
                            <a href="Artigo.php?id=2">O Que É Discalculia?</a>
                        </li>
                        <li class="nav-link" style="--i: .6s">
                            <a href="Artigo.php?id=3">O Que É TDAH?</a>
                        </li>
                        <l class="nav-link" style="--i: .85s">
                            <a href="">Artigos<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        <a href="Noticias.php?not=1">Dislexia</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="Noticias.php?not=2">Discalculia</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="Noticias.php?not=3">TDAH</a>
                                    </li>
                                    </div>
                                      </div>
                                  </div>
                                  <h6 style="margin-top: 27px; margin-right:5px; color: white;">DislexicMode</h6><label class="switch" id="switch">
                                      <input type="checkbox" style="margin-top: 24px;" id="myCheck" onclick="myFunction()"> 
                                      <span class="slider round"></span>
                                      </label>
                            </div>
                      </div>
                </div>
                
            <div class="hamburger-menu-container">
                <div class="hamburger-menu">
                    <div>

                    </div>
                </div>
            </div>
        </div>
    </header>


<style>
.switch {
  position: relative;
  width: 64px;
  height: 34px;
  margin-top: 24px;
}


.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}


.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
