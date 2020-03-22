  
  <div class="footer">
    <div class="wrapper70">
      <div class="top-footer">
        <div class="footer-img">
          <img src="https://www.boolean.careers/images/common/logo-white.png" alt="">
          <p>Sede Operativa</p>
          <p>Via Caeducci 12 - 20123 Milano</p>
          <p>Tel: 02-36599712</p>
        </div>
        <div class="footer-list">
          <ul>
            <li><a href="">Lezione gratuita</a></li>
            <li><a href="{{route('static_page.faq')}}">Domande frequenti</a></li>
            <li><a href="">Per le aziende</a></li>
            <li><a class="{{(Request::route()->getname() == 'static_page.privacy') ? 'active' : ''}}" href="{{route('static_page.privacy')}}">Privacy policy</a></li>
            <li><a href="">Lavora con noi</a></li>
          </ul>
        </div>
      </div>   
      <div class="bottom-footer">
      <i class="fab fa-instagram"></i>
      <i class="fab fa-facebook-f"></i>
      <i class="fab fa-linkedin-in"></i>
      <i class="fab fa-youtube"></i>
      <p>Boolean SRL - Piazzale Giovanni dalle Bande Nere, 9 - 20146, Milano - P.IVA: 10214930967</p>
      </div>
    </div>
  </div>
  
  </div>
  <script id="entry-template" type="text/x-handlebars-template">
    <div class="student" style="margin: 10px auto">
      <div class="img">
        <img src="@{{img}}" alt="">
        <div class="img-text">
          <a href=""><h3>@{{name}} (@{{age}} anni)</h3></a>
          <h4>Lavora da @{{company}} come @{{role}}</h4>
        </div>
      </div>
      <p>@{{description}}</p>
      <i class="fab fa-linkedin"></i>
    </div>
  </script>
  <script src="{{asset('js/app.js')}}"></script>   
</body>
</html>