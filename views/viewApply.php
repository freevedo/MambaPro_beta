<main id="main">
    
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Inner Page</h2>
          <ol>
            <li><a href="home">Home</a></li>
            <li>Apply</li>
            
          </ol>
        </div>
        
        <div class="container" >	
		     <div class="divider"></div>
		     <div class="heading"><h2>Postuler</h2></div>	
		     <div class="row">
		     	<div class="col-lg-10 offset-lg-1">
		     		<form id="contact-form" method="post" action="http://localhost:81/MambaProBeta/MambaPro_beta/apply" role="form" enctype="multipart/form-data">
		     			<div class="row">
		     				<div class="col-md-6">
		     					<label for="firstname">Prenom<span class="blue"> *</span></label>
		     					<input type="text" id="firstname" name="firstname" class="form-control" placeholder="votre prenom" >
                                 <p class="comments"> <span class="help-inline"><?=$nameError?></span> </p>
                                 
		     				</div>
		     				<div class="col-md-6">
		     					<label for="name">Nom<span class="blue"> *</span></label>
		     					<input type="text" id="name" name="name" class="form-control" placeholder="votre nom"  >
                                 <p class="comments"> <span class="help-inline"></span></p>
                                
		     				</div>
		     				<div class="col-md-6">
		     					<label for="email">Email<span class="blue"> *</span></label>
		     					<input type="email" id="email" name="email" class="form-control" placeholder="votre email"  >
                                 <p class="comments"><span class="help-inline"></span></p>
                                 
		     				</div>
		     				<div class="col-md-6">
		     					<label for="phone">Telephone<span class="blue"> *</span></label>
                                 <input type="tel" id="phone" name="phone" class="form-control" placeholder="votre telephone"  >
                                 <p class="comments"><span class="help-inline"></span></P>
                             </div>
                             <div class="col-md-4">
		     					<label for="image">Photo d'identite<span class="blue"> *</span></label>
                                 <input type="file" id="image" name="image" class="form-control" placeholder="Photo d'identite"  >
                                 <p class="comments"><span class="help-inline"></span></P>
                             </div>
                             <div class="col-md-4">
		     					<label for="notes">Releve de note du bac<span class="blue"> *</span> </label>
                                 <input type="file" id="notes" name="notes" class="form-control" placeholder="Releve de notes"  >
                                 <p class="comments"><span class="help-inline"></span></p>	
                             </div>
                             <div class="col-md-4">
		     					<label for="diplom">Attestation/diplome du baccalaureat<span class="blue"> *</span></label>
                                 <input type="file" id="diplom" name="diplom" class="form-control" placeholder="Diplome ou attestation"  >
                                 <p class="comments"><span class="help-inline"></span></p>
                             </div>
                             
		     				<div class="col-md-12">
		     					<label for="content">Message</label>
		     					<textarea id="content" name="content" class="form-control" placeholder="votre message" rows="4" ></textarea>
                                 <p class="comments"></p>
		     				</div>
		     				<div class="col-md-12">
		     					<p class="blue"><strong> *Ces informations sont recquises</strong>  </p>
		     				</div>
		     				<div class="col-md-12">
		     					<input type="submit" class="button1" value="Envoyer">
		     					
		     				</div>
		     			</div>
		     			<p class="thankyou" ></p>
		     		</form>
		     	</div>
		     </div>
	</div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- <section class="inner-page">
      <div class="container">
        <p>
          Example inner page template
        </p>
      </div>
    </section> -->

  </main><!-- End #main -->

 