<nav class="h-100 position-fixed">
     <a href="/">
          <div class="navlink <?= urlAre(['/', '/user/edit', '/about/edit']) ? "active" : "" ?>">
               <span><?= file_get_contents('src/svg/house-outline.svg'); ?></span>
               <span>Home</span>
          </div>
     </a>
     <a href="/aboutus">
          <div class="navlink <?= urlIs('/aboutus') ? 'active' : '' ?>">
               <span><?= file_get_contents('src/svg/people-outline.svg'); ?></span>
               <span>About Us</span>
          </div>
     </a>
     <a data-bs-toggle="collapse" href="#phpProjects" role="button" aria-expanded="false" aria-controls="collapsePHP">
          <div
               class="navlink dropdown-button <?= urlAre(['/php/calculator', '/calculator/result', '/php/file', '/php/file-manager', '/php/validation', '/php/read', '/php/cpu', ]) ? 'active' : '' ?>">
               <span><?= file_get_contents('src/svg/code.svg'); ?></span>
               <span class="dropdown-text">PHP Projects</span>
          </div>
     </a>
     <div class="paddings-60 pe-5">
          <div class="collapse" id="phpProjects">
               <a class="text-color" href="/php/calculator">
                    <div
                         class="dropdownlink ps-5 <?= urlAre(['/php/calculator', '/calculator/result']) ? 'dropdown-active' : '' ?>">
                         <span>Calculator</span>
                    </div>
               </a>
               <a class="text-color" href="/php/file-manager">
                    <div class="dropdownlink ps-5 <?= urlAre(['/php/file-manager']) ? 'dropdown-active' : '' ?>">
                         <span>File Manager</span>
                    </div>
               </a>
               <a class="text-color" href="">
                    <div class="dropdownlink ps-5 <?= urlIs('/about') ? 'dropdown-active' : '' ?>">
                         <span>Form Validation</span>
                    </div>
               </a>
               <a class="text-color" href="">
                    <div class="dropdownlink ps-5 <?= urlIs('/about') ? 'dropdown-active' : '' ?>">
                         <span>Read File</span>
                    </div>
               </a>
               <a class="text-color" href="">
                    <div class="dropdownlink ps-5 <?= urlIs('/about') ? 'dropdown-active' : '' ?>">
                         <span>CPU Scheduling</span>
                    </div>
               </a>
          </div>
     </div>
     <a href="">
          <div class="navlink <?= urlIs("/resume") ? 'active' : '' ?>">
               <span><?= file_get_contents('src/svg/people-outline.svg'); ?></span>
               <span>Resume Template</span>
          </div>
     </a>
     <form action="/session" method="post">
          <input type="hidden" name="_method" value="DELETE">
          <button class="logout" name="submit" type="submit">
               <div class="navlink danger">
                    <span><?= file_get_contents('src/svg/logout.svg'); ?></span>
                    <span>Logout</span>
               </div>
          </button>
     </form>
</nav>