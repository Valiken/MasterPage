<div class="navbar navbar-inverse navbar-fixed-top">
          <div class="navbar-inner">
            <div class="container">
              <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="brand" href="index.php">Brian Berg</a>
              <div class="nav-collapse collapse">
                <ul class="nav" id="nav">
                  <li class="<?php if($page=='home'){echo 'active';}?>"><a href="index.php" 
                        alt="index"
                        onclick="loadContent('index_content.php');">Home</a></li>
                  <li class="dropdown"><a href="#" 
                                          class="dropdown-toggle" 
                                          data-toggle="dropdown">My Work <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="<?php if($page=='school'){echo 'active';}?>"><a href="schoolWork.php"
                              alt="School Work"
                              onclick="loadContent('school_content.php');">School work</a></li>
                        <li class="<?php if($page=='other'){echo 'active';}?>"><a href="otherWork.php"
                              alt="Other Work"
                              onclick="loadContent('otherWork_content.php');">Other work</a></li>
                    </ul>
                  </li> 
                  <li class="<?php if($page=='resume'){echo 'active';}?>"><a href="resume.php"
                        alt="Resume"
                        onclick="loadContent('resume_content.php');">Resume </a></li>    
                  <li class="<?php if($page=='about'){echo 'active';}?>"><a href="about.php"
                        alt="About Me"
                        onclick="loadContent('about_content.php');">About</a></li>
                  <li><a href="#myModal" 
                        role="button"
                        data-toggle="modal">Contact</a></li>
                </ul>
              </div><!--/.nav-collapse -->
            </div>
          </div>
        </div>