<?php $this->setSiteTitle('NavBars'); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
  <a href="index">Back</a>

  <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <nav class="navbar navbar-dark bg-dark">
           <a class="navbar-brand" href="#">Never expand</a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>

           <div class="collapse navbar-collapse" id="navbarsExample01">
             <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                 <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="#">Link</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link disabled" href="#">Disabled</a>
               </li>
               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                 <div class="dropdown-menu" aria-labelledby="dropdown01">
                   <a class="dropdown-item" href="#">Action</a>
                   <a class="dropdown-item" href="#">Another action</a>
                   <a class="dropdown-item" href="#">Something else here</a>
                 </div>
               </li>
             </ul>
             <form class="form-inline my-2 my-md-0">
               <input class="form-control" type="text" placeholder="Search" aria-label="Search">
             </form>
           </div>
         </nav>
       </div>
  </div>

    <div class="row mt-5">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         <nav class="navbar navbar-expand navbar-dark bg-dark">
           <a class="navbar-brand" href="#">Always expand</a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>

           <div class="collapse navbar-collapse" id="navbarsExample02">
             <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                 <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="#">Link</a>
               </li>
             </ul>
             <form class="form-inline my-2 my-md-0">
               <input class="form-control" type="text" placeholder="Search">
             </form>
           </div>
         </nav>
        </div>
      </div>

    <div class="row mt-5">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
           <a class="navbar-brand" href="#">Expand at sm</a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarsExample03">
             <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                 <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="#">Link</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link disabled" href="#">Disabled</a>
               </li>
               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                 <div class="dropdown-menu" aria-labelledby="dropdown03">
                   <a class="dropdown-item" href="#">Action</a>
                   <a class="dropdown-item" href="#">Another action</a>
                   <a class="dropdown-item" href="#">Something else here</a>
                 </div>
               </li>
             </ul>
             <form class="form-inline my-2 my-md-0">
               <input class="form-control" type="text" placeholder="Search">
             </form>
           </div>
         </nav>
        </div>
    </div>

        <div class="row mt-5">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 <nav class="navbar navbar-expand-md navbar-dark bg-dark">
   <a class="navbar-brand" href="#">Expand at md</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarsExample04">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item active">
         <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="#">Link</a>
       </li>
       <li class="nav-item">
         <a class="nav-link disabled" href="#">Disabled</a>
       </li>
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
         <div class="dropdown-menu" aria-labelledby="dropdown04">
           <a class="dropdown-item" href="#">Action</a>
           <a class="dropdown-item" href="#">Another action</a>
           <a class="dropdown-item" href="#">Something else here</a>
         </div>
       </li>
     </ul>
     <form class="form-inline my-2 my-md-0">
       <input class="form-control" type="text" placeholder="Search">
     </form>
   </div>
 </nav>
</div>
</div>

     <div class="row mt-5">
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <a class="navbar-brand" href="#">Expand at lg</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarsExample05">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item active">
         <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="#">Link</a>
       </li>
       <li class="nav-item">
         <a class="nav-link disabled" href="#">Disabled</a>
       </li>
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
         <div class="dropdown-menu" aria-labelledby="dropdown05">
           <a class="dropdown-item" href="#">Action</a>
           <a class="dropdown-item" href="#">Another action</a>
           <a class="dropdown-item" href="#">Something else here</a>
         </div>
       </li>
     </ul>
     <form class="form-inline my-2 my-md-0">
       <input class="form-control" type="text" placeholder="Search">
     </form>
   </div>
 </nav>
</div>
</div>

     <div class="row mt-5">
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
   <a class="navbar-brand" href="#">Expand at xl</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarsExample06">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item active">
         <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="#">Link</a>
       </li>
       <li class="nav-item">
         <a class="nav-link disabled" href="#">Disabled</a>
       </li>
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown06" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
         <div class="dropdown-menu" aria-labelledby="dropdown06">
           <a class="dropdown-item" href="#">Action</a>
           <a class="dropdown-item" href="#">Another action</a>
           <a class="dropdown-item" href="#">Something else here</a>
         </div>
       </li>
     </ul>
     <form class="form-inline my-2 my-md-0">
       <input class="form-control" type="text" placeholder="Search">
     </form>
   </div>
 </nav>
</div>
</div>

     <div class="row mt-5">
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container">
     <a class="navbar-brand" href="#">Container</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarsExample07">
       <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
           <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">Link</a>
         </li>
         <li class="nav-item">
           <a class="nav-link disabled" href="#">Disabled</a>
         </li>
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
           <div class="dropdown-menu" aria-labelledby="dropdown07">
             <a class="dropdown-item" href="#">Action</a>
             <a class="dropdown-item" href="#">Another action</a>
             <a class="dropdown-item" href="#">Something else here</a>
           </div>
         </li>
       </ul>
       <form class="form-inline my-2 my-md-0">
         <input class="form-control" type="text" placeholder="Search" aria-label="Search">
       </form>
     </div>
   </div>
 </nav>
</div>
</div>

     <div class="row mt-5">
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
     <ul class="navbar-nav">
       <li class="nav-item active">
         <a class="nav-link" href="#">Centered nav only <span class="sr-only">(current)</span></a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="#">Link</a>
       </li>
       <li class="nav-item">
         <a class="nav-link disabled" href="#">Disabled</a>
       </li>
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
         <div class="dropdown-menu" aria-labelledby="dropdown08">
           <a class="dropdown-item" href="#">Action</a>
           <a class="dropdown-item" href="#">Another action</a>
           <a class="dropdown-item" href="#">Something else here</a>
         </div>
       </li>
     </ul>
   </div>
 </nav>
</div>
</div>

     <div class="row mt-5">
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 <div class="container">
   <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
     <a class="navbar-brand" href="#">Navbar</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarsExample09">
       <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
           <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">Link</a>
         </li>
         <li class="nav-item">
           <a class="nav-link disabled" href="#">Disabled</a>
         </li>
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
           <div class="dropdown-menu" aria-labelledby="dropdown09">
             <a class="dropdown-item" href="#">Action</a>
             <a class="dropdown-item" href="#">Another action</a>
             <a class="dropdown-item" href="#">Something else here</a>
           </div>
         </li>
       </ul>
       <form class="form-inline my-2 my-md-0">
         <input class="form-control" type="text" placeholder="Search" aria-label="Search">
       </form>
     </div>
   </nav>
  </div>
</div>

       <div class="row mt-5">
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
   <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
       <ul class="navbar-nav">
         <li class="nav-item active">
           <a class="nav-link" href="#">Centered nav only <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">Link</a>
         </li>
         <li class="nav-item">
           <a class="nav-link disabled" href="#">Disabled</a>
         </li>
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
           <div class="dropdown-menu" aria-labelledby="dropdown10">
             <a class="dropdown-item" href="#">Action</a>
             <a class="dropdown-item" href="#">Another action</a>
             <a class="dropdown-item" href="#">Something else here</a>
           </div>
         </li>
       </ul>
     </div>
   </nav>
  </div>
</div>

<?php $this->end(); ?>
<?php $this->start('js-script'); ?>
<?php $this->end(); ?>
<?php $this->start('jquery'); ?>
<?php $this->end(); ?>
