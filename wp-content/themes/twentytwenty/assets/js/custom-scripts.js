//jQuery.getScript("/wp-content/themes/twentytwenty/assets/js/event_script.js");

function check_coupon(){

  const url = "https://api.architeck.net/api/b2s/checkcoupon";

  let myForm = document.getElementById('coupon_form_data');
  let data = new FormData(myForm);

  fetch(url, {
      method: 'post',
      body: data,
  })
  .then(function(response) {
      return response.json();
  })
  .then((myJson) => {
    //console.log(myJson.status);
    document.cookie = "coupon_status=" + myJson.status + "; expires=0; path=/";

    if(myJson.status === "Avaliable"){
      document.cookie = "coupon=" + myJson.code + "; expires=0; path=/";
      location.reload();
    }else
    {
      alert(myJson.Error_Msg);
    }

  })

}

jQuery(document).ready(function(){

  jQuery( "#coupon_form_data" ).submit(function( event ) {

    check_coupon();

    event.preventDefault();
  });

});
