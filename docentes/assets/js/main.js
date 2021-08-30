const form = document.getElementById('login');
form.addEventListener('submit', function (e) {
    e.preventDefault();
    var http = new XMLHttpRequest();
    var url = '././action.php';
    var params = new FormData(form);
    http.open('POST', url, true);
    http.onreadystatechange = function () {
        if (http.readyState == 4 && http.status == 200) {
            let resp = JSON.parse(http.responseText);
            if (resp.response == 'true') {
                setTimeout(function () {
                    window.location.href = "././DocenteVerExamenes.php";
                }, 1000);
            } else {
                alert("Usuario o Contraseña Invalidos");
            }
        }
    }
    http.send(params);
});