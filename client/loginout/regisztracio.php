<div class="register">
  <form class="form-signin shadow mt-2">
    <div class="w-100 text-center">
    </div>
    <h1 class="h3 mb-3 font-weight-normal">Regisztrálj!</h1>

    <label for="username">Felhasználó név</label>
    <input type="username" id="username" onblur="vrfusername(this)" name="username" class="form-control" placeholder="felhasználó név" required autofocus>

    <label for="passw">Jelszó</label>
    <input type="password" id="password" name="password" class="form-control" placeholder="Jelszó" required>

    <input class="btn btn-lg btn-primary btn-block" onclick="newUser()" type="button" value="Sign up"></button>

  </form>
  <div class="msg"></div>
</div>
<hr>

<script>
  let user = {
    username: false,
    email: false
  }

  function vrfusername(obj) {
    console.log(obj.value)
    verifyuser('../../server/verifyuser.php?username=' + obj.value, rendervryusername);
  }

  function rendervryusername(data) {
    console.log("nr", data)
    /*if (data.nr == 0)
      user.username = true
    else
      user.username = false*/
  }


  function newUser() {
    if (user.username) {
      const myFormData = new FormData(document.querySelector('form'));
      /*for(let obj of myFormData){
        console.log(obj);
      }*/
      let configObj = {
        method: 'POST',
        body: myFormData
      }
      postdata('../../server/register.php', configObj, render)
    }
  }

  function render(data) {
    console.log(data);
    document.querySelector('.msg').innerHTML = data.msg;
    if (data?.id) {
      user.username = false
    }
  }
</script>