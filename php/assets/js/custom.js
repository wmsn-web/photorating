$(document).ready(function(){
               	$(".filters").hide();
                    $("#chngp").hide();
                    $("mset").hide();
                    $("#mSeting").css("color","#D85D72");
                    $("#chPsBtn").attr("disabled","disabled");
               	$("#tgl").click(function(){
               		$("#sidebar-wrapper2").attr("id","sidebar-wrapper");
               	});
               	$(".clsBtn").click(function(){
               		$("#sidebar-wrapper").attr("id","sidebar-wrapper2");
               	});
               	$(".fltr").click(function(){
               		$(".filters").show();
               	});
               	
               	$("#rt1").click(function(){
               		$("#prof-sidebar-wrapper2").attr("id","prof-sidebar-wrapper");
               	});
               	$(".clsBtn").click(function(){
               		$("#prof-sidebar-wrapper").attr("id","prof-sidebar-wrapper2");
               	});

                    $("#mSeting").click(function(){
                         $("#mSeting").css("color","#D85D72");
                         $("#chngPass").css("color","#707070");
                         $("#chngp").hide();
                         $("#mset").show();

                    });
                    $("#chngPass").click(function(){
                         $("#mSeting").css("color","#707070");
                         $("#chngPass").css("color","#D85D72");
                         $("#chngp").show();
                         $("#mset").hide();

                    });

                    $("#mSeting1").click(function(){
                         $("#mSeting1").addClass("activeUl")
                         $("#chngPass1").removeClass("activeUl")
                         $("#chngp").hide();
                         $("#mset").show();

                    });
                    $("#chngPass1").click(function(){
                         $("#mSeting1").removeClass("activeUl")
                         $("#chngPass1").addClass("activeUl")
                         $("#chngp").show();
                         $("#mset").hide();

                    });
$("#email").focus();
               });

$("#email").blur(function(){
     var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
     var eml = $("#email").val();
     if(!eml.match(reg) || eml==""){
          $("#spn").html('<i class="fa fa-close text-danger"></i>');
          $("#email").addClass("danger");
     }else{
          
          $("#spn").html('<i class="fa fa-check-circle text-success"></i>');
          $("#email").removeClass("danger");
     }
     $("#pass").blur(function(){
          var pas = $("#pass").val();
          if(pas==""){
               $("#spn2").html('<i class="fa fa-close text-danger"></i>');
          $("#pass").addClass("danger");
          }else{
               $("#spn2").html('<i class="fa fa-check-circle text-success"></i>');
          $("#pass").removeClass("danger");
          }
     });
     $("#conpass").blur(function(){
          var pas = $("#pass").val();
          var cpas = $("#conpass").val();
          if(cpas==""){
               $("#spn3").html('<i class="fa fa-close text-danger"></i>');
          $("#conpass").addClass("danger");
          }else{
               $("#spn3").html('<i class="fa fa-check-circle text-success"></i>');
          $("#conpass").removeClass("danger");
          }
     });
});

$("#cPss").keyup(function(){
     var pss = $("#pss").val();
     var cPss = $("#cPss").val();
     if(cPss==pss){
          $("#vldMsg").html("Password Matched <i class='fa fa-check-circle'></i>");
          $("#vldMsg").removeClass("text-danger");
          $("#vldMsg").addClass("text-success");
          $("#chPsBtn").removeAttr("disabled","disabled");
     }else{
         $("#vldMsg").html("Password does not Matched <i class='fa fa-close'></i>");
          $("#vldMsg").removeClass("text-success");
          $("#vldMsg").addClass("text-danger");
          $("#chPsBtn").attr("disabled","disabled"); 
     }
});

$("#uplLbl").change(function(){
     var upl = $("#uplLbl").val();
     $("#ddd").html("<i class='fa fa-check-circle fa-2x text-success'></i>");
     $("#uupl").hide();
     $("#uplBtn").css("display","block")
});

