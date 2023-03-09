<div class="login"> 
     <form class="form-signin shadow mt-2">
      <div class="w-100 text-center">
          </div>
  <h1 class="h3 mb-3 font-weight-normal">Jelentkezz be!</h1>
  <label for="username">Felhasználó név</label>
  <input type="username" id="username" name="username" class="form-control" placeholder="Felhasználó név" required autofocus>
  <label for="passw">Jelszó</label>
  <input type="password" name="password" class="form-control" placeholder="Jelszó" required>
  <input class="btn btn-lg btn-primary btn-block" type="button" onclick="loginuser()" value="Bejelentkezés">

</form>
</div>
<hr>
<script>
  function loginuser(){
      const myFormData = new FormData(document.querySelector('form'));
    let configObj={
      method: 'POST',
      body: myFormData
    }
    postdata('../server/bejelentkezes.php',configObj,render)
  }

  function render(data){
    console.log(data)
    if(data.msg=='ok')
    location.href='./index.php'
  }
</script>