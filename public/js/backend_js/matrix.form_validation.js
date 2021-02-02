//
// $(document).ready(function(){
//
// 	$("#current_pwd").keyup(function(){
// 		var current_pwd = $("#current_pwd").val();
// 		$.ajax({
// 			type:'get',
// 			url:'/admin/check-pwd',
// 			data:{current_pwd:current_pwd},
// 			success:function(resp){
// 				//alert(resp);
// 				if(resp=="false"){
// 					$("#chkPwd").html("<font color='red'>Current Password is Incorrect</font>");
// 				}else if(resp=="true"){
// 					$("#chkPwd").html("<font color='green'>Current Password is Correct</font>");
// 				}
// 			},error:function(){
// 				alert("Error");
// 			}
// 		});
// 	});
//
//
// 	// $('input[type=checkbox],input[type=radio],input[type=file]').uniform();
// 	//
// 	// $('select').select2();
//
// 	// Form Validation
// 	$("#basic_validate").validate({
// 		rules:{
// 			required:{
// 				required:true
// 			},
// 			email:{
// 				required:true,
// 				email: true
// 			},
// 			date:{
// 				required:true,
// 				date: true
// 			},
// 			url:{
// 				required:true,
// 				url: true
// 			}
// 		},
// 		errorClass: "help-inline",
// 		errorElement: "span",
// 		highlight:function(element, errorClass, validClass) {
// 			$(element).parents('.control-group').addClass('error');
// 		},
// 		unhighlight: function(element, errorClass, validClass) {
// 			$(element).parents('.control-group').removeClass('error');
// 			$(element).parents('.control-group').addClass('success');
// 		}
// 	});
//
// 	// Create Lrahos Validation
// 	$("#create_lrahos").validate({
// 		rules:{
// 			title_hy:{
// 				required:true,
// 				minlength: 2,
// 				maxlength: 150
// 			},
// 			title_ru:{
// 				required:true,
// 				minlength: 2,
// 				maxlength: 150
// 			},
// 			title_en:{
// 				required:true,
// 				minlength: 2,
// 				maxlength: 150
// 			},
// 			news_hy:{
// 				required:true,
// 			//	minlength: 100
// 			},
// 			news_ru:{
// 				required:true,
// 				//minlength: 100
// 			},
// 			news_en:{
// 				required:true,
// 				//minlength: 100
// 			},
//             link:{
//                 // required:true,
//                 url: true
//             },
// 			images:{
// 				required:true,
//                 accept:".jpg, .jpeg, .png"
// 			}
// 		},
// 		errorClass: "help-inline",
// 		errorElement: "span",
// 		highlight:function(element, errorClass, validClass) {
// 			$(element).parents('.control-group').addClass('error');
// 		},
// 		unhighlight: function(element, errorClass, validClass) {
// 			$(element).parents('.control-group').removeClass('error');
// 			$(element).parents('.control-group').addClass('success');
// 		}
// 	});
//
// 	$("#edit_lrahos").validate({
// 		rules:{
// 			title_hy:{
// 				required:true,
// 				minlength: 2,
// 				maxlength: 500
// 			},
// 			title_ru:{
// 				required:true,
// 				minlength: 2,
// 				maxlength: 500
// 			},
// 			title_en:{
// 				required:true,
// 				minlength: 2,
// 				maxlength: 500
// 			},
// 			news_hy:{
// 				required:true,
// 				//	minlength: 100
// 			},
// 			news_ru:{
// 				required:true,
// 				//minlength: 100
// 			},
// 			news_en:{
// 				required:true,
// 				//minlength: 100
// 			},
//             link:{
//                 // required:true,
//                 url: true
//             },
// 			images:{
// 				//required:true,
//
//                 accept:".jpg, .jpeg, .png"
// 			}
// 		},
// 		errorClass: "help-inline",
// 		errorElement: "span",
// 		highlight:function(element, errorClass, validClass) {
// 			$(element).parents('.control-group').addClass('error');
// 		},
// 		unhighlight: function(element, errorClass, validClass) {
// 			$(element).parents('.control-group').removeClass('error');
// 			$(element).parents('.control-group').addClass('success');
// 		}
// 	});
//
//     $("#create_slider").validate({
//         rules:{
//             title_hy:{
//                 required:true,
//                 minlength: 2,
//                 maxlength: 500
//             },
//             title_ru:{
//                 required:true,
//                 minlength: 2,
//                 maxlength: 500
//             },
//             title_en:{
//                 required:true,
//                 minlength: 2,
//                 maxlength: 500
//             },
//
//
//             link:{
//                 url: true,
//                 maxlength: 500
//             },
//
//             images:{
//                 required:true,
//                 accept:".jpg, .jpeg, .png"
//             }
//         },
//         errorClass: "help-inline",
//         errorElement: "span",
//         highlight:function(element, errorClass, validClass) {
//             $(element).parents('.control-group').addClass('error');
//         },
//         unhighlight: function(element, errorClass, validClass) {
//             $(element).parents('.control-group').removeClass('error');
//             $(element).parents('.control-group').addClass('success');
//         }
//     });
//
//     $("#edit_slider").validate({
//         rules:{
//             title_hy:{
//                 required:true,
//                 minlength: 2,
//                 maxlength: 500
//             },
//             title_ru:{
//                 required:true,
//                 minlength: 2,
//                 maxlength: 500
//             },
//             title_en:{
//                 required:true,
//                 minlength: 2,
//                 maxlength: 500
//             },
//             link:{
//                 url: true,
//                 maxlength: 500
//             },
//
//             images:{
//                 //required:true,
//                 accept:".jpg, .jpeg, .png"
//             }
//         },
//         errorClass: "help-inline",
//         errorElement: "span",
//         highlight:function(element, errorClass, validClass) {
//             $(element).parents('.control-group').addClass('error');
//         },
//         unhighlight: function(element, errorClass, validClass) {
//             $(element).parents('.control-group').removeClass('error');
//             $(element).parents('.control-group').addClass('success');
//         }
//     });
//
//     $("#create_albom").validate({
//         rules:{
//             title_hy:{
//                 required:true,
//                 minlength: 2,
//                 maxlength: 500
//             },
//             title_ru:{
//                 required:true,
//                 minlength: 2,
//                 maxlength: 500
//             },
//             title_en:{
//                 required:true,
//                 minlength: 2,
//                 maxlength: 500
//             },
//
//         },
//         errorClass: "help-inline",
//         errorElement: "span",
//         highlight:function(element, errorClass, validClass) {
//             $(element).parents('.control-group').addClass('error');
//         },
//         unhighlight: function(element, errorClass, validClass) {
//             $(element).parents('.control-group').removeClass('error');
//             $(element).parents('.control-group').addClass('success');
//         }
//     });
//     $("#edit_albom").validate({
//         rules:{
//             title_hy:{
//                 required:true,
//                 minlength: 2,
//                 maxlength: 500
//             },
//             title_ru:{
//                 required:true,
//                 minlength: 2,
//                 maxlength: 500
//             },
//             title_en:{
//                 required:true,
//                 minlength: 2,
//                 maxlength: 500
//             },
//
//         },
//         errorClass: "help-inline",
//         errorElement: "span",
//         highlight:function(element, errorClass, validClass) {
//             $(element).parents('.control-group').addClass('error');
//         },
//         unhighlight: function(element, errorClass, validClass) {
//             $(element).parents('.control-group').removeClass('error');
//             $(element).parents('.control-group').addClass('success');
//         }
//     });
//
//
//     $("#create_music").validate({
//         rules:{
//             title:{
//                 required:true,
//                 minlength: 2,
//                 maxlength: 300
//             },
//
//             text:{
//                 required:true,
//                 // maxlength: 300
//             },
//             file:{
//                 required:true,
//                 // accept: "audio/*"
//             }
//         },
//         errorClass: "help-inline",
//         errorElement: "span",
//         highlight:function(element, errorClass, validClass) {
//             $(element).parents('.control-group').addClass('error');
//         },
//         unhighlight: function(element, errorClass, validClass) {
//             $(element).parents('.control-group').removeClass('error');
//             $(element).parents('.control-group').addClass('success');
//         }
//     });
//
//     $("#edit_music").validate({
//         rules:{
//             title:{
//                 required:true,
//                 minlength: 2,
//                 maxlength: 150
//             },
//
//             text:{
//                 required:true,
//                 //	minlength: 100
//             },
//             file:{
//                 // required:true,
//             }
//         },
//         errorClass: "help-inline",
//         errorElement: "span",
//         highlight:function(element, errorClass, validClass) {
//             $(element).parents('.control-group').addClass('error');
//         },
//         unhighlight: function(element, errorClass, validClass) {
//             $(element).parents('.control-group').removeClass('error');
//             $(element).parents('.control-group').addClass('success');
//         }
//     });
//
//     $("#create_video").validate({
//         rules:{
//             title:{
//                 required:true,
//                 minlength: 2,
//                 maxlength: 150
//             },
//             link:{
//                 // required:true,
//                 minlength: 2,
//
//             },
//
//
//             file:{
//                 // required:true,
//             }
//         },
//         errorClass: "help-inline",
//         errorElement: "span",
//         highlight:function(element, errorClass, validClass) {
//             $(element).parents('.control-group').addClass('error');
//         },
//         unhighlight: function(element, errorClass, validClass) {
//             $(element).parents('.control-group').removeClass('error');
//             $(element).parents('.control-group').addClass('success');
//         }
//     });
//
//     $("#edit_video").validate({
//         rules:{
//             title:{
//                 required:true,
//                 minlength: 2,
//                 maxlength: 150
//             },
//             link:{
//                 // required:true,
//                 minlength: 2,
//
//             },
//             file:{
//                 // required:true,
//             }
//         },
//         errorClass: "help-inline",
//         errorElement: "span",
//         highlight:function(element, errorClass, validClass) {
//             $(element).parents('.control-group').addClass('error');
//         },
//         unhighlight: function(element, errorClass, validClass) {
//             $(element).parents('.control-group').removeClass('error');
//             $(element).parents('.control-group').addClass('success');
//         }
//     });
//
//
//     $("#create_foto").validate({
//         rules:{
//
//             file:{
//                 required:true,
//             }
//         },
//         errorClass: "help-inline",
//         errorElement: "span",
//         highlight:function(element, errorClass, validClass) {
//             $(element).parents('.control-group').addClass('error');
//         },
//         unhighlight: function(element, errorClass, validClass) {
//             $(element).parents('.control-group').removeClass('error');
//             $(element).parents('.control-group').addClass('success');
//         }
//     });
//
//     $("#create_zinuj").validate({
//         rules:{
//             title_hy:{
//                 required:true,
//                 minlength: 2,
//
//             },
//            desc_hy:{
//                 required:true,
//                 minlength: 20,
//             },
//             date:{
//                 required:true,
//             },
//             file:{
//                 required:true,
//             },
//             haxordum:{
//                 required:true,
//                 url: true
//             },
//             tesanyut:{
//                 required:true,
//                 url: true
//             }
//         },
//         errorClass: "help-inline",
//         errorElement: "span",
//         highlight:function(element, errorClass, validClass) {
//             $(element).parents('.control-group').addClass('error');
//         },
//         unhighlight: function(element, errorClass, validClass) {
//             $(element).parents('.control-group').removeClass('error');
//             $(element).parents('.control-group').addClass('success');
//         }
//     });
//
//     $("#edit_zinuj").validate({
//         rules:{
//             title_hy:{
//                 required:true,
//                 minlength: 2,
//
//             },
//             desc_hy:{
//                 required:true,
//                 minlength: 20,
//             },
//             date:{
//                 required:true,
//             },
//             file:{
//                 required:true,
//             },
//             haxordum:{
//                 // required:true,
//                 url: true
//             },
//             tesanyut:{
//                 // required:true,
//                 url: true
//             }
//         },
//         errorClass: "help-inline",
//         errorElement: "span",
//         highlight:function(element, errorClass, validClass) {
//             $(element).parents('.control-group').addClass('error');
//         },
//         unhighlight: function(element, errorClass, validClass) {
//             $(element).parents('.control-group').removeClass('error');
//             $(element).parents('.control-group').addClass('success');
//         }
//     });
//
//     $("#create_journal").validate({
//         rules:{
//             number_year:{
//                 required:true,
//
//
//             },
//             number_all:{
//                 required:true,
//
//             },
//             date_on:{
//                 required:true,
//             },
//             date_of:{
//                 required:true,
//             },
//             link:{
//                 required:true,
//                url:true,
//             },
//             desc_en:{
//                 required:true,
//                 minlength: 20,
//             },
//             images:{
//                 required:true,
//             },
//
//         },
//         errorClass: "help-inline",
//         errorElement: "span",
//         highlight:function(element, errorClass, validClass) {
//             $(element).parents('.control-group').addClass('error');
//         },
//         unhighlight: function(element, errorClass, validClass) {
//             $(element).parents('.control-group').removeClass('error');
//             $(element).parents('.control-group').addClass('success');
//         }
//     });
//
//     $("#edit_journal").validate({
//         rules:{
//             number_year:{
//                 required:true,
//
//
//             },
//             number_all:{
//                 required:true,
//
//             },
//             date_on:{
//                 required:true,
//             },
//             date_of:{
//                 required:true,
//             },
//             link:{
//                 required:true,
//                 url:true,
//             },
//             desc_en:{
//                 required:true,
//                 minlength: 20,
//             },
//
//
//         },
//         errorClass: "help-inline",
//         errorElement: "span",
//         highlight:function(element, errorClass, validClass) {
//             $(element).parents('.control-group').addClass('error');
//         },
//         unhighlight: function(element, errorClass, validClass) {
//             $(element).parents('.control-group').removeClass('error');
//             $(element).parents('.control-group').addClass('success');
//         }
//     });
//
//     $("#create_tesanyut").validate({
//         rules:{
//             title_hy:{
//                 required:true,
//                 minlength: 2,
//
//             },
//             title_ru:{
//                 required:true,
//                 minlength: 2,
//
//             },
//             title_en:{
//                 required:true,
//                 minlength: 2,
//
//             },
//             desc_hy:{
//                 required:true,
//                 minlength: 20,
//             },
//             desc_ru:{
//                 required:true,
//                 minlength: 20,
//             },
//             desc_en:{
//                 required:true,
//                 minlength: 20,
//             },
//             date:{
//                 required:true,
//             },
//             tesanyut:{
//                 required:true,
//                 url: true
//             }
//         },
//         errorClass: "help-inline",
//         errorElement: "span",
//         highlight:function(element, errorClass, validClass) {
//             $(element).parents('.control-group').addClass('error');
//         },
//         unhighlight: function(element, errorClass, validClass) {
//             $(element).parents('.control-group').removeClass('error');
//             $(element).parents('.control-group').addClass('success');
//         }
//     });
//
//     $("#edit_tesanyut").validate({
//         rules:{
//             title_hy:{
//                 required:true,
//                 minlength: 2,
//
//             },
//             title_ru:{
//                 required:true,
//                 minlength: 2,
//
//             },
//             title_en:{
//                 required:true,
//                 minlength: 2,
//
//             },
//             desc_hy:{
//                 required:true,
//                 minlength: 20,
//             },
//             desc_ru:{
//                 required:true,
//                 minlength: 20,
//             },
//             desc_en:{
//                 required:true,
//                 minlength: 20,
//             },
//             date:{
//                 required:true,
//             },
//             tesanyut:{
//                 // required:true,
//                 url: true
//             }
//         },
//         errorClass: "help-inline",
//         errorElement: "span",
//         highlight:function(element, errorClass, validClass) {
//             $(element).parents('.control-group').addClass('error');
//         },
//         unhighlight: function(element, errorClass, validClass) {
//             $(element).parents('.control-group').removeClass('error');
//             $(element).parents('.control-group').addClass('success');
//         }
//     });
//
//
//     $("#create_handes").validate({
//         rules:{
//             title_hy:{
//                 required:true,
//                 minlength: 2,
//                 maxlength: 150
//             },
//
//             news_hy:{
//                 required:true,
//                 //	minlength: 100
//             },
//             images:{
//                 required:true,
//             },
//             date:{
//                 required:true,
//             }
//         },
//         errorClass: "help-inline",
//         errorElement: "span",
//         highlight:function(element, errorClass, validClass) {
//             $(element).parents('.control-group').addClass('error');
//         },
//         unhighlight: function(element, errorClass, validClass) {
//             $(element).parents('.control-group').removeClass('error');
//             $(element).parents('.control-group').addClass('success');
//         }
//     });
//
//     $("#edit_handes").validate({
//         rules:{
//             title_hy:{
//                 required:true,
//                 minlength: 2,
//                 maxlength: 150
//             },
//
//             news_hy:{
//                 required:true,
//                 //	minlength: 100
//             },
//             images:{
//                 // required:true,
//             },
//             date:{
//                 required:true,
//             }
//         },
//         errorClass: "help-inline",
//         errorElement: "span",
//         highlight:function(element, errorClass, validClass) {
//             $(element).parents('.control-group').addClass('error');
//         },
//         unhighlight: function(element, errorClass, validClass) {
//             $(element).parents('.control-group').removeClass('error');
//             $(element).parents('.control-group').addClass('success');
//         }
//     });
//
//     $("#create_aspar").validate({
//         rules:{
//             date:{
//                 required:true,
//             },
//
//             player:{
//                 // required:true,
//                 //	minlength: 100
//             },
//             audio:{
//                 // required:true,
//                 //	minlength: 100
//             },
//             reportaj:{
//                 // required:true,
//             }
//         },
//         errorClass: "help-inline",
//         errorElement: "span",
//         highlight:function(element, errorClass, validClass) {
//             $(element).parents('.control-group').addClass('error');
//         },
//         unhighlight: function(element, errorClass, validClass) {
//             $(element).parents('.control-group').removeClass('error');
//             $(element).parents('.control-group').addClass('success');
//         }
//     });
//
//     $("#edit_aspar").validate({
//         rules:{
//             date:{
//                 required:true,
//             },
//             player:{
//                 // required:true,
//                 //	minlength: 100
//             },
//
//             audio:{
//                 // required:true,
//                 //	minlength: 100
//             },
//             reportaj:{
//                 // required:true,
//             }
//         },
//         errorClass: "help-inline",
//         errorElement: "span",
//         highlight:function(element, errorClass, validClass) {
//             $(element).parents('.control-group').addClass('error');
//         },
//         unhighlight: function(element, errorClass, validClass) {
//             $(element).parents('.control-group').removeClass('error');
//             $(element).parents('.control-group').addClass('success');
//         }
//     });
//
// 	// Add Product Validation
//
//
// 	$("#number_validate").validate({
// 		rules:{
// 			min:{
// 				required: true,
// 				min:10
// 			},
// 			max:{
// 				required:true,
// 				max:24
// 			},
// 			number:{
// 				required:true,
// 				number:true
// 			}
// 		},
// 		errorClass: "help-inline",
// 		errorElement: "span",
// 		highlight:function(element, errorClass, validClass) {
// 			$(element).parents('.control-group').addClass('error');
// 		},
// 		unhighlight: function(element, errorClass, validClass) {
// 			$(element).parents('.control-group').removeClass('error');
// 			$(element).parents('.control-group').addClass('success');
// 		}
// 	});
//
// 	$("#password_validate").validate({
// 		rules:{
// 			current_pwd:{
// 				required: true,
// 				minlength:6,
// 				maxlength:20
// 			},
// 			new_pwd:{
// 				required: true,
// 				minlength:6,
// 				maxlength:20
// 			},
// 			confirm_pwd:{
// 				required:true,
// 				minlength:6,
// 				maxlength:20,
// 				equalTo:"#new_pwd"
// 			}
// 		},
// 		errorClass: "help-inline",
// 		errorElement: "span",
// 		highlight:function(element, errorClass, validClass) {
// 			$(element).parents('.control-group').addClass('error');
// 		},
// 		unhighlight: function(element, errorClass, validClass) {
// 			$(element).parents('.control-group').removeClass('error');
// 			$(element).parents('.control-group').addClass('success');
// 		}
// 	});
//
// 	$("#delCat").click(function(){
// 		if(confirm('Are you sure you want to delete this Category?')){
// 			return true;
// 		}
// 		return false;
// 	});
//
// });
