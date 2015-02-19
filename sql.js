<form>
  <input type="text" name="a" value="1" id="a" />
  <textarea name="b" rows="8" cols="40">2</textarea>
</form>
 
<script>
  var s = $('form').serializeArray();
</script>