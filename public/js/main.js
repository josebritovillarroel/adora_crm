var app = new Vue({
  el : "#app",
  data : {
    ownId : '',
    msgs  : [],
    msg   : ''
  },
  methods : {
    postMessage : function(){
      if(this.msg){
        var data = {
          "text"  : this.msg,
          "user_id" : this.ownId,
          "projectId" : this.projectId
        };
        var here = this;
        axios.post("/intento_crm_jose/public/negociation/postNegociation", data).then(function(response){
          here.msgs.push( data );
          here.msg = "";
        });
      }
    }
  },
  beforeMount(){
    var projectId = $("meta[name=projectid]").attr("value");
    this.ownId = $("meta[name=ownid]").attr("value");

    console.log( this.ownId );

    var here = this;
    axios.get("/intento_crm_jose/public/negociation/getNegociations/" + projectId).then(function(data){
      if( data ){
        here.msgs = data.data;
        console.log( data.data );
      }
    });
  }
});


$(document).ready(function(){
  $("h3.side").click(function(){
    var target = $(this).data('target');
    $( target ).toggle("slow");           
  }); 
  
  $('.deletion-form').submit(function(e){
    if ( ! confirm("Estás seguro que quieres eliminar") ){
      e.preventDefault();
    }
  });
  
  var select=function(dateStr) {
    var d1 = $('#dateStart').datepicker('getDate');
    var d2 = $('#dateEnd').datepicker('getDate');
    var diff = 0;
    if (d1 && d2) {
      diff = Math.floor((d2.getTime() - d1.getTime()) / 86400000); // ms per day
    }
    $('#calculated').val(diff);
  }


  $("#dateStart").datepicker({
    showMonthAfterYear: true,
    numberOfMonths: 2,
    minDate: 0,
    onSelect: function(selected) {
      $("#dateEnd").datepicker("option","minDate", selected)
    }
  });

  $("#dateEnd").datepicker({ 
   showMonthAfterYear: true,
     numberOfMonths: 2,
      onSelect: select,
      function(selected) {
       $("#dateStart").datepicker("option","maxDate", selected)
    }
  });  
  
});