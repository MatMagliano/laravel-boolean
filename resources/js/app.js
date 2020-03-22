require('./bootstrap');
const $ = require('jquery');
const Handlebars = require('handlebars');


$(document).ready(function(){

console.log('ciao');
$('#filter-button').click(function(){
  var age = $('#age').val();
  var role = $('#role').val();
  // var arrayData = [
  //   age,
  //   role,
  // ];
  // creo un oggetto dall' array per poterlo passare nella chiamata
  var data = {
    'age': age,
    'role': role
  };

  for (const key in data) {
    if (data[key].length == 0) {
      delete data[key];
      
    }
  }


  console.log(data);
  $.ajax ({
    'url': 'http://127.0.0.1:8000/api/students/filter',
    'method': 'POST',
    'data': data,
    'success': function(data){
      console.log(data);
      $('.students').html('');
      var source = $("#entry-template").html();
      var template = Handlebars.compile(source);
      for (var i = 0; i < data.length; i++) {
        var element = data[i];
        var html = template(element);
        $('.students').append(html)
      }
      
      
      
    },
    'error': function() {
      console.log('error');
      
    }
  });
  
});



});

function isSet(value) {
  if (value.length > 0) {
    return value;
  }
}