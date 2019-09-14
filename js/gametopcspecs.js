function onSubmit() 
{ 
  var fields = $("input[name='list']").serializeArray(); 
  if (fields.length == 0) 
  { 
    alert('nothing selected'); 
    // cancel submit
    return false;
  } 
  else 
  { 
    alert(fields.length + " items selected"); 
  }
}

// register event on form, not submit button
$('#subscribeForm').submit(onSubmit)