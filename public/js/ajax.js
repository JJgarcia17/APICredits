const   d= document;

const   $table = d.querySelector(".crud_table"),
        $form  = d.querySelector(".crud_form"),
        $title = d.querySelector(".crud_title"),
        $tamplate = d.getElementById("crud_template").content,
        $fragment = d.createDocumentFragment(),
        $links = d.querySelector(".links"),
        $loader = d.querySelector(".loader");

let APICredits="http://apicredits.me/api/credits"

const getAll= async (url) =>{
    try {
        $loader.innerHTML = `<img src="./image/grid.svg" alt="Cargando....">`;

        let     res = await fetch(url),
                json = await res.json(),
                $prevLink,
                $nextLink;

                console.log(json)
            for(let i=0; i< json.data.length; i++)
            {
                console.log(json.data[i])
                $tamplate.querySelector(".id").textContent = json.data[i].id;
                $tamplate.querySelector(".client_id").textContent = json.data[i].client_id;
                $tamplate.querySelector(".date").textContent = json.data[i].date;
                $tamplate.querySelector(".description").textContent = json.data[i].description;
                $tamplate.querySelector(".amount").textContent = json.data[i].amount;
    
                $tamplate.querySelector(".edit").dataset.id = json.data[i].date;
                $tamplate.querySelector(".edit").dataset.name = json.data[i].description;
                $tamplate.querySelector(".edit").dataset.name = json.data[i].amount;
    
                $tamplate.querySelector(".read").dataset.id = json.data[i].date;
                $tamplate.querySelector(".read").dataset.name = json.data[i].description;
                $tamplate.querySelector(".read").dataset.name = json.data[i].amount;
    
                $tamplate.querySelector(".delete").dataset.id = json.data[i].id;
    
                let $clone = d.importNode($tamplate,true);
                $fragment.appendChild($clone)
            }

            $table.querySelector("tbody").appendChild($fragment);
            $loader.classList.add("d-none");
      
        $prevLink = json.prev_page_url ? `<a href="${json.prev_page_url}">⏮️</a>`:"";
        $nextLink = json.next_page_url ? `<a href="${json.next_page_url}">⏭️</a>`:"";
        $links.innerHTML = $prevLink + " " + $nextLink;

    } catch (err) {
        let message = err.statusText || "Ocurrio un error"
        $table.insertAdjacentHTML("afterend",`<p><b>Error ${err} : ${message}</b></p>`)
    }
}

d.addEventListener("DOMContentLoaded",e => getAll(APICredits));


d.addEventListener("click", (e)=> {
    if(e.target.matches(".links a")){
        e.preventDefault();
        $table.querySelector("tbody").innerHTML ="";
        getAll(e.target.getAttribute("href"));
    }
});