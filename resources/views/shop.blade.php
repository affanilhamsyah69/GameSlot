<body>

    @include("navbarpage")

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="h2 pb-4">Categories</h1>
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        <a style="color: black" class="collapsed d-flex justify-content-between h3 text-decoration-none">
                            FPS
                        </a>
                    </li>
                    <li class="pb-3">
                        <a style="color: black" class="collapsed d-flex justify-content-between h3 text-decoration-none">
                            RPG
                        </a>
                    </li>
                    <li class="pb-3">
                        <a style="color: black" class="collapsed d-flex justify-content-between h3 text-decoration-none">
                            Sandbox
                        </a>
                    </li>
                </ul>
            </div>
            @include("product")
        </div>
    </div>

    <section class="bg-light py-5">
        <div class="container my-4">
            <div class="row text-center py-3">
                <div class="col-lg-9 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">
                     <h1><b><strong>THE BEST CHOICE TO BUY A GAME</strong></b></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('footer')