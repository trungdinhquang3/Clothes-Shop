isLoginValid = 0;
isEmailValid = 0;
isPasswordValid = 0;
isPhoneValid = 0;
isAddressValid = 0;
async function checkUserName () {
  loginerrContainer = document.getElementById (
    'userName-register-error-container'
  );
  loginNameContainer = document.getElementById ('username');
  loginName = loginNameContainer.value;
  loginStringLength = loginName.length;
  if (loginStringLength < 4 || loginStringLength > 20) {
    loginerrContainer.style.color = 'red';
    loginerrContainer.innerHTML =
      'Tên đăng nhập phải bao gồm 4-20 ký tự, và chỉ chứa ký tự chữ cái và số';
    isLoginValid = 0;
    return;
  }
    loginRegex = new RegExp ('[a-zA-z0-9]+$');
    if (loginRegex.test (loginName)) {
      loginerrContainer.innerHTML = 'Đang kiểm tra...';
      await $.ajax ({
        url: '../../Controllers/validate-name.php',
        type: 'GET',
        data: {name: loginName},
        dataType: 'text',
        contentType: 'application/json; charset=utf-8',
        success: function (response) {
          isValid = response;
          if (isValid == 0) {
            loginerrContainer.style.color = 'red';
            loginerrContainer.innerHTML =
              'Tên đăng nhập đã tồn tại, vui lòng nhập tên khác';
            isLoginValid = 0;
          } else {
            loginerrContainer.style.color = 'green';
            loginerrContainer.innerHTML = 'Tên đăng nhập được chấp nhận';
            isLoginValid = 1;
          }
        },
      });
    } else {
      loginerrContainer.style.color = 'red';
      loginerrContainer.innerHTML =
        'Tên đăng nhập phải bao gồm 4-20 ký tự, và chỉ chứa ký tự chữ cái và số';
      isLoginValid = 0;
      return;
    }
}

function checkPassword () {
  passwordErrContainer = document.getElementById (
    'password-register-error-container'
  );
  passwordContainer = document.getElementById ('password');
  console.log (passwordContainer);
  password = passwordContainer.value;

  passwordLength = password.length;
  if (passwordLength < 8 || passwordLength > 30) {
    passwordErrContainer.style.color = 'red';
    passwordErrContainer.innerHTML =
      'Mật khẩu phải bảo gồm 8-30 ký tự, bao gồm cả chữ và số, và không chứa ký tự đặc biệt';
    isPasswordValid = 0;
    return;
  }
  passwordRegex = new RegExp ('^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+)$');
  if (!passwordRegex.test (password)) {
    passwordErrContainer.style.color = 'red';
    passwordErrContainer.innerHTML =
      'Mật khẩu phải bảo gồm 8-30 ký tự, bao gồm cả chữ và số, và không chứa ký tự đặc biệt';
    isPasswordValid = 0;
    return;
  } else {
    passwordErrContainer.style.color = 'green';
    passwordErrContainer.innerHTML = 'Mật khẩu được chấp nhận';
    isPasswordValid = 1;
    return;
  }
}

async function checkEmail () {
  emailErrContainer = document.getElementById (
    'email-register-error-container'
  );
  emailNameContainer = document.getElementById ('email');
  emailName = emailNameContainer.value;
  emailRegex = new RegExp (
    "[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?"
  );
  if (emailRegex.test (emailName)) {
    emailErrContainer.innerHTML = 'Đang kiểm tra...';
    await $.ajax ({
      url: '../../Controllers/validate-email.php',
      type: 'GET',
      data: {email: emailName},
      dataType: 'text',
      contentType: 'application/json; charset=utf-8',
      success: function (response) {
        isValid = response;
        if (isValid == 0) {
          emailErrContainer.style.color = 'red';
          emailErrContainer.innerHTML =
            'Email đã tồn tại, vui lòng nhập địa chỉ khác';
          isEmailValid = 0;
        } else {
          emailErrContainer.style.color = 'green';
          emailErrContainer.innerHTML = 'Email được chấp nhận';
          isEmailValid = 1;
        }
      },
    });
  } else {
    emailErrContainer.style.color = 'red';
    emailErrContainer.innerHTML = 'Địa chỉ email không hợp lệ';
    isEmailValid = 0;
    return;
  }
}

function checkPhoneNumber () {
  phoneErrContainer = document.getElementById (
    'phone-register-error-container'
  );
  phoneContainer = document.getElementById ('phone');
  phone = phoneContainer.value;
    console.log(phone);
  phoneRegex = new RegExp ('^[0-9]{10}$');
  if (!phoneRegex.test (phone)) {
    phoneErrContainer.style.color = 'red';
    phoneErrContainer.innerHTML =
      'Số điện thoại không hợp lệ';
    isPhoneValid = 0;
    return;
  } else {
    phoneErrContainer.style.color = 'green';
    phoneErrContainer.innerHTML = 'Số điện thoại hợp lệ';
    isPhoneValid = 1;
    console.log(isPhoneValid);
    return;
  }

}
function checkAddress () {
  addressErrContainer = document.getElementById (
    'address-register-error-container'
  );
  addressContainer = document.getElementById ('address');
  address = addressContainer.value;
  addressLength = address.length;
  if (addressLength < 8 ) {
    addressErrContainer.style.color = 'red';
    addressErrContainer.innerHTML =
      'Địa chỉ phải tối thiểu 8 kí tự';
    isAddressValid = 0;
    return;
  }
  else{
    addressErrContainer.style.color = 'green';
    addressErrContainer.innerHTML = 'Địa chỉ hợp lệ';
    isAddressValid = 1;
    return;
  }
}

function clickMe(){
  window.alert("hello");
}

async function sendRegisterInfo () {
  var validArr = [];
  checkUserName ();
  checkEmail ();
  checkPassword ();
  checkAddress ();
  checkPhoneNumber ();
  validArr.push (isLoginValid);
  validArr.push (isEmailValid);
  validArr.push (isPasswordValid);
  validArr.push (isPhoneValid);
  validArr.push (isAddressValid);
 console.log (isPhoneValid);
    if (validArr.includes(0)) {
      window.alert("Đăng kí thất bại");
      return;
    } else {
      userName = document.getElementById ('username').value;
      email = document.getElementById ('email').value;
      password = document.getElementById ('password').value;
      phone = document.getElementById ('phone').value;
      address = document.getElementById ('address').value;
     
      await $.ajax ({
        type: 'POST',
        url: '../../Controllers/RegisterController.php',
        data: {
            username: userName,
            email: email,
            password: password,
            phone: phone,
            address: address
        },
        cache: false,
      });
      
      window.alert("Đăng kí thành công");
      await $.ajax ({
        type: 'POST',
        url: '../login.php',
        data: {loginName: loginName, password: password},
        cache: false,
      });
    }
}

