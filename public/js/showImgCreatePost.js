const getImg=e=>{if(e.files&&e.files[0]){var t=new FileReader;t.onload=function(e){document.getElementById("show-img").src=e.target.result},t.readAsDataURL(e.files[0])}};
