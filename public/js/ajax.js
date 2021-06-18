const   d= document,
        $span = d.createElement("span"),
        $btnedit = d.getElementById("btn-edit"),
        $btncreate = d.getElementById("btn-create");


    const getAll= async (selector) =>{
        $form = d.getElementById(selector);
        d.addEventListener("keyup", async (e)=>{
            try {
                if(e.target === $form.client_id && e.target.value != "")
                {
                  
                    let     res = await fetch(`/api/client/${e.target.value}`),
                    json = await res.json();
                    if(json){
                        for (let i = 0; i < json.length; i++) {
                            $span.textContent = json[i].name;
                            e.target.insertAdjacentElement("afterend",$span)
                         }
                    }
                    if(json.length ===0){

                        e.target.insertAdjacentElement("afterend",$span)
                        $span.textContent = "Ingrese un Usuario Valido";
                        setTimeout(()=>{
                            $span.innerHTML ="";
                            e.target.value="";
                        },5000)
                    }   
                }
                if(e.target.value == "") $span.innerHTML ="";
            } catch (err) {
                console.log(err)
                let message = err.message|| "Ocurrio un error"
                $table.insertAdjacentHTML("afterend",`<p><b>Error ${err} : ${message}</b></p>`)
            }
        });

    }


    d.addEventListener("DOMContentLoaded", (e)=>{ getAll("formcreate");


    })

