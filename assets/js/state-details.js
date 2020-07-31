$(document).ready(function () {

  const state_details = {
    'WestBengal': {
      "name":"West Bengal",
      "map_url":'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/WestBengalDistricts_numbered.svg/400px-WestBengalDistricts_numbered.svg.png',
      "sector_1": 'Information Technology',
      'sector_1_content': "Bengal Silicon Valley Hub: Launched in 2018, it has 200-acre IT Hub in New Town to support growth and development of IT industries.",
      'sector_2':'Leather Industry',
      'sector_2_content':'West Bengal is the 3rd largest producer of finished leather products in India. 26% of the tanneries in India are located in West Bengal.',
      'sector_3':'Textiles',
      'sector_3_content':'Traditionally, handlooms, power looms, hosiery, jute and silk are major segments of West Bengal’s textiles industry. Readymade garment segment has also gained some base in the state.',
      'sector_4':'Agriculture',
      'sector_4_content':'With diverse natural resources and varied agro-climatic conditions, West Bengal offers cultivation of wide range of crops. The state ranks first in paddy and vegetables production in the country.'
    },
    
  }

  const IP_URL = 'https://ipapi.co/json'
  fetch(IP_URL)
    .then(
      function (response) {
        if (response.status !== 200) {
          console.log('Looks like there was a problem. Status Code: ' +
            response.status);
          return;
        }

        // Examine the text in the response
        response.json().then(function (data) {
console.log(data['region'])
          // let response_state = state_details[data['region'].split(" ").join("")]
	let response_state = state_details['WestBengal']
          console.log(response_state)
          $('.state-map-image').html(`<img src="${response_state['map_url']}" class="img-fluid alt="state">`)
          $('#sector-1').html(response_state['sector_1']);
          $('#sector-1-content').html(response_state['sector_1_content']);
          $('#sector-2').html(response_state['sector_2']);
          $('#sector-2-content').html(response_state['sector_2_content']);
          $('#sector-3').html(response_state['sector_3']);
          $('#sector-3-content').html(response_state['sector_3_content']);
          $('#sector-4').html(response_state['sector_4']);
          $('#sector-4-content').html(response_state['sector_4_content']);
        });
      }
    )
    .catch(function (err) {
      console.log('Fetch Error :-S', err);
    });
})