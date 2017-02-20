<footer class="footer bg-ct-grey">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
       <div class="row text-center footer-row">
        <strong class="footer-label hidden-xs ">Available on &nbsp&nbsp<span style="font-size: 18px;margin-right: 10px;">|</span>  </strong> 
        <a href="https://play.google.com/store/apps/details?id=net.myanmarlinks.savethelibrary" class="btn btn-circle btn-primary footer-logo w3-ripple">
          <i class="material-icons">android</i>
        </a>
        <a href="https://itunes.apple.com/us/app/save-the-library/id1187610026?ls=1&mt=8" class="btn btn-circle btn-primary footer-logo w3-ripple">
         <i class="fa fa-apple "></i>
       </a>
      </div>
   </div> 
   <div class="col-sm-4">
   <div class="row  text-center footer-row">
        <a href="https://www.facebook.com/savethelibraryinmyanmar/" class="btn btn-circle btn-danger footer-logo w3-ripple">
          <i class="fa fa-facebook" aria-hidden="true">
          </i>
        </a>
        <a href="http://www.twitter.com/phpcrazy" class="btn btn-circle btn-danger footer-logo w3-ripple">
         <i class="fa fa-twitter" aria-hidden="true">
         </i>
       </a> 
     </div>
  </div>
  <div class="col-sm-2 pull-right">
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-link btn-about-us btn-lg" data-toggle="modal" data-target="#myModal"><strong class="footer-label">About us</strong></button>
    <!-- Modal -->
    <div class="modal" id="myModal" role="dialog">
     <div class="modal-dialog">
       <!-- Modal content-->
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title">About Us</h4>
         </div><hr>
         <div class="modal-body">
           <div class="row text-center">
            <img src="{{ asset('images/myanmarlinks_edited.png') }}" class="footerimg img-thumbnail" alt="myanmarlinks"><br>
            <h3><strong>MYANMAR LINKS</strong></h3>
          </div>
          <div class="row text-center">
            <ul style="list-style: none">
             <li><h4><strong>Developers</strong></h4></li>
             <li>Soe Thiha Naung</li>
             <li>Kaung Khant Lynn</li>
             <li>Pyae Hein</li>
             <li>Zay Yar Phone Pai</li>
             <li>Phyo Thiha</li>
             <li>Aye Chan Oo</li>
           </ul>
         </div>
       </div><hr>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </div>
     </div>
     {{-- Modal Content --}}
   </div>
 </div>
 <!-- Modal -->
</div>
</div>
</div>
</footer>