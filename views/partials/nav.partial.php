<nav>
     <a href="/">
          <div class="navlink <?= urlAre(['/', '/user/edit']) ? "active" : "" ?>" >
               <span><?= file_get_contents('src/svg/house-outline.svg'); ?></span>
               <span>Home</span>
          </div>
     </a>
     <a href="/about">
          <div class="navlink <?= urlIs("/about") ? "active" : "" ?>" >
               <span><?= file_get_contents('src/svg/people-outline.svg'); ?></span>
               <span>About Us</span>
          </div>
     </a>
     <a data-bs-toggle = "collapse" href="#phpProjects" role="button" aria-expanded="false" aria-controls="collapsePHP">
          <div class="navlink dropdown-button <?= urlAre(['/php/calculator', '/php/file', '/php/validation', '/php/read', '/php/cpu']) ? "active" : "" ?>" >
               <span><?= file_get_contents('src/svg/code.svg'); ?></span>
               <span class="dropdown-text">PHP Projects</span>
          </div>
     </a>
          <div class="paddings-60 pe-5">
               <div class="collapse" id="phpProjects">
                    <a class="text-color" href="">
                         <div class="dropdownlink ps-5 <?= urlIs("/about") ? "active" : "" ?>" >
                              <span>Calculator</span>
                         </div>
                    </a>
                    <a class="text-color" href="">
                         <div class="dropdownlink ps-5 <?= urlIs("/about") ? "active" : "" ?>" >
                              <span>File Manager</span>
                         </div>
                    </a>
                    <a class="text-color" href="">
                         <div class="dropdownlink ps-5 <?= urlIs("/about") ? "active" : "" ?>" >
                              <span>Form Validation</span>
                         </div>
                    </a>
                    <a class="text-color" href="">
                         <div class="dropdownlink ps-5 <?= urlIs("/about") ? "active" : "" ?>" >
                              <span>Read File</span>
                         </div>
                    </a>
                    <a class="text-color" href="">
                         <div class="dropdownlink ps-5 <?= urlIs("/about") ? "active" : "" ?>" >
                              <span>CPU Scheduling</span>
                         </div>
                    </a>
               </div>
          </div>
     <a href="">
          <div class="navlink <?= urlIs("/resume") ? "active" : "" ?>" >
               <span><?= file_get_contents('src/svg/people-outline.svg'); ?></span>
               <span>Resume Template</span>
          </div>
     </a>
     <form action="/session" method="post">
          <input type="hidden" name="_method" value="DELETE">
          <button class="logout" name="submit" type="submit" >
               <div class="navlink danger" >
                    <span><?= file_get_contents('src/svg/logout.svg'); ?></span>
                    <span>Logout</span>
               </div>
          </button>
     </form>
</nav>