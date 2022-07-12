function angka(evt)
    {
	   var inputan = (evt.which) ? evt.which : event.keyCode;
	   if (inputan > 31 && (inputan <48 || inputan >57))
	   return false;
	   return true;
    }