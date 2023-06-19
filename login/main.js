var apiUser = "http://localhost:3000/user";
function signup(event) {
  event.preventDefault();

  var fullname = document.querySelector(".register input[type='fullname']").value;
  var username = document.querySelector(".register input[type='username']").value;
  var email = document.querySelector(".register input[type='email']").value;
  var password = document.querySelector(".register input[type='password']").value;

  var user = {
    fullname: fullname,
    username: username,
    email: email,
    password: password,
  };
  function createUser(data) {
    var option = {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data),
    };

    fetch(apiUser, option).then(function (res) {
      return res.json();
    });
  }

  // var json = JSON.stringify(user);
  // localStorage.setItem(username, json);
  createUser(user);
  alert("Đăng ký thành công");
}



function login() {
  getUser(hanldeLogin)
  
}

function getUser(callback) {
  fetch(apiUser).then(function(res) {
    return res.json().then(callback);
  });
}

function hanldeLogin(data) {
  var email = document.getElementById("login-email").value;
  var password = document.getElementById("login-password").value;
  var isLoggedIn = false;
  for(var i = 0; i < data.length; i++) {
    if(data[i].email == email && data[i].password == password) {
      var username = data[i].username;
      alert("Đăng nhập thành công");
      window.location.href = "/index.html";
      localStorage.setItem("username", username);
      isLoggedIn = true; // gán giá trị true cho biến cờ nếu đăng nhập thành công
      break; // dừng vòng lặp khi đăng nhập thành công
    }
    else if(email.toLowerCase() == "admin@gmail.com" && password == "123"){
      alert("Đăng nhập thành công");
      window.location.href = "/roommanager/roommanager.html";
      localStorage.setItem("username", "admin");
      isLoggedIn = true; // gán giá trị true cho biến cờ nếu đăng nhập thành công
      break;
    }
  }
  if (!isLoggedIn) {
    alert("Đăng nhập thất bại");
  }
}

// var nameuser = document.querySelector('.username');
// nameuser.innerText = `${a}`;



































