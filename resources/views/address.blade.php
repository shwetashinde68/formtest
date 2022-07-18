<!DOCTYPE html>
<html lang="en">
   <head>
      
   </head>
    
    <!-- body start -->
   <body>
      <header>
         <div class="container"> 
            <div class="row">
               <div class="col-lg-12 col-12 text-center">
                  <img src="dist/img/logo.png" alt="">
               </div>
            </div>
         </div>
      </header>

      <section class="bnrsection">
         <!-- <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12 p-0">
                  <img src="dist/img/bnr.jpg" alt="">
               </div>
            </div>
         </div> -->
         <div class="container">
            <div class="row">
               <div class="offset-lg-1 col-lg-10 col-md-12 col-12 text-center">
                  <h1>Hi <span> {{Auth::user()->name}}</span>
               </div>
               <div class="offset-lg-2 col-lg-8 offset-md-1 col-md-10 col-12 text-center">
                  <div class="formpart">
                     <form  method="post" action="{{url('address')}}">
                        <div id="slide03" style="display: block;">
                           <h3>Do you have a Previous Address?</h3>
                           <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label next02" for="flexRadioDefault1">
                              Yes
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label tothank" for="flexRadioDefault2">
                              No
                            </label>
                          </div>
                        </div>
                        
                        
                        
                        
                        <div id="slide04" style="display:none;">
                           <h3>Enter your Previous Address</h3>
                            <div class="mb-3 text-start">
                                <label class="form-label">Previous Address 1</label>
                                <input type="text" class="form-control mb-3" id="addr1" placeholder="Address line 1">
                                <input type="text" class="form-control mb-3" id="addr2" placeholder="Address line 2">
                                <input type="text" class="form-control mb-3" id="addr3" placeholder="Address line 3">
                            </div>
                           
                            <div class="mb-3 text-center" id="submitoradd01">
                                <button type="button" class="btn btn-success tothank">Submit</button>
                                <p><a href="#postaddrs2" id="showadrs2">Add Another Address</a></p>
                                <p><a href="#postaddrs2" id="back02"><< Back</a></p>
                            </div> 


                            <div id="postaddrs2" style="display:none">
                                <div class="mb-3 text-start">
                                    <label for="" class="form-label">Previous Address 2</label>
                                    <input type="text" class="form-control mb-3" id="" placeholder="Address line 1">
                                    <input type="text" class="form-control mb-3" id="" placeholder="Address line 2">
                                    <input type="text" class="form-control mb-3" id="" placeholder="Address line 3">
                                </div>
                            
                                <div class="mb-3 text-center" id="submitoradd02">
                                    <button type="button" class="btn btn-success tothank">Submit</button>
                                    <p><a href="#postaddrs3" id="showadrs3">Add Another Address</a></p>
                                    <p><a href="#slide04" id="remove3">Remove Address</a></p>
                                </div> 
                            </div>


                            <div id="postaddrs3" style="display:none">
                                <div class="mb-3 text-start">
                                    <label for="" class="form-label">Previous Address 3</label>
                                    <input type="text" class="form-control mb-3" id="" placeholder="Address line 1">
                                    <input type="text" class="form-control mb-3" id="" placeholder="Address line 2">
                                    <input type="text" class="form-control mb-3" id="" placeholder="Address line 3">
                                </div>
    
                                <div class="mb-3 text-center">
                                    <button type="button" class="btn btn-success tothank">Submit</button>
                                    <p><a href="#slide04" id="remove4">Remove Address</a></p>
                                </div> 
                            </div>


                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <script src="dist/js/app.js"></script>
   </body>
    <!--body end -->
    
</html>