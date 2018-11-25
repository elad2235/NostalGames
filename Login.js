function check(form)
{
  var xhr = new XMLHttpRequest();
  xhr.open("GET","DataBase.txt",true);

  xhr.onreadystatechange = function()
  {
    if(xhr.readyState === 4)
    {
        alert(xhr.responseText);
    }
  }

  xhr.send(null);


}
