 function showResult(str) {
      if (str.length==0) {
        document.getElementById("result").innerHTML="";
        document.getElementById("result").style.border="0px";
        return;
        }

        let live = document.getElementById('userName').value;
        let user = document.getElementById('type').value;

        const http = new XMLHttpRequest();
        http.open('POST', `../Controller/SearchUsersCheck.php`, true);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send(`live=${live}&user=${user}`);
        console.log('submited');
        http.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){
                document.getElementById('result').innerHTML = this.responseText;
                console.log(this.responseText);
            }
        }
    }