	
	</main>
	
	<script>
	
	
	  function increaseValue() {
	    var value = parseInt(document.getElementById('number').value, 10);
	    value = isNaN(value) ? 0 : value;
	    value++;
	    document.getElementById('number').value = value;
	    $('#decrease').addClass('activo');
	  }

	  function decreaseValue() {
	    var value = parseInt(document.getElementById('number').value, 10);
	    value = isNaN(value) ? 0 : value;
	    value < 1 ? value = 1 : '';
	    value--;
	    document.getElementById('number').value = value;
	  } 
	  function increaseValue1() {
	    var value = parseInt(document.getElementById('number1').value, 10);
	    value = isNaN(value) ? 0 : value;
	    value++;
	    document.getElementById('number1').value = value;
	    $('#decrease1').addClass('activo');
	  }

	  function decreaseValue1() {
	    var value = parseInt(document.getElementById('number1').value, 10);
	    value = isNaN(value) ? 0 : value;
	    value < 1 ? value = 1 : '';
	    value--;
	    document.getElementById('number1').value = value;
	  } 
	  function increaseValue2() {
	    var value = parseInt(document.getElementById('number2').value, 10);
	    value = isNaN(value) ? 0 : value;
	    value++;
	    document.getElementById('number2').value = value;
	    $('#decrease2').addClass('activo');
	  }

	  function decreaseValue2() {
	    var value = parseInt(document.getElementById('number2').value, 10);
	    value = isNaN(value) ? 0 : value;
	    value < 1 ? value = 1 : '';
	    value--;
	    document.getElementById('number2').value = value;
	  } 
	  function increaseValue3() {
	    var value = parseInt(document.getElementById('number3').value, 10);
	    value = isNaN(value) ? 0 : value;
	    value++;
	    document.getElementById('number3').value = value;
	    $('#decrease3').addClass('activo');
	  }

	  function decreaseValue3() {
	    var value = parseInt(document.getElementById('number3').value, 10);
	    value = isNaN(value) ? 0 : value;
	    value < 1 ? value = 1 : '';
	    value--;
	    document.getElementById('number3').value = value;
	  } 
	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" integrity="sha512-DUC8yqWf7ez3JD1jszxCWSVB0DMP78eOyBpMa5aJki1bIRARykviOuImIczkxlj1KhVSyS16w2FSQetkD4UU2w==" crossorigin="anonymous"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-2.2.4.min.js"><\/script>');</script>

	<?php
		Plugins::cargar();
		$main_js = $minified->merge(BASE_PATH.'js/main.min.js', 'js', array(BASE_PATH.'js/main.js'));
		echo '<script src="'.str_replace(BASE_PATH, '', $main_js).'?v='.filemtime($main_js) .'"></script>'. PHP_EOL;
   ?>
</body>
</html>