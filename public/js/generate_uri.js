function event_generate_uri(){let e=document.getElementById("btn-generate-uri"),t=document.getElementById("btn-verify-uri");e.addEventListener("click",generate_uri),t.addEventListener("click",verify_uri)}function generate_uri(){let e=document.getElementById("title-input").value,t=document.getElementById("input-uri");e=clean_uri(e),t.value=e}async function verify_uri(){let e=document.getElementById("input-uri"),t=clean_uri(e.value),n=document.getElementById("response-input");e.value=t;let i=new FormData;i.append("url",t);let r={method:"POST",body:i},u=await fetch("../core/verify-url.php",r);let l=await u.text();n.innerHTML=l}function clean_uri(e){let t=e.normalize("NFD").replace(/[\u0300-\u036f]/g,"").toLowerCase();return t=(t=t.split(" ").join("-")).replace(/[^a-zA-Z0-9-]/g,"")}event_generate_uri();
