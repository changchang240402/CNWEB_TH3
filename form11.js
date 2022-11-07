const usernameEle = document.getElementById('username');
const passwordEle = document.getElementById('password');

const btnOk = document.querySelector('#btn-ok');
const btnReset = document.querySelector('#btn-reset');
const inputEles = document.querySelectorAll('.input-row');

btnOk.addEventListener('click', function () {
    Array.from(inputEles).map((ele) =>
        ele.classList.remove('success', 'error')
    );
    let isValid = checkValidate();

    if (isValid) {
        alert('Gửi đăng ký thành công');
    }
});

btnReset.addEventListener('click', removeValidate);

function checkValidate() {
    let usernameValue = usernameEle.value;
    let passwordValue = passwordEle.value;

    let isCheck = true;

    if (usernameValue == '') {
        setError(usernameEle, 'Tên không được để trống');
        isCheck = false;
    } else {
        setSuccess(usernameEle);
    }

    if (passwordValue == '') {
        setError(passwordEle, 'Password không được để trống');
        isCheck = false;
    } else {
        setSuccess(passwordEle);
    }

    return isCheck;
}

function setSuccess(ele) {
    ele.parentNode.classList.add('success');
}

function setError(ele, message) {
    let parentEle = ele.parentNode;
    parentEle.classList.add('error');
    parentEle.querySelector('small').innerText = message;
}

function removeValidate() {
    document.getElementById('username').value = '';
    document.getElementById('password').value = '';
}