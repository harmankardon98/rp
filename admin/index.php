
<?php 
session_start();
if($_SESSION['sebagai'] !='admin'){
    header("location:../login.php");}
echo "<script>alert('Selamat Datang');</script>";
    ?>

<?php include("template_part/header.php");?>
  <div class="main-content">
<?php include("template_part/menu.php");?>
    <div class="container-fluid mt--9">
    
         <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <h3 class="mb-0">DAFTAR KONTAK</h3>
            </div>
            <div class="card-body">
              <div class="row icon-examples">
                <div class="col-lg-3 col-md-6">
                  <button type="button" class="btn-icon-clipboard" data-clipboard-text="JIHAN 081808774266" title="Copy to clipboard">
                    <div>
                      <i class="ni ni-badge text-green"></i>
                      <span>TUTOR JIHAN <br/>081808774266</span>
                    </div>
                  </button>
                </div>
                <div class="col-lg-3 col-md-6">
                  <button type="button" class="btn-icon-clipboard" data-clipboard-text="TUTOR WIDYA 085742315802" title="Copy to clipboard">
                    <div>
                      <i class="ni ni-badge text-green"></i>
                      <span>TUTOR WIDYA <br/> 085742315802 </span>
                    </div>
                  </button>
                </div>
                <div class="col-lg-3 col-md-6">
                  <button type="button" class="btn-icon-clipboard" data-clipboard-text="ATRAS 087764786005" title="Copy to clipboard">
                    <div>
                      <i class="ni ni-badge text-dark"></i>
                      <span>ATRAS <br/> 087764786005</span>
                    </div>
                  </button>
                </div>
                <div class="col-lg-3 col-md-6">
                  <button type="button" class="btn-icon-clipboard" data-clipboard-text="TUTOR FARIDA 082325459525" title="Copy to clipboard">
                    <div>
                      <i class="ni ni-badge text-green"></i>
                      <span>TUTOR FARIDA <br/> 082325459525</span>
                    </div>
                  </button>
                </div>
                <div class="col-lg-3 col-md-6">
                  <button type="button" class="btn-icon-clipboard" data-clipboard-text="TUTOR MAELA 085727638845" title="Copy to clipboard">
                    <div>
                      <i class="ni ni-badge text-green"></i>
                      <span>TUTOR MAELA <br/> 085727638845 </span>
                    </div>
                  </button>
                </div>
                <div class="col-lg-3 col-md-6">
                  <button type="button" class="btn-icon-clipboard" data-clipboard-text="TUTOR GALIH 085642838878" title="Copy to clipboard">
                    <div>
                      <i class="ni ni-badge text-green"></i>
                      <span>TUTOR GALIH <br/> 085642838878</span>
                    </div>
                  </button>
                </div>
                <div class="col-lg-3 col-md-6">
                  <button type="button" class="btn-icon-clipboard" data-clipboard-text="TUTOR MIDA 085875888831" title="Copy to clipboard">
                    <div>
                      <i class="ni ni-badge text-green"></i>
                      <span>TUTOR MIDA <br/> 085875888831 </span>
                    </div>
                  </button>
                </div>
                <div class="col-lg-3 col-md-6">
                  <button type="button" class="btn-icon-clipboard" data-clipboard-text="TUTOR NELA 085742779880" title="Copy to clipboard">
                    <div>
                      <i class="ni ni-badge text-green"></i>
                      <span>TUTOR NELA <br/> 085742779880</span>
                    </div>
                  </button>
                </div>
                <div class="col-lg-3 col-md-6">
                  <button type="button" class="btn-icon-clipboard" data-clipboard-text="TUTOR ANTI 085741343788" title="Copy to clipboard">
                    <div>
                      <i class="ni ni-badge text-green"></i>
                      <span>TUTOR ANTI <br/> 085741343788</span>
                    </div>
                  </button>
                </div>
                <div class="col-lg-3 col-md-6">
                  <button type="button" class="btn-icon-clipboard" data-clipboard-text="TUTOR SRI 085799233977" title="Copy to clipboard">
                    <div>
                      <i class="ni ni-badge text-green"></i>
                      <span>TUTOR SRI <br/> 085799233977</span>
                    </div>
                  </button>
                </div>
                <div class="col-lg-3 col-md-6">
                  <button type="button" class="btn-icon-clipboard" data-clipboard-text="TUTOR AJENG 085878936990" title="Copy to clipboard">
                    <div>
                      <i class="ni ni-badge text-green"></i>
                      <span>TUTOR AJENG <br/> 085878936990 </span>
                    </div>
                  </button>
                </div>
                <div class="col-lg-3 col-md-6">
                  <button type="button" class="btn-icon-clipboard" data-clipboard-text="TUTOR FATHONI 085866964742" title="Copy to clipboard">
                    <div>
                      <i class="ni ni-badge text-green"></i>
                      <span>TUTOR FATHONI <br/> 085866964742</span>
                    </div>
                  </button>
                </div>

                 <div class="col-lg-3 col-md-6">
                  <button type="button" class="btn-icon-clipboard" data-clipboard-text="STUDENT ARIENTA 082325277721" title="Copy to clipboard">
                    <div>
                      <i class="ni ni-badge text-purple"></i>
                      <span>STUDENT ARIENTA<br/> 082325277721</span>
                    </div>
                  </button>
                </div>
                
                 <div class="col-lg-3 col-md-6">
                  <button type="button" class="btn-icon-clipboard" data-clipboard-text="STUDENT RICHARD 085741600962" title="Copy to clipboard">
                    <div>
                      <i class="ni ni-badge text-purple"></i>
                      <span>STUDENT RICHARD<br/> 085741600962</span>
                    </div>
                  </button>
                </div>

                 <div class="col-lg-3 col-md-6">
                  <button type="button" class="btn-icon-clipboard" data-clipboard-text="STUDENT ALIF 085640462720" title="Copy to clipboard">
                    <div>
                      <i class="ni ni-badge text-purple"></i>
                      <span>STUDENT ALIF<br/> 085640462720</span>
                    </div>
                  </button>
                </div>

                <div class="col-lg-3 col-md-6">
                  <button type="button" class="btn-icon-clipboard" data-clipboard-text="STUDENT FARAH 085866871037" title="Copy to clipboard">
                    <div>
                      <i class="ni ni-badge text-purple"></i>
                      <span>STUDENT FARAH<br/> 085866871037</span>
                    </div>
                  </button>
                </div>

                <div class="col-lg-3 col-md-6">
                  <button type="button" class="btn-icon-clipboard" data-clipboard-text="STUDENT ATTAR 081542270894" title="Copy to clipboard">
                    <div>
                      <i class="ni ni-badge text-purple"></i>
                      <span>STUDENT ATTAR<br/> 081542270894</span>
                    </div>
                  </button>
                </div>

                <div class="col-lg-3 col-md-6">
                  <button type="button" class="btn-icon-clipboard" data-clipboard-text="STUDENT ARYA 081575991186" title="Copy to clipboard">
                    <div>
                      <i class="ni ni-badge text-purple"></i>
                      <span>STUDENT ARYA<br/> 081575991186</span>
                    </div>
                  </button>
                </div>

                
              </div>
            </div>
          </div>
        </div>
      </div>
     
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2019 <a href="#" class="font-weight-bold ml-1" >Smart Brain</a>
            </div>
          </div>
         
        </div>
      </footer>
    </div>
  </div>
 <?php include("template_part/footer.php");?>
