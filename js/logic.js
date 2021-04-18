function signUp() {
    var form = document.getElementsByClassName("userbox")[0];
    var formData = new FormData(form);
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            alert(xhr.responseText);
        }
    }
    xhr.open("POST", "logic.php");
    xhr.send(formData);
}