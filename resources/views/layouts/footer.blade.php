<div class="footer">
  <div class="full_body">
    <div class="footer_left">
        <p>Copyright © 2008 System Netware, All Rights Reserved.</p>
    </div>
    <div class="footer_right">
        <ul>
            <li><a href="">Privacy</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </div>
    </div>{{--full_body --}}  
</div>{{-- footer --}}



</div>{{-- body_background --}}

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> --}}


<script src="{{mix('js/manifest.js')}}"></script>
<script src="{{mix('js/vendor.js')}}"></script>
<script src="{{mix('js/app.js')}}"></script>
<script>
    $(document).ready(function(){
        $('.ipad_menu ul li').on('click',function(){
        $('.ipad_menu ul li').removeClass('active');
        $(this).addClass('active');
});

});
  
</script>
</body>
</html>

