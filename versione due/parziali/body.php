<div id="app">

    <header class="p-3">
        <i class="fa-brands fa-spotify text-white fa-2x"></i>
    </header>


        

    <div class="container">
        <div class="row p-b-4">
        
        <div class="col-4 g-3" v-for="(elem, index) in arrayDischi" :key="index">
            <div class="card" style="width: 18rem;">
                <img :src="elem.poster" class="card-img-top" :alt="elem.title">
                <div class="card-body">
                    <h5 class="card-title">{{elem.title}}</h5>
                    <p class="card-text">{{elem.genre}}</p>
                </div>
            </div>
        </div>
        </div>
    </div>

</div>