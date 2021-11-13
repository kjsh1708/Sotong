app.component("squid-menu", {
    data(){
        return {
            my_href: location.href,
            menu: [
                {
                  href: "Train.html",
                    text: "Training",
                },
                {
                  href: "inspiration.html",
                  text: "Inspiration",
                },
                {
                  href: "news.html",
                  text: "Sotong News",
              },
              {
                href: "Results.html",
                text: "Leaderboard",
            },
            ],
        };
    },
    template: `
    <nav class="navbar navbar-light bg-light fixed-top navbar-expand-lg"> 
    <div class="container-fluid"> 
      <a class="navbar-brand" href="homepage.html"><img src="https://fontmeme.com/permalink/211101/3c011b72ef8151e9209720f80dd3af6f.png" alt="squid-game-font" border="0"></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"> 
        <span class="navbar-toggler-icon"></span> 
      </button> 
      
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel"> 
        <div class="offcanvas-header"> 
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Sotong Game</h5> 
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button> 
        </div> 

        <div class="offcanvas-body"> 
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3"> 
        
            <li class="nav-item" v-for="item in menu">
            <a class="nav-link" aria-current="page" :href='item.href'>
            {{item.text}} <span style="color:pink;">|</span></a></li>

          </ul> 
        </div> 
        
      </div> 
    </div> 
  </nav>`,

});

