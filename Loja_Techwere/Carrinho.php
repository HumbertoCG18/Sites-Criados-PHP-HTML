<?php 
include_once './include/_dados.php';
include_once './include/_header.php';
include_once './include/_menu.php';
?>

<header>
<link rel="stylesheet" href="style.css">
</header>

<!-- Carrinho -->
<div class="CarrinhoP">
<div class="cardP">
  <div class="row">
      <div class="col-md-8 cart">
          <div class="title">
              <div class="row">
                  <div class="col">
                      <h4><b>Carrinho</b></h4>
                  </div>
                  <div class="col align-self-center text-right text-muted">3 itens</div>
              </div>
          </div>
          <div class="row border-top border-bottom">
              <div class="row main align-items-center">
                  <div class="col-2"><img class="img-fluid" src="ImagensP/Jaqueta1.png"></div>
                  <div class="col">
                      <div class="row text-muted">Jaqueta</div>
                      <div class="row">Silentstorm Waterproof</div>
                  </div>
                  <div class="col"> <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a> </div>
                  <div class="col"><R1>R$: 120,00</R1><span class="close" style="margin-left: 5px;">&#10005;</span></div>
              </div>
          </div>
          <div class="row">
              <div class="row main align-items-center">
                  <div class="col-2"><img class="img-fluid" src="ImagensP/Jaqueta2.png"></div>
                  <div class="col">
                      <div class="row text-muted">Jaqueta</div>
                      <div class="row">Whyworks Performance</div>
                  </div>
                  <div class="col"> <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a> </div>
                  <div class="col"><R1>R$: 90,00</R1><span class="close" style="margin-left: 5px;">&#10005;</span></div>
              </div>
          </div>
          <div class="row border-top border-bottom">
              <div class="row main align-items-center">
                  <div class="col-2"><img class="img-fluid" src="ImagensP/Jaqueta3.png"></div>
                  <div class="col">
                      <div class="row text-muted">Jaqueta</div>
                      <div class="row">Winter Hooded</div>
                  </div>
                  <div class="col"> <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a></div>
                  <div class="col"><R1>R$: 220,00</R1><span class="close" style="margin-left: 5px;">&#10005;</span></div>
              </div>
          </div>
          <div class="back-to-shop"><a href="#">&leftarrow;</a><span class="text-muted">Voltar</span></div>
      </div>
      <div class="col-md-4 summary">
          <div>
              <h5><b>Sumário</b></h5>
          </div>
          <hr>
          <div class="row">
              <div class="col" style="margin-left: 1px;">3 Itens</div>
              <div class="col text-right"><R1>Total: R$: 640,00</R1 style="margin-left: 5px;"></div>
          </div>
          <form>
              <p style="margin-top:5px;">Envio:</p> <select>
                  <option class="text-muted">Envio Primário- <R1>R$: 20,00</R1></option>
              </select>
              <p style="margin-top: 20px;">Cógido Promocional:</p> <input id="code" placeholder="Insira o Código">
          </form>
          <div class="containerC"style="margin-left:20px;">
            <div class="center">
              <button class="btn"style="border-radius: 5px;">
                <svg width="182px" height="62px" viewBox="0 0 180 60" class="border">
                  <polyline points="179,1 179,59 1,59 1,1 179,1"/>
                  <polyline points="179,1 179,59 1,59 1,1 179,1"/>
                </svg>
                <span>Finalizar Compra</span>
              </button>
            </div>
          </div>
      </div>
  </div>
</div>
</div>
<!-- /Carrinho -->

<?php
include_once './include/_footer.php';
?>

