let form = document.querySelector('form');
let getNameInput = '';
let contWrap = document.querySelector('#wrap-content');



form.addEventListener('change', (e) => {
    let url = "http://example-fetch/response.php";
    e.preventDefault();
    // console.log(form.elements);
    Array.from(form.elements).forEach(element => {
        // console.log(element.checked);
        if(element.checked){
            getNameInput = element.value;
            url += "?model=" + getNameInput;
        }
    });
    // console.log(getNameInput);
    getModel(url);

});



async function getModel(url) {
   let response = await fetch(url);
   let data = await response.json();
//    console.log(data);
    contWrap.textContent = "";
    data.forEach(function (data) {

        renderContent(data);
    });
}

function renderContent(item) {
    let product = `
    <div class="col-md-4">
        <div class="card">
            <div class="card-img">
                <img src="img/${item.picture}" alt="HINO">
            </div>
            <div class="card-desc">
                <p>${item.title}</p>
            </div>
        </div>
    </div>
    `;
    console.log(item.picture);
    contWrap.insertAdjacentHTML("beforeend", product);
}