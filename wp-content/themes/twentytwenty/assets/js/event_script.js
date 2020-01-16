function get_event(){

  const url = "https://api.architeck.net/api/b2s/getevent";

  let myForm = document.getElementById('form_data');
  let formData = new FormData();

  formData.append('code', getCookie('coupon'));

  fetch(url, {
      method: 'post',
      body: formData,
  })
  .then(function(response) {
      return response.json();
  })
  .then((myJson) => {

    if(myJson.status != "Error"){
      /*document.cookie = "coupon=" + myJson.code + "; expires=0; path=/";
      location.reload();*/
      console.log(myJson);
      document.getElementById("all_event").innerHTML = "Paragraph changed!";
    }else{

    }

  })

}

function getCookie(name) {
    var v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
    return v ? v[2] : null;
}

function render_html(){

}
