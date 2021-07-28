//Mousumi Mondal , roll-40
function btnclick() {
    
    let formdata = new FormData();
    let file = document.getElementById("multifile").files;
    
    let size = 0;

    let x = new XMLHttpRequest();
    
    for (let i = 0; i < file.length; i++) {
        size += file[i].size;
        formdata.append(file[i].name, file[i]);
    }

    if (size < 10000000) {
        x.open("POST", "upload.php", true);
        x.send(formdata);
    } else { alert("post data size exceeded"); }

}