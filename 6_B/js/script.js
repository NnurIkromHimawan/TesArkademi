function tambah_judul(){
  $("a.submenu").click(function(event) {
    var judul=$(this).text();
    if (typeof judul!="APP RASWANGNI") {
      $(".judul_header").html('<h1 class=judul>'+judul+'</h1>');  
    }
    else{
      $(".judul_header").html('<h1 class=judul>'+judul+'</h1>'); 
    }
    
  });
}

function load_data(datamenu){
  $(".content").load("data/?menu="+datamenu,function(){
    load_pencarian_enter_hendler();
    style_table();
    style_button();
  })
}
function style_button(){
  $("input[type=button],input[type=submit]").addClass("pure-button pure-button-primary");
}
function style_table(){
  $("table").addClass('pure-table');
}
function style_form(){
  $("form").addClass('pure-form pure-form-stacked');
}
function buat_element(element){
  $("body").append('<div class="'+element+'"></div>');
}
function close_input(element_dialog,batal){
  if (typeof batal!="undefined") {
    $(batal).click(function(event) {
      $(element_dialog).dialog("destroy");
      hapus_element(element_dialog);
    });
  }
  else {
    $("element").dialog("destroy");
    hapus_element(element);
  }
}
function hapus_element(element){
  $(element).html("");
  $(element).remove();
}
function input_data(judul,lebar,tinggi,menu,iddata,batal){
  buat_element("inputdata");
  var element=$(".inputdata");
  $(element).dialog({
    width:lebar,height:tinggi,title:judul,modal:true,open:function(){
      if (typeof iddata!="undefined") {
        $(this).load("form/?menu="+menu+"&iddata="+iddata,function(){
          // $(".batal").focus();
          style_form();
          style_button();
          close_input(element,batal);
        })
      }
      else {
        $(this).load("form/?menu="+menu,function(){
          style_form();
          style_button();
          close_input(element,batal);
        })
      }
    },close:function(){
      $(this).dialog("destroy");
      hapus_element(element);
    },
    closeOnEscape:false,
  });
}

function load_pencarian(){
 var key_cari = $("input[name=cari]").val();
 var data = $("input[name=menu]").val();
 $(".isi_content").load("data/?menu="+data+"&pencarian="+escape(key_cari),function(){
   style_button();
   style_table();
   load_pencarian_enter_hendler();
   // $("input[name=cari]").focus();
 });
}


function load_pencarian_enter_hendler(){
  $('input[name=cari]').keypress(function (e) {
    if (e.which == 13) {
      load_pencarian();
    }
  });
}