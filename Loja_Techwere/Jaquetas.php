<?php 
include_once './include/_dados.php';
include_once './include/_header.php';
include_once './include/_menu.php';
?>
<header>
<link rel="stylesheet" href="style.css">
</header>
 <!-- Produtos-->

 <!--Migalha de pão(Caminho do prduto)-->
 
 <!--Migalha de pão(Caminho do prduto)-->
 <div class="PaginaPJ">
 <div class="containerPJ">
  <div class="grid second-nav">
    <div class="column-xs-12">
      <nav>
        <ol class="breadcrumb-list">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Categorias</a></li>
          <li class="breadcrumb-item"><a href="#">Jaquetas</a></li>
          <li class="breadcrumb-item active">Jaqueta1</li>
        </ol>
      </nav>
    </div>
  </div>
 </div>
 <!--/Migalha de pão(Caminho do prduto)-->
 
 
 <section class="py-5">
<!-- Card e imagem do produto-->
  <div class="containerPJ px-4 px-lg-5 my-5">
      <div class="row gx-4 gx-lg-5 align-items-center">
          <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="Imagens/Jaquetas/JaquetaH1.jpg" alt="..." /></div>
          <div class="col-md-6">
            <!-- Card e imagem do produto-->

              <!-- Nome do produto-->
              <h1 class="display-5 fw-bolder">Jaqueta</h1>
              <!-- /Nome do produto-->
              
              <!-- Nome do produto-->
              <div class="fs-5 mb-5">
                  <span style="color: white;"class="text">R$ 120.00</span>
              </div>
              <!-- Preço do prouto-->

              <!--Descrição do produto-->
              <p style="color: white;" class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p>
              <div class="d-flex">
              <!--/Descrição do produto-->

                  <!--Botão de comprar-->
                  <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                  <button class="btn btn-outline-dark flex-shrink-0" type="button" style="color: white;">
                      <i class="bi-cart-fill me-1"></i>
                      Adicionar ao carrinho
                  </button>
                  <!--Botão de comprar-->

              </div>
          </div>
      </div>
  </div>
</section>

<!-- Itens Relacionados-->
<section class="py-5">
  <div class="containerPJ px-4 px-lg-5 mt-5">
      <h2 style="margin-top: -100px;" class="fw-bolder mb-4">Produtos Relacionados</h2>
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
          <div class="col mb-5">
              <div class="card h-100">
                  <!-- Imagem Do Produto-->
                  <img class="card-img-top" src="ImagensP/Calca1.png" alt="..." />
                  <!-- Imagem Do Produto-->
                  
                  <!-- Detalhes do produto-->
                  <div class="card-body p-4">
                      <div class="text-center">

                          <!-- Nome do produto-->
                          <h5 class="fw-bolder">Jaqueta</h5>
                          <!-- Nome do produto-->

                          <!-- Preço do produto-->
                          R$ 120.00
                          <!-- Preço do produto-->
                      </div>
                  </div>
                  <!-- Detalhes do produto-->

                  <!-- Add ao carrinho-->
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Adicionar ao carrinho</a></div>
                  </div>
                  <!-- Add ao carrinho-->
              </div>
          </div>

          <div class="col mb-5">
              <div class="card h-100">

                  <!-- Faixa de promoção-->
                  <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Promoção!</div>
                  <!-- Faixa de promoção-->


                  <!-- Imagem do produto-->
                  <img class="card-img-top" src="ImagensP/Calca2.png" alt="..." />
                  <!-- Imagem do produto-->

                  <!-- Detalhes do produto-->
                  <div class="card-body p-4">
                      <div class="text-center">

                          <!-- Nome do produto-->
                          <h5 class="fw-bolder">Jaqueta</h5>
                          <!-- Nome do produto--> 

                          <!-- Preço do prduto-->
                          <span class="text-muted text-decoration-line-through">R$ 120.00</span>
                          R$ 90.00
                          <!-- Preço do prduto-->
                      </div>
                  </div>
                  <!-- Detalhes do produto-->

                  <!-- Add ao carrinho-->
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Adiconar ao carrinho</a></div>
                  </div>
                  <!-- Add ao carrinho-->

              </div>
          </div>
          <div class="col mb-5">
              <div class="card h-100">

                  <!-- Faixa de promoção-->
                  <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Promoção!</div>
                  <!-- Faixa de promoção-->

                  <!-- Imagens do produto-->
                  <img class="card-img-top" src="ImagensP/Camiseta1.png" alt="..." />
                  <!-- Imagens do produto-->

                  <!-- Detalhes do produto-->
                  <div class="card-body p-4">
                      <div class="text-center">

                          <!-- Nome do produto-->
                          <h5 class="fw-bolder">Jaqueta</h5>

                          <!-- Preço do produto-->
                          <span class="text-muted text-decoration-line-through">R$ 120.00</span>
                          R$ 90.00
                          <!-- Preço do produto-->
                      </div>
                  </div>
                  <!-- Detalhes do produto-->

                  <!-- Add ao carrinho-->
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Adicionar ao carrinho</a></div>
                  </div>
                  <!-- Add ao carrinho-->
              </div>
          </div>
          
          <div class="col mb-5">
              <div class="card h-100">
                  <!-- Product image-->
                  <img class="card-img-top" src="ImagensP/Camiseta2.png" alt="..." />

                  <!-- Detalhes do produto-->
                  <div class="card-body p-4">
                      <div class="text-center">

                          <!-- Nome do produto-->
                          <h5 class="fw-bolder">Jaqueta</h5>
                          <!-- Nome do produto-->

                          <!-- Preço do produto-->
                          R$ 120.00
                          <!-- Preço do produto-->
                      </div>
                  </div>
                  <!-- Detalhes do produto-->

                  <!-- Add ao carrinho-->
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Adiconar ao carrinho</a></div>
                  </div>
                  <!-- /Add ao carrinho-->
              </div>
          </div>
      </div>
  </div>
</div>
</section>

<!--/Produtos-->


<?php
include_once './include/_footer.php';
?>
