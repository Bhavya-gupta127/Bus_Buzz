<header id="header "class="hilo" >
  <!-- <div class="hilo"> -->

    <div class="container d-flex align-items-center">
    <div class="hehe">  
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAAuCAMAAADp/0xsAAAAilBMVEX///8ApODyZjHyYir1+v2Wzu7h8Pr6/f7k8vr2l3yQzO283/TW6/jxWBIAod8dqOGg0u/I5PX2oYn1i2v+9/Wx2vKEx+v97Oj96OLxVADs9vxEseT4r5z84dr729LP6Pd3wurxXR3wRwD0fFZWt+b1knT6zsP5wrT4tqX6yLz0g2D4vKzzc0dnvegZPqETAAADp0lEQVRYhe2WDW/jKBCGhxYwAWJDN5DGac9uL3sfe5f///fuHWynSdMoiTbV6qSOJcYe43kw84JN9GVH9vx9Npt9/2NZ3J8LdrO/bg35e35/fz9/el7BvTwsi/txc8jL3d3dy9PzHO7+YVncty/ISchqPp+vnp5f2c2Wxd28JotntgU9so1ueWvIaI8/vsH+WRT39EmQ3/YlfPOaTJBPLfw5iLF2POtUGkMq8GV2Ux9Z+iRrLceKDxStwsGWu3MQVws5nFlRpylUESnBbTElarSNaJp6S7Sp4dfU10IggqZWE+R1vloVCcPtSziKCaLwhCkQ0TCkEWHsgxtoqySEx40Kj7iKYgihbxoblPVTsiXbghbFTkGa9RskD6mH69LHCaH52gsRdw+b49Is//0d9nASIvoDyDB9a5y1H0KmyKE9soQParIHEZvc8OMDZNsg+ZBznMeLIUeF34esMWiMeYSIsBYssF6EpuSKb5DuZyBGNJsRshEpIUJSrDUqfgryQU2OId0BhKCgEAtkjYrwvITamSGruxCyfF2dljBDqG8ESl4gDktng+WB9yvz9mFN2mMIvVfw+zcpWtpBpBBZWHZXQY4MEDqAoCxFVUVoWG1IDEg6NV0XQpo1m5ogKMsIQSbNQmAIFn/ENAbEosU6j1dBIm9B2H+2ZOsBgs0JL1fVtS/nmKhK1Nghm7p049uibobx1PVFkEoP1lKrzS6EVmveH2WZIIPbaLT38C37oavUHyyTL/tZ8yorNy1bjVpvKUorqUdt+umT11Gsykej3avBqLDLTEGUmboAGXleGslJG2LPacgpSyH4TXR+6x252BsXgNMqme01RUcq47s+bgdICEmqFELFdwKFtvdwViaMxpoo+5jxsaEgw/nUBxDtu0xQp3dVFaqmwk6idpA2dBaQgMx4D2m5YyYl1fnUb+bJyBapMF0yJeMx/x1H8VH3mjxiFKOn5H3qCPd5uiSWvj+f+peYvPaB6nyXN8tFicG9C0NKu3Ov+rEAe8W+qiRJupDlxicVveXfQuvaYOUmQk7WpJC5UxGyh+hUpowO+KVUEsJPKrhWd+cYgARKrcIgc9QYn6Is0xZBqyPhhzXxRNq2d8Hym7B0gyLfQekYAqkqXKDl0DLEUq4YYvkIxsqMxMEEzopOWdqqza1RBaKSTka5Lvms0e8CSMQObypNJlWtJM1HBa1qELHGEecKI5gMVDx01eQ6biK13g6j+ExzqqVrtrD/sf0HizVDpsHKMt4AAAAASUVORK5CYII=" alt="">
    </div>
      <h1 class="logo mr-auto"><a href="./index.php?page=home">OBRS</a></h1>
		

      <nav class="nav-menu d-none d-lg-block naacho" id='top-nav'>
        <ul>
          <li class="nav-home naacho"><a href="./index.php?page=home"><h5>Home</h5></a></li>
           <li class="nav-schedule naacho"><a href="./index.php?page=schedule"><h5>View Bus Schedule</h5></a></li>
			<li class="nav-admin"><a href="./index.php?page=admin"><h5>Admin (Login)</h5></a></li>
             
              
        </ul>
      </nav><!-- .nav-menu -->


    <!-- </div> -->
</div>
  </header>
  <script>
    $(document).ready(function(){
      var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>';
      if(page != ''){
        $('#top-nav li').removeClass('active')
        $('#top-nav li.nav-'+page).addClass('active')
      }
      $('#manage_account').click(function(){
      uni_modal('Manage Account','manage_account.php')
  })
    })

  </script>