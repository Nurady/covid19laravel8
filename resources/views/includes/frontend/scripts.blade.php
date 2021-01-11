<!-- Js Plugins -->
<script src="{{ url ('frontend/js/jquery-3.5.1.min.js') }}"></script>    
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
<script src="{{ url ('frontend/js/bootstrap.js') }}"></script>
<script src="{{ url ('frontend/js/jquery-ui.min.js') }}"></script>
<script src="{{ url ('frontend/js/jquery.countdown.min.js') }}"></script>
<script src="{{ url ('frontend/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ url ('frontend/js/jquery.zoom.min.js') }}"></script>
<script src="{{ url ('frontend/js/jquery.dd.min.js') }}"></script>
<script src="{{ url ('frontend/js/jquery.slicknav.js') }}"></script>
<script src="{{ url ('frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ url ('frontend/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ url ('frontend/js/datatables.min.js') }}"></script>
<script src="{{ url ('frontend/js/main.js') }}"></script>
<script src="{{ url ('frontend/js/aos.js') }}"></script>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

<script>
    AOS.init();
</script>

<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>