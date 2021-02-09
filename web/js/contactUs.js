"use strict";

if(document.body.contains(document.querySelector("body > main > section > form"))){
  document.querySelector("body > main > section > form").addEventListener("submit", ()=>{
    event.preventDefault();
    let formData = new FormData(event.target);
    let data = {
      fname: formData.get("fname"),
      lname: formData.get("lname"),
      eMail: formData.get("eMail"),
      tel: formData.get("tel"),
      message: formData.get("message")
    }
    fetch('../php/contactUs.php', {
      method: 'POST',
      body: formData
    })
    .then((response) => response.text())
    .then((data) => {
      if(data == "ok"){
        document.querySelector("body > main > section > form > label > span[for=submit]").innerHTML = "Ihre Nachricht wurde gesendet";
      }else if(data == "phpMailErr"){
        document.querySelector("body > main > section > form > label > span[for=submit]").innerHTML = "Etwas ist schief gelaufen";
      }else if(data == "invalidMail"){
        document.querySelector("body > main > section > form > label > span[for=eMail]").style.color = "red";
        document.querySelector("body > main > section > form > label > input[type=eMail]").style.borderColor = "red";
        setTimeout(()=>{
          document.querySelector("body > main > section > form > label > span[for=eMail]").removeAttribute("style");
          document.querySelector("body > main > section > form > label > input[type=eMail]").removeAttribute("style");
        }, 1000);
      }else if(data == "emptyFname"){
        document.querySelector("body > main > section > form > label > span[for=fname]").style.color = "red";
        document.querySelector("body > main > section > form > label > input[for=fname]").style.borderColor = "red";
        setTimeout(()=>{
          document.querySelector("body > main > section > form > label > span[for=fname]").removeAttribute("style");
          document.querySelector("body > main > section > form > label > input[for=fname]").removeAttribute("style");
        }, 1000);
      }else if(data == "emptyLname"){
        document.querySelector("body > main > section > form > label > span[for=lname]").style.color = "red";
        document.querySelector("body > main > section > form > label > input[for=lname]").style.borderColor = "red";
        setTimeout(()=>{
          document.querySelector("body > main > section > form > label > span[for=lname]").removeAttribute("style");
          document.querySelector("body > main > section > form > label > input[for=lname]").removeAttribute("style");
        }, 1000);
      }else if(data == "emptyTel"){
        document.querySelector("body > main > section > form > label > span[for=tel]").style.color = "red";
        document.querySelector("body > main > section > form > label > input[type=tel]").style.borderColor = "red";
        setTimeout(()=>{
          document.querySelector("body > main > section > form > label > span[for=tel]").removeAttribute("style");
          document.querySelector("body > main > section > form > label > input[type=tel]").removeAttribute("style");
        }, 1000);
      }else if(data == "emptyMessage"){
        document.querySelector("body > main > section > form > label > span[for=message]").style.color = "red";
        document.querySelector("body > main > section > form > label > textarea").style.borderColor = "red";
        setTimeout(()=>{
          document.querySelector("body > main > section > form > label > span[for=message]").removeAttribute("style");
          document.querySelector("body > main > section > form > label > textarea").removeAttribute("style");
        }, 1000);
      }else{
        document.querySelector("body > main > section > form > label > span[for=submit]").innerHTML = "Etwas ist schief gelaufen";
      }
    })
    .catch((error) => console.error(error))
  });
}
