var app = new Vue({
  el : "#app",
  data : {
    ownId : '',
    projectId : 0,
    msgs  : [],
    msg   : ''
  },
  methods : {
    postMessage : function(){
      if(this.msg){
        var data = {
          "text"  : this.msg,
          "user_id" : this.ownId,
          "project_id" : this.projectId
        };
        var here = this;
        console.log(data);
        axios.post("/intento_crm_jose/public/negociation/postNegociation", data).then(function(response){
          console.log(data);

          here.msgs.push( data );
          here.msg = "";

          console.log(response);
        });
      }
    }
  },
  beforeMount(){
    this.projectId = $("meta[name=projectid]").attr("value");
    this.ownId = $("meta[name=ownid]").attr("value");

    console.log( this.ownId );

    var here = this;
    
    axios.get("/intento_crm_jose/public/negociation/getNegociations/" + here.projectId).then(function(data){
      if( data ){
        here.msgs = data.data;
        
        Echo.private("negociation." + here.ownId + "." + here.projectId )
          .listen("BroadcastNegociation", (e)=>{
            here.msgs.push(e);
          });
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
  
/*  var select=function(dateStr) {
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
  });  */
  
});