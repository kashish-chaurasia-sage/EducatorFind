  <?php $this->load->view('layout/header');?>
	<section class=" abou-pg commun-pg-main">
        <div class="about-ban comunity-ban">
            <h1>Educator Community</h1>
            <p>Build your educator community and expand your teaching world to next step.</p>
            <input type="text" id="tail-se" placeholder="Search user profiles..">
        </div>
        <div class="container">
            <div class="row">
                <div class="comity-all-user">
                    <ul id="tail-re" class="community-wrapper">
                         
						 <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7381950378620686"
     crossorigin="anonymous"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="+1g+rz-i-q+3f"
     data-ad-client="ca-pub-7381950378620686"
     data-ad-slot="6850072781"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
						 <?php if(!empty($community)){
							foreach($community as $key =>$value){ 
							 ?>
                         <li class="community-item">
                            <div class="pro-fol-gr">
                                <div class="pro-ful-img">
                                <img src="<?=base_url('uploads/'.$value->user_id.'/'.$value->edu_image);?>" alt="<?= $value->edu_name;?>">
                                <h4><b><?= $value->edu_name;?></b><?= $value->edu_city;?> </h4>
                                <a href="<?= base_url('detail/'.$value->edu_name.'/'.$value->Eid);?>" class="comm-viw-pro-btn" target="_blank"></a>
                                </div>    
                                
                                <div class="pro-pg-msg">
                                    <a href="#">Follow</a>
                                </div>
                            </div>
                         </li>
        
							<?php } }else{?>
						 <div class="alert alert-primary" role="alert">
                             No data found
                         </div>
						 <?php }?>
                </ul>
                </div>
            </div>
        </div>
	</section>
	<!--END-->
<br><br><br>
<!-- START -->
  <?php $this->load->view('layout/footer');?>
<script>
    var items = $(".community-wrapper .community-item");
    var numItems = items.length;
    var perPage = 18;

    items.slice(perPage).hide();

    $('#community-pagination-container').pagination({
        items: numItems,
        itemsOnPage: perPage,
        prevText: "&laquo;",
        nextText: "&raquo;",
        onPageClick: function (pageNumber) {
            var showFrom = perPage * (pageNumber - 1);
            var showTo = showFrom + perPage;
            items.hide().slice(showFrom, showTo).show();
            $("html, body").animate({ scrollTop: 0 }, "fast");
            return false;
        }
    });
</script>
<script>
$("#tail-se").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tail-re li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
</script>
    <script>
        $(document).ready(function () {
            $("#chat-box-div1").on('click', function () {
                $("#msg-op-conve1").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo1").on('click', function () {
                $("#msg-op-conve1").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send1").click(function () {
            $("#new_chat_form1").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form1").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat1(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat1(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div2").on('click', function () {
                $("#msg-op-conve2").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo2").on('click', function () {
                $("#msg-op-conve2").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send2").click(function () {
            $("#new_chat_form2").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form2").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat2(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat2(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div3").on('click', function () {
                $("#msg-op-conve3").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo3").on('click', function () {
                $("#msg-op-conve3").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send3").click(function () {
            $("#new_chat_form3").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form3").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat3(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat3(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div4").on('click', function () {
                $("#msg-op-conve4").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo4").on('click', function () {
                $("#msg-op-conve4").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send4").click(function () {
            $("#new_chat_form4").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form4").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat4(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat4(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div5").on('click', function () {
                $("#msg-op-conve5").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo5").on('click', function () {
                $("#msg-op-conve5").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send5").click(function () {
            $("#new_chat_form5").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form5").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat5(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat5(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div6").on('click', function () {
                $("#msg-op-conve6").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo6").on('click', function () {
                $("#msg-op-conve6").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send6").click(function () {
            $("#new_chat_form6").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form6").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat6(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat6(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div7").on('click', function () {
                $("#msg-op-conve7").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo7").on('click', function () {
                $("#msg-op-conve7").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send7").click(function () {
            $("#new_chat_form7").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form7").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat7(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat7(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div8").on('click', function () {
                $("#msg-op-conve8").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo8").on('click', function () {
                $("#msg-op-conve8").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send8").click(function () {
            $("#new_chat_form8").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form8").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat8(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat8(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div9").on('click', function () {
                $("#msg-op-conve9").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo9").on('click', function () {
                $("#msg-op-conve9").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send9").click(function () {
            $("#new_chat_form9").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form9").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat9(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat9(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div10").on('click', function () {
                $("#msg-op-conve10").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo10").on('click', function () {
                $("#msg-op-conve10").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send10").click(function () {
            $("#new_chat_form10").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form10").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat10(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat10(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div11").on('click', function () {
                $("#msg-op-conve11").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo11").on('click', function () {
                $("#msg-op-conve11").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send11").click(function () {
            $("#new_chat_form11").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form11").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat11(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat11(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div12").on('click', function () {
                $("#msg-op-conve12").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo12").on('click', function () {
                $("#msg-op-conve12").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send12").click(function () {
            $("#new_chat_form12").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form12").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat12(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat12(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div13").on('click', function () {
                $("#msg-op-conve13").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo13").on('click', function () {
                $("#msg-op-conve13").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send13").click(function () {
            $("#new_chat_form13").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form13").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat13(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat13(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div14").on('click', function () {
                $("#msg-op-conve14").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo14").on('click', function () {
                $("#msg-op-conve14").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send14").click(function () {
            $("#new_chat_form14").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form14").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat14(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat14(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div15").on('click', function () {
                $("#msg-op-conve15").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo15").on('click', function () {
                $("#msg-op-conve15").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send15").click(function () {
            $("#new_chat_form15").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form15").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat15(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat15(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div16").on('click', function () {
                $("#msg-op-conve16").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo16").on('click', function () {
                $("#msg-op-conve16").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send16").click(function () {
            $("#new_chat_form16").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form16").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat16(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat16(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div17").on('click', function () {
                $("#msg-op-conve17").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo17").on('click', function () {
                $("#msg-op-conve17").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send17").click(function () {
            $("#new_chat_form17").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form17").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat17(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat17(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div18").on('click', function () {
                $("#msg-op-conve18").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo18").on('click', function () {
                $("#msg-op-conve18").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send18").click(function () {
            $("#new_chat_form18").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form18").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat18(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat18(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div19").on('click', function () {
                $("#msg-op-conve19").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo19").on('click', function () {
                $("#msg-op-conve19").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send19").click(function () {
            $("#new_chat_form19").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form19").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat19(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat19(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div20").on('click', function () {
                $("#msg-op-conve20").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo20").on('click', function () {
                $("#msg-op-conve20").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send20").click(function () {
            $("#new_chat_form20").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form20").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat20(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat20(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div21").on('click', function () {
                $("#msg-op-conve21").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo21").on('click', function () {
                $("#msg-op-conve21").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send21").click(function () {
            $("#new_chat_form21").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form21").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat21(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat21(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div22").on('click', function () {
                $("#msg-op-conve22").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo22").on('click', function () {
                $("#msg-op-conve22").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send22").click(function () {
            $("#new_chat_form22").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form22").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat22(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat22(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div23").on('click', function () {
                $("#msg-op-conve23").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo23").on('click', function () {
                $("#msg-op-conve23").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send23").click(function () {
            $("#new_chat_form23").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form23").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat23(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat23(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div24").on('click', function () {
                $("#msg-op-conve24").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo24").on('click', function () {
                $("#msg-op-conve24").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send24").click(function () {
            $("#new_chat_form24").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form24").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat24(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat24(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div25").on('click', function () {
                $("#msg-op-conve25").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo25").on('click', function () {
                $("#msg-op-conve25").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send25").click(function () {
            $("#new_chat_form25").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form25").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat25(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat25(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div26").on('click', function () {
                $("#msg-op-conve26").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo26").on('click', function () {
                $("#msg-op-conve26").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send26").click(function () {
            $("#new_chat_form26").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form26").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat26(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat26(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div27").on('click', function () {
                $("#msg-op-conve27").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo27").on('click', function () {
                $("#msg-op-conve27").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send27").click(function () {
            $("#new_chat_form27").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form27").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat27(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat27(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div28").on('click', function () {
                $("#msg-op-conve28").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo28").on('click', function () {
                $("#msg-op-conve28").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send28").click(function () {
            $("#new_chat_form28").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form28").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat28(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat28(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div29").on('click', function () {
                $("#msg-op-conve29").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo29").on('click', function () {
                $("#msg-op-conve29").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send29").click(function () {
            $("#new_chat_form29").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form29").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat29(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat29(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div30").on('click', function () {
                $("#msg-op-conve30").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo30").on('click', function () {
                $("#msg-op-conve30").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send30").click(function () {
            $("#new_chat_form30").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form30").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat30(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat30(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div31").on('click', function () {
                $("#msg-op-conve31").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo31").on('click', function () {
                $("#msg-op-conve31").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send31").click(function () {
            $("#new_chat_form31").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form31").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat31(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat31(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div32").on('click', function () {
                $("#msg-op-conve32").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo32").on('click', function () {
                $("#msg-op-conve32").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send32").click(function () {
            $("#new_chat_form32").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form32").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat32(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat32(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div33").on('click', function () {
                $("#msg-op-conve33").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo33").on('click', function () {
                $("#msg-op-conve33").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send33").click(function () {
            $("#new_chat_form33").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form33").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat33(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat33(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div34").on('click', function () {
                $("#msg-op-conve34").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo34").on('click', function () {
                $("#msg-op-conve34").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send34").click(function () {
            $("#new_chat_form34").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form34").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat34(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat34(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div35").on('click', function () {
                $("#msg-op-conve35").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo35").on('click', function () {
                $("#msg-op-conve35").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send35").click(function () {
            $("#new_chat_form35").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form35").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat35(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat35(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div36").on('click', function () {
                $("#msg-op-conve36").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo36").on('click', function () {
                $("#msg-op-conve36").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send36").click(function () {
            $("#new_chat_form36").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form36").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat36(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat36(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div37").on('click', function () {
                $("#msg-op-conve37").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo37").on('click', function () {
                $("#msg-op-conve37").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send37").click(function () {
            $("#new_chat_form37").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form37").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat37(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat37(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div38").on('click', function () {
                $("#msg-op-conve38").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo38").on('click', function () {
                $("#msg-op-conve38").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send38").click(function () {
            $("#new_chat_form38").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form38").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat38(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat38(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div39").on('click', function () {
                $("#msg-op-conve39").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo39").on('click', function () {
                $("#msg-op-conve39").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send39").click(function () {
            $("#new_chat_form39").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form39").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat39(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat39(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div40").on('click', function () {
                $("#msg-op-conve40").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo40").on('click', function () {
                $("#msg-op-conve40").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send40").click(function () {
            $("#new_chat_form40").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form40").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat40(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat40(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div41").on('click', function () {
                $("#msg-op-conve41").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo41").on('click', function () {
                $("#msg-op-conve41").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send41").click(function () {
            $("#new_chat_form41").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form41").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat41(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat41(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div42").on('click', function () {
                $("#msg-op-conve42").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo42").on('click', function () {
                $("#msg-op-conve42").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send42").click(function () {
            $("#new_chat_form42").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form42").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat42(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat42(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div43").on('click', function () {
                $("#msg-op-conve43").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo43").on('click', function () {
                $("#msg-op-conve43").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send43").click(function () {
            $("#new_chat_form43").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form43").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat43(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat43(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div44").on('click', function () {
                $("#msg-op-conve44").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo44").on('click', function () {
                $("#msg-op-conve44").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send44").click(function () {
            $("#new_chat_form44").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form44").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat44(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat44(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div45").on('click', function () {
                $("#msg-op-conve45").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo45").on('click', function () {
                $("#msg-op-conve45").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send45").click(function () {
            $("#new_chat_form45").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form45").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat45(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat45(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div46").on('click', function () {
                $("#msg-op-conve46").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo46").on('click', function () {
                $("#msg-op-conve46").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send46").click(function () {
            $("#new_chat_form46").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form46").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat46(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat46(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div47").on('click', function () {
                $("#msg-op-conve47").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo47").on('click', function () {
                $("#msg-op-conve47").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send47").click(function () {
            $("#new_chat_form47").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form47").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat47(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat47(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div48").on('click', function () {
                $("#msg-op-conve48").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo48").on('click', function () {
                $("#msg-op-conve48").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send48").click(function () {
            $("#new_chat_form48").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form48").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat48(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat48(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div49").on('click', function () {
                $("#msg-op-conve49").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo49").on('click', function () {
                $("#msg-op-conve49").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send49").click(function () {
            $("#new_chat_form49").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form49").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat49(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat49(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div50").on('click', function () {
                $("#msg-op-conve50").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo50").on('click', function () {
                $("#msg-op-conve50").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send50").click(function () {
            $("#new_chat_form50").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form50").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat50(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat50(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div51").on('click', function () {
                $("#msg-op-conve51").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo51").on('click', function () {
                $("#msg-op-conve51").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send51").click(function () {
            $("#new_chat_form51").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form51").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat51(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat51(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div52").on('click', function () {
                $("#msg-op-conve52").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo52").on('click', function () {
                $("#msg-op-conve52").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send52").click(function () {
            $("#new_chat_form52").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form52").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat52(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat52(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div53").on('click', function () {
                $("#msg-op-conve53").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo53").on('click', function () {
                $("#msg-op-conve53").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send53").click(function () {
            $("#new_chat_form53").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form53").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat53(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat53(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div54").on('click', function () {
                $("#msg-op-conve54").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo54").on('click', function () {
                $("#msg-op-conve54").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send54").click(function () {
            $("#new_chat_form54").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form54").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat54(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat54(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div55").on('click', function () {
                $("#msg-op-conve55").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo55").on('click', function () {
                $("#msg-op-conve55").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send55").click(function () {
            $("#new_chat_form55").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form55").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat55(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat55(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div56").on('click', function () {
                $("#msg-op-conve56").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo56").on('click', function () {
                $("#msg-op-conve56").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send56").click(function () {
            $("#new_chat_form56").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form56").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat56(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat56(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div57").on('click', function () {
                $("#msg-op-conve57").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo57").on('click', function () {
                $("#msg-op-conve57").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send57").click(function () {
            $("#new_chat_form57").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form57").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat57(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat57(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div58").on('click', function () {
                $("#msg-op-conve58").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo58").on('click', function () {
                $("#msg-op-conve58").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send58").click(function () {
            $("#new_chat_form58").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form58").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat58(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat58(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div59").on('click', function () {
                $("#msg-op-conve59").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo59").on('click', function () {
                $("#msg-op-conve59").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send59").click(function () {
            $("#new_chat_form59").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form59").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat59(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat59(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div60").on('click', function () {
                $("#msg-op-conve60").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo60").on('click', function () {
                $("#msg-op-conve60").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send60").click(function () {
            $("#new_chat_form60").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form60").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat60(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat60(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div61").on('click', function () {
                $("#msg-op-conve61").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo61").on('click', function () {
                $("#msg-op-conve61").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send61").click(function () {
            $("#new_chat_form61").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form61").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat61(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat61(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div62").on('click', function () {
                $("#msg-op-conve62").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo62").on('click', function () {
                $("#msg-op-conve62").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send62").click(function () {
            $("#new_chat_form62").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form62").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat62(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat62(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div63").on('click', function () {
                $("#msg-op-conve63").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo63").on('click', function () {
                $("#msg-op-conve63").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send63").click(function () {
            $("#new_chat_form63").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form63").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat63(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat63(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div64").on('click', function () {
                $("#msg-op-conve64").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo64").on('click', function () {
                $("#msg-op-conve64").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send64").click(function () {
            $("#new_chat_form64").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form64").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat64(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat64(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div65").on('click', function () {
                $("#msg-op-conve65").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo65").on('click', function () {
                $("#msg-op-conve65").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send65").click(function () {
            $("#new_chat_form65").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form65").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat65(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat65(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div66").on('click', function () {
                $("#msg-op-conve66").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo66").on('click', function () {
                $("#msg-op-conve66").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send66").click(function () {
            $("#new_chat_form66").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form66").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat66(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat66(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div67").on('click', function () {
                $("#msg-op-conve67").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo67").on('click', function () {
                $("#msg-op-conve67").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send67").click(function () {
            $("#new_chat_form67").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form67").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat67(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat67(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div68").on('click', function () {
                $("#msg-op-conve68").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo68").on('click', function () {
                $("#msg-op-conve68").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send68").click(function () {
            $("#new_chat_form68").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form68").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat68(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat68(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div69").on('click', function () {
                $("#msg-op-conve69").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo69").on('click', function () {
                $("#msg-op-conve69").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send69").click(function () {
            $("#new_chat_form69").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form69").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat69(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat69(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div70").on('click', function () {
                $("#msg-op-conve70").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo70").on('click', function () {
                $("#msg-op-conve70").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send70").click(function () {
            $("#new_chat_form70").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form70").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat70(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat70(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div71").on('click', function () {
                $("#msg-op-conve71").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo71").on('click', function () {
                $("#msg-op-conve71").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send71").click(function () {
            $("#new_chat_form71").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form71").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat71(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat71(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div72").on('click', function () {
                $("#msg-op-conve72").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo72").on('click', function () {
                $("#msg-op-conve72").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send72").click(function () {
            $("#new_chat_form72").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form72").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat72(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat72(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div73").on('click', function () {
                $("#msg-op-conve73").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo73").on('click', function () {
                $("#msg-op-conve73").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send73").click(function () {
            $("#new_chat_form73").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form73").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat73(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat73(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div74").on('click', function () {
                $("#msg-op-conve74").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo74").on('click', function () {
                $("#msg-op-conve74").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send74").click(function () {
            $("#new_chat_form74").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form74").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat74(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat74(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div75").on('click', function () {
                $("#msg-op-conve75").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo75").on('click', function () {
                $("#msg-op-conve75").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send75").click(function () {
            $("#new_chat_form75").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form75").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat75(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat75(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div76").on('click', function () {
                $("#msg-op-conve76").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo76").on('click', function () {
                $("#msg-op-conve76").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send76").click(function () {
            $("#new_chat_form76").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form76").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat76(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat76(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div77").on('click', function () {
                $("#msg-op-conve77").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo77").on('click', function () {
                $("#msg-op-conve77").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send77").click(function () {
            $("#new_chat_form77").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form77").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat77(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat77(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div78").on('click', function () {
                $("#msg-op-conve78").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo78").on('click', function () {
                $("#msg-op-conve78").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send78").click(function () {
            $("#new_chat_form78").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form78").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat78(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat78(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div79").on('click', function () {
                $("#msg-op-conve79").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo79").on('click', function () {
                $("#msg-op-conve79").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send79").click(function () {
            $("#new_chat_form79").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form79").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat79(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat79(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div80").on('click', function () {
                $("#msg-op-conve80").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo80").on('click', function () {
                $("#msg-op-conve80").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send80").click(function () {
            $("#new_chat_form80").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form80").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat80(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat80(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div81").on('click', function () {
                $("#msg-op-conve81").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo81").on('click', function () {
                $("#msg-op-conve81").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send81").click(function () {
            $("#new_chat_form81").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form81").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat81(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat81(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div82").on('click', function () {
                $("#msg-op-conve82").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo82").on('click', function () {
                $("#msg-op-conve82").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send82").click(function () {
            $("#new_chat_form82").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form82").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat82(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat82(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div83").on('click', function () {
                $("#msg-op-conve83").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo83").on('click', function () {
                $("#msg-op-conve83").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send83").click(function () {
            $("#new_chat_form83").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form83").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat83(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat83(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div84").on('click', function () {
                $("#msg-op-conve84").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo84").on('click', function () {
                $("#msg-op-conve84").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send84").click(function () {
            $("#new_chat_form84").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form84").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat84(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat84(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div85").on('click', function () {
                $("#msg-op-conve85").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo85").on('click', function () {
                $("#msg-op-conve85").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send85").click(function () {
            $("#new_chat_form85").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form85").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat85(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat85(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div86").on('click', function () {
                $("#msg-op-conve86").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo86").on('click', function () {
                $("#msg-op-conve86").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send86").click(function () {
            $("#new_chat_form86").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form86").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat86(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat86(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div87").on('click', function () {
                $("#msg-op-conve87").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo87").on('click', function () {
                $("#msg-op-conve87").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send87").click(function () {
            $("#new_chat_form87").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form87").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat87(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat87(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div88").on('click', function () {
                $("#msg-op-conve88").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo88").on('click', function () {
                $("#msg-op-conve88").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send88").click(function () {
            $("#new_chat_form88").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form88").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat88(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat88(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div89").on('click', function () {
                $("#msg-op-conve89").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo89").on('click', function () {
                $("#msg-op-conve89").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send89").click(function () {
            $("#new_chat_form89").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form89").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat89(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat89(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div90").on('click', function () {
                $("#msg-op-conve90").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo90").on('click', function () {
                $("#msg-op-conve90").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send90").click(function () {
            $("#new_chat_form90").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form90").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat90(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat90(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div91").on('click', function () {
                $("#msg-op-conve91").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo91").on('click', function () {
                $("#msg-op-conve91").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send91").click(function () {
            $("#new_chat_form91").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form91").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat91(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat91(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div92").on('click', function () {
                $("#msg-op-conve92").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo92").on('click', function () {
                $("#msg-op-conve92").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send92").click(function () {
            $("#new_chat_form92").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form92").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat92(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat92(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div93").on('click', function () {
                $("#msg-op-conve93").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo93").on('click', function () {
                $("#msg-op-conve93").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send93").click(function () {
            $("#new_chat_form93").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form93").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat93(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat93(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div94").on('click', function () {
                $("#msg-op-conve94").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo94").on('click', function () {
                $("#msg-op-conve94").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send94").click(function () {
            $("#new_chat_form94").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form94").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat94(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat94(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div95").on('click', function () {
                $("#msg-op-conve95").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo95").on('click', function () {
                $("#msg-op-conve95").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send95").click(function () {
            $("#new_chat_form95").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form95").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat95(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat95(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div96").on('click', function () {
                $("#msg-op-conve96").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo96").on('click', function () {
                $("#msg-op-conve96").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send96").click(function () {
            $("#new_chat_form96").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form96").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat96(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat96(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div97").on('click', function () {
                $("#msg-op-conve97").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo97").on('click', function () {
                $("#msg-op-conve97").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send97").click(function () {
            $("#new_chat_form97").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form97").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat97(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat97(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div98").on('click', function () {
                $("#msg-op-conve98").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo98").on('click', function () {
                $("#msg-op-conve98").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send98").click(function () {
            $("#new_chat_form98").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form98").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat98(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat98(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div99").on('click', function () {
                $("#msg-op-conve99").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo99").on('click', function () {
                $("#msg-op-conve99").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send99").click(function () {
            $("#new_chat_form99").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form99").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat99(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat99(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div100").on('click', function () {
                $("#msg-op-conve100").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo100").on('click', function () {
                $("#msg-op-conve100").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send100").click(function () {
            $("#new_chat_form100").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form100").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat100(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat100(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div101").on('click', function () {
                $("#msg-op-conve101").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo101").on('click', function () {
                $("#msg-op-conve101").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send101").click(function () {
            $("#new_chat_form101").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form101").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat101(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat101(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div102").on('click', function () {
                $("#msg-op-conve102").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo102").on('click', function () {
                $("#msg-op-conve102").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send102").click(function () {
            $("#new_chat_form102").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form102").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat102(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat102(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div103").on('click', function () {
                $("#msg-op-conve103").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo103").on('click', function () {
                $("#msg-op-conve103").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send103").click(function () {
            $("#new_chat_form103").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form103").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat103(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat103(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div104").on('click', function () {
                $("#msg-op-conve104").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo104").on('click', function () {
                $("#msg-op-conve104").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send104").click(function () {
            $("#new_chat_form104").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form104").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat104(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat104(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div105").on('click', function () {
                $("#msg-op-conve105").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo105").on('click', function () {
                $("#msg-op-conve105").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send105").click(function () {
            $("#new_chat_form105").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form105").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat105(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat105(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div106").on('click', function () {
                $("#msg-op-conve106").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo106").on('click', function () {
                $("#msg-op-conve106").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send106").click(function () {
            $("#new_chat_form106").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form106").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat106(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat106(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div107").on('click', function () {
                $("#msg-op-conve107").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo107").on('click', function () {
                $("#msg-op-conve107").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send107").click(function () {
            $("#new_chat_form107").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form107").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat107(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat107(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div108").on('click', function () {
                $("#msg-op-conve108").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo108").on('click', function () {
                $("#msg-op-conve108").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send108").click(function () {
            $("#new_chat_form108").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form108").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat108(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat108(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div109").on('click', function () {
                $("#msg-op-conve109").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo109").on('click', function () {
                $("#msg-op-conve109").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send109").click(function () {
            $("#new_chat_form109").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form109").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat109(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat109(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div110").on('click', function () {
                $("#msg-op-conve110").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo110").on('click', function () {
                $("#msg-op-conve110").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send110").click(function () {
            $("#new_chat_form110").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form110").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat110(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat110(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div111").on('click', function () {
                $("#msg-op-conve111").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo111").on('click', function () {
                $("#msg-op-conve111").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send111").click(function () {
            $("#new_chat_form111").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form111").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat111(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat111(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div112").on('click', function () {
                $("#msg-op-conve112").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo112").on('click', function () {
                $("#msg-op-conve112").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send112").click(function () {
            $("#new_chat_form112").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form112").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat112(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat112(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div113").on('click', function () {
                $("#msg-op-conve113").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo113").on('click', function () {
                $("#msg-op-conve113").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send113").click(function () {
            $("#new_chat_form113").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form113").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat113(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat113(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div114").on('click', function () {
                $("#msg-op-conve114").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo114").on('click', function () {
                $("#msg-op-conve114").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send114").click(function () {
            $("#new_chat_form114").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form114").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat114(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat114(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div115").on('click', function () {
                $("#msg-op-conve115").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo115").on('click', function () {
                $("#msg-op-conve115").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send115").click(function () {
            $("#new_chat_form115").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form115").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat115(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat115(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div116").on('click', function () {
                $("#msg-op-conve116").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo116").on('click', function () {
                $("#msg-op-conve116").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send116").click(function () {
            $("#new_chat_form116").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form116").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat116(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat116(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div117").on('click', function () {
                $("#msg-op-conve117").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo117").on('click', function () {
                $("#msg-op-conve117").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send117").click(function () {
            $("#new_chat_form117").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form117").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat117(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat117(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div118").on('click', function () {
                $("#msg-op-conve118").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo118").on('click', function () {
                $("#msg-op-conve118").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send118").click(function () {
            $("#new_chat_form118").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form118").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat118(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat118(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div119").on('click', function () {
                $("#msg-op-conve119").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo119").on('click', function () {
                $("#msg-op-conve119").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send119").click(function () {
            $("#new_chat_form119").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form119").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat119(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat119(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div120").on('click', function () {
                $("#msg-op-conve120").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo120").on('click', function () {
                $("#msg-op-conve120").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send120").click(function () {
            $("#new_chat_form120").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form120").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat120(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat120(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div121").on('click', function () {
                $("#msg-op-conve121").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo121").on('click', function () {
                $("#msg-op-conve121").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send121").click(function () {
            $("#new_chat_form121").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form121").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat121(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat121(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div122").on('click', function () {
                $("#msg-op-conve122").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo122").on('click', function () {
                $("#msg-op-conve122").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send122").click(function () {
            $("#new_chat_form122").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form122").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat122(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat122(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div123").on('click', function () {
                $("#msg-op-conve123").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo123").on('click', function () {
                $("#msg-op-conve123").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send123").click(function () {
            $("#new_chat_form123").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form123").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat123(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat123(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div124").on('click', function () {
                $("#msg-op-conve124").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo124").on('click', function () {
                $("#msg-op-conve124").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send124").click(function () {
            $("#new_chat_form124").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form124").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat124(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat124(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div125").on('click', function () {
                $("#msg-op-conve125").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo125").on('click', function () {
                $("#msg-op-conve125").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send125").click(function () {
            $("#new_chat_form125").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form125").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat125(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat125(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div126").on('click', function () {
                $("#msg-op-conve126").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo126").on('click', function () {
                $("#msg-op-conve126").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send126").click(function () {
            $("#new_chat_form126").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form126").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat126(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat126(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div127").on('click', function () {
                $("#msg-op-conve127").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo127").on('click', function () {
                $("#msg-op-conve127").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send127").click(function () {
            $("#new_chat_form127").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form127").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat127(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat127(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div128").on('click', function () {
                $("#msg-op-conve128").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo128").on('click', function () {
                $("#msg-op-conve128").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send128").click(function () {
            $("#new_chat_form128").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form128").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat128(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat128(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div129").on('click', function () {
                $("#msg-op-conve129").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo129").on('click', function () {
                $("#msg-op-conve129").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send129").click(function () {
            $("#new_chat_form129").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form129").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat129(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat129(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div130").on('click', function () {
                $("#msg-op-conve130").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo130").on('click', function () {
                $("#msg-op-conve130").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send130").click(function () {
            $("#new_chat_form130").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form130").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat130(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat130(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div131").on('click', function () {
                $("#msg-op-conve131").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo131").on('click', function () {
                $("#msg-op-conve131").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send131").click(function () {
            $("#new_chat_form131").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form131").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat131(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat131(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div132").on('click', function () {
                $("#msg-op-conve132").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo132").on('click', function () {
                $("#msg-op-conve132").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send132").click(function () {
            $("#new_chat_form132").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form132").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat132(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat132(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div133").on('click', function () {
                $("#msg-op-conve133").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo133").on('click', function () {
                $("#msg-op-conve133").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send133").click(function () {
            $("#new_chat_form133").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form133").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat133(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat133(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div134").on('click', function () {
                $("#msg-op-conve134").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo134").on('click', function () {
                $("#msg-op-conve134").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send134").click(function () {
            $("#new_chat_form134").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form134").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat134(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat134(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div135").on('click', function () {
                $("#msg-op-conve135").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo135").on('click', function () {
                $("#msg-op-conve135").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send135").click(function () {
            $("#new_chat_form135").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form135").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat135(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat135(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div136").on('click', function () {
                $("#msg-op-conve136").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo136").on('click', function () {
                $("#msg-op-conve136").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send136").click(function () {
            $("#new_chat_form136").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form136").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat136(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat136(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div137").on('click', function () {
                $("#msg-op-conve137").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo137").on('click', function () {
                $("#msg-op-conve137").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send137").click(function () {
            $("#new_chat_form137").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form137").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat137(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat137(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div138").on('click', function () {
                $("#msg-op-conve138").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo138").on('click', function () {
                $("#msg-op-conve138").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send138").click(function () {
            $("#new_chat_form138").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form138").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat138(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat138(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div139").on('click', function () {
                $("#msg-op-conve139").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo139").on('click', function () {
                $("#msg-op-conve139").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send139").click(function () {
            $("#new_chat_form139").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form139").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat139(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat139(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div140").on('click', function () {
                $("#msg-op-conve140").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo140").on('click', function () {
                $("#msg-op-conve140").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send140").click(function () {
            $("#new_chat_form140").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form140").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat140(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat140(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div141").on('click', function () {
                $("#msg-op-conve141").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo141").on('click', function () {
                $("#msg-op-conve141").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send141").click(function () {
            $("#new_chat_form141").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form141").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat141(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat141(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div142").on('click', function () {
                $("#msg-op-conve142").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo142").on('click', function () {
                $("#msg-op-conve142").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send142").click(function () {
            $("#new_chat_form142").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form142").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat142(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat142(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div143").on('click', function () {
                $("#msg-op-conve143").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo143").on('click', function () {
                $("#msg-op-conve143").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send143").click(function () {
            $("#new_chat_form143").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form143").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat143(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat143(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div144").on('click', function () {
                $("#msg-op-conve144").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo144").on('click', function () {
                $("#msg-op-conve144").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send144").click(function () {
            $("#new_chat_form144").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form144").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat144(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat144(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div145").on('click', function () {
                $("#msg-op-conve145").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo145").on('click', function () {
                $("#msg-op-conve145").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send145").click(function () {
            $("#new_chat_form145").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form145").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat145(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat145(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div146").on('click', function () {
                $("#msg-op-conve146").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo146").on('click', function () {
                $("#msg-op-conve146").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send146").click(function () {
            $("#new_chat_form146").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form146").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat146(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat146(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div147").on('click', function () {
                $("#msg-op-conve147").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo147").on('click', function () {
                $("#msg-op-conve147").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send147").click(function () {
            $("#new_chat_form147").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form147").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat147(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat147(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div148").on('click', function () {
                $("#msg-op-conve148").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo148").on('click', function () {
                $("#msg-op-conve148").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send148").click(function () {
            $("#new_chat_form148").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form148").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat148(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat148(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div149").on('click', function () {
                $("#msg-op-conve149").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo149").on('click', function () {
                $("#msg-op-conve149").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send149").click(function () {
            $("#new_chat_form149").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form149").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat149(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat149(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div150").on('click', function () {
                $("#msg-op-conve150").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo150").on('click', function () {
                $("#msg-op-conve150").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send150").click(function () {
            $("#new_chat_form150").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form150").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat150(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat150(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div151").on('click', function () {
                $("#msg-op-conve151").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo151").on('click', function () {
                $("#msg-op-conve151").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send151").click(function () {
            $("#new_chat_form151").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form151").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat151(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat151(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div152").on('click', function () {
                $("#msg-op-conve152").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo152").on('click', function () {
                $("#msg-op-conve152").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send152").click(function () {
            $("#new_chat_form152").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form152").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat152(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat152(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div153").on('click', function () {
                $("#msg-op-conve153").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo153").on('click', function () {
                $("#msg-op-conve153").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send153").click(function () {
            $("#new_chat_form153").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form153").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat153(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat153(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div154").on('click', function () {
                $("#msg-op-conve154").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo154").on('click', function () {
                $("#msg-op-conve154").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send154").click(function () {
            $("#new_chat_form154").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form154").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat154(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat154(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div155").on('click', function () {
                $("#msg-op-conve155").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo155").on('click', function () {
                $("#msg-op-conve155").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send155").click(function () {
            $("#new_chat_form155").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form155").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat155(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat155(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div156").on('click', function () {
                $("#msg-op-conve156").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo156").on('click', function () {
                $("#msg-op-conve156").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send156").click(function () {
            $("#new_chat_form156").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form156").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat156(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat156(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div157").on('click', function () {
                $("#msg-op-conve157").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo157").on('click', function () {
                $("#msg-op-conve157").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send157").click(function () {
            $("#new_chat_form157").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form157").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat157(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat157(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div158").on('click', function () {
                $("#msg-op-conve158").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo158").on('click', function () {
                $("#msg-op-conve158").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send158").click(function () {
            $("#new_chat_form158").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form158").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat158(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat158(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div159").on('click', function () {
                $("#msg-op-conve159").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo159").on('click', function () {
                $("#msg-op-conve159").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send159").click(function () {
            $("#new_chat_form159").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form159").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat159(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat159(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div160").on('click', function () {
                $("#msg-op-conve160").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo160").on('click', function () {
                $("#msg-op-conve160").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send160").click(function () {
            $("#new_chat_form160").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form160").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat160(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat160(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div161").on('click', function () {
                $("#msg-op-conve161").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo161").on('click', function () {
                $("#msg-op-conve161").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send161").click(function () {
            $("#new_chat_form161").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form161").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat161(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat161(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div162").on('click', function () {
                $("#msg-op-conve162").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo162").on('click', function () {
                $("#msg-op-conve162").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send162").click(function () {
            $("#new_chat_form162").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form162").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat162(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat162(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div163").on('click', function () {
                $("#msg-op-conve163").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo163").on('click', function () {
                $("#msg-op-conve163").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send163").click(function () {
            $("#new_chat_form163").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form163").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat163(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat163(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div164").on('click', function () {
                $("#msg-op-conve164").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo164").on('click', function () {
                $("#msg-op-conve164").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send164").click(function () {
            $("#new_chat_form164").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form164").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat164(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat164(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div165").on('click', function () {
                $("#msg-op-conve165").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo165").on('click', function () {
                $("#msg-op-conve165").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send165").click(function () {
            $("#new_chat_form165").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form165").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat165(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat165(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div166").on('click', function () {
                $("#msg-op-conve166").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo166").on('click', function () {
                $("#msg-op-conve166").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send166").click(function () {
            $("#new_chat_form166").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form166").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat166(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat166(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div167").on('click', function () {
                $("#msg-op-conve167").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo167").on('click', function () {
                $("#msg-op-conve167").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send167").click(function () {
            $("#new_chat_form167").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form167").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat167(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat167(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div168").on('click', function () {
                $("#msg-op-conve168").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo168").on('click', function () {
                $("#msg-op-conve168").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send168").click(function () {
            $("#new_chat_form168").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form168").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat168(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat168(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div169").on('click', function () {
                $("#msg-op-conve169").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo169").on('click', function () {
                $("#msg-op-conve169").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send169").click(function () {
            $("#new_chat_form169").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form169").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat169(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat169(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div170").on('click', function () {
                $("#msg-op-conve170").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo170").on('click', function () {
                $("#msg-op-conve170").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send170").click(function () {
            $("#new_chat_form170").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form170").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat170(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat170(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div171").on('click', function () {
                $("#msg-op-conve171").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo171").on('click', function () {
                $("#msg-op-conve171").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send171").click(function () {
            $("#new_chat_form171").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form171").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat171(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat171(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div172").on('click', function () {
                $("#msg-op-conve172").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo172").on('click', function () {
                $("#msg-op-conve172").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send172").click(function () {
            $("#new_chat_form172").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form172").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat172(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat172(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div173").on('click', function () {
                $("#msg-op-conve173").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo173").on('click', function () {
                $("#msg-op-conve173").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send173").click(function () {
            $("#new_chat_form173").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form173").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat173(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat173(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div174").on('click', function () {
                $("#msg-op-conve174").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo174").on('click', function () {
                $("#msg-op-conve174").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send174").click(function () {
            $("#new_chat_form174").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form174").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat174(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat174(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div175").on('click', function () {
                $("#msg-op-conve175").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo175").on('click', function () {
                $("#msg-op-conve175").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send175").click(function () {
            $("#new_chat_form175").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form175").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat175(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat175(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div176").on('click', function () {
                $("#msg-op-conve176").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo176").on('click', function () {
                $("#msg-op-conve176").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send176").click(function () {
            $("#new_chat_form176").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form176").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat176(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat176(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div177").on('click', function () {
                $("#msg-op-conve177").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo177").on('click', function () {
                $("#msg-op-conve177").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send177").click(function () {
            $("#new_chat_form177").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form177").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat177(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat177(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div178").on('click', function () {
                $("#msg-op-conve178").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo178").on('click', function () {
                $("#msg-op-conve178").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send178").click(function () {
            $("#new_chat_form178").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form178").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat178(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat178(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div179").on('click', function () {
                $("#msg-op-conve179").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo179").on('click', function () {
                $("#msg-op-conve179").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send179").click(function () {
            $("#new_chat_form179").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form179").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat179(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat179(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div180").on('click', function () {
                $("#msg-op-conve180").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo180").on('click', function () {
                $("#msg-op-conve180").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send180").click(function () {
            $("#new_chat_form180").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form180").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat180(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat180(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div181").on('click', function () {
                $("#msg-op-conve181").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo181").on('click', function () {
                $("#msg-op-conve181").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send181").click(function () {
            $("#new_chat_form181").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form181").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat181(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat181(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div182").on('click', function () {
                $("#msg-op-conve182").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo182").on('click', function () {
                $("#msg-op-conve182").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send182").click(function () {
            $("#new_chat_form182").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form182").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat182(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat182(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div183").on('click', function () {
                $("#msg-op-conve183").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo183").on('click', function () {
                $("#msg-op-conve183").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send183").click(function () {
            $("#new_chat_form183").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form183").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat183(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat183(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div184").on('click', function () {
                $("#msg-op-conve184").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo184").on('click', function () {
                $("#msg-op-conve184").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send184").click(function () {
            $("#new_chat_form184").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form184").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat184(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat184(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div185").on('click', function () {
                $("#msg-op-conve185").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo185").on('click', function () {
                $("#msg-op-conve185").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send185").click(function () {
            $("#new_chat_form185").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form185").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat185(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat185(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div186").on('click', function () {
                $("#msg-op-conve186").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo186").on('click', function () {
                $("#msg-op-conve186").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send186").click(function () {
            $("#new_chat_form186").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form186").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat186(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat186(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div187").on('click', function () {
                $("#msg-op-conve187").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo187").on('click', function () {
                $("#msg-op-conve187").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send187").click(function () {
            $("#new_chat_form187").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form187").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat187(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat187(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div188").on('click', function () {
                $("#msg-op-conve188").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo188").on('click', function () {
                $("#msg-op-conve188").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send188").click(function () {
            $("#new_chat_form188").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form188").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat188(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat188(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div189").on('click', function () {
                $("#msg-op-conve189").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo189").on('click', function () {
                $("#msg-op-conve189").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send189").click(function () {
            $("#new_chat_form189").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form189").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat189(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat189(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div190").on('click', function () {
                $("#msg-op-conve190").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo190").on('click', function () {
                $("#msg-op-conve190").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send190").click(function () {
            $("#new_chat_form190").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form190").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat190(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat190(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div191").on('click', function () {
                $("#msg-op-conve191").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo191").on('click', function () {
                $("#msg-op-conve191").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send191").click(function () {
            $("#new_chat_form191").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form191").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat191(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat191(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div192").on('click', function () {
                $("#msg-op-conve192").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo192").on('click', function () {
                $("#msg-op-conve192").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send192").click(function () {
            $("#new_chat_form192").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form192").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat192(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat192(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div193").on('click', function () {
                $("#msg-op-conve193").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo193").on('click', function () {
                $("#msg-op-conve193").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send193").click(function () {
            $("#new_chat_form193").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form193").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat193(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat193(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div194").on('click', function () {
                $("#msg-op-conve194").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo194").on('click', function () {
                $("#msg-op-conve194").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send194").click(function () {
            $("#new_chat_form194").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form194").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat194(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat194(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div195").on('click', function () {
                $("#msg-op-conve195").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo195").on('click', function () {
                $("#msg-op-conve195").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send195").click(function () {
            $("#new_chat_form195").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form195").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat195(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat195(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div196").on('click', function () {
                $("#msg-op-conve196").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo196").on('click', function () {
                $("#msg-op-conve196").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send196").click(function () {
            $("#new_chat_form196").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form196").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat196(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat196(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div197").on('click', function () {
                $("#msg-op-conve197").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo197").on('click', function () {
                $("#msg-op-conve197").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send197").click(function () {
            $("#new_chat_form197").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form197").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat197(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat197(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div198").on('click', function () {
                $("#msg-op-conve198").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo198").on('click', function () {
                $("#msg-op-conve198").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send198").click(function () {
            $("#new_chat_form198").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form198").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat198(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat198(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div199").on('click', function () {
                $("#msg-op-conve199").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo199").on('click', function () {
                $("#msg-op-conve199").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send199").click(function () {
            $("#new_chat_form199").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form199").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat199(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat199(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div200").on('click', function () {
                $("#msg-op-conve200").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo200").on('click', function () {
                $("#msg-op-conve200").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send200").click(function () {
            $("#new_chat_form200").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form200").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat200(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat200(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div201").on('click', function () {
                $("#msg-op-conve201").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo201").on('click', function () {
                $("#msg-op-conve201").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send201").click(function () {
            $("#new_chat_form201").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form201").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat201(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat201(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div202").on('click', function () {
                $("#msg-op-conve202").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo202").on('click', function () {
                $("#msg-op-conve202").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send202").click(function () {
            $("#new_chat_form202").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form202").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat202(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat202(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div203").on('click', function () {
                $("#msg-op-conve203").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo203").on('click', function () {
                $("#msg-op-conve203").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send203").click(function () {
            $("#new_chat_form203").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form203").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat203(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat203(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div204").on('click', function () {
                $("#msg-op-conve204").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo204").on('click', function () {
                $("#msg-op-conve204").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send204").click(function () {
            $("#new_chat_form204").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form204").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat204(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat204(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div205").on('click', function () {
                $("#msg-op-conve205").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo205").on('click', function () {
                $("#msg-op-conve205").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send205").click(function () {
            $("#new_chat_form205").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form205").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat205(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat205(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div206").on('click', function () {
                $("#msg-op-conve206").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo206").on('click', function () {
                $("#msg-op-conve206").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send206").click(function () {
            $("#new_chat_form206").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form206").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat206(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat206(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div207").on('click', function () {
                $("#msg-op-conve207").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo207").on('click', function () {
                $("#msg-op-conve207").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send207").click(function () {
            $("#new_chat_form207").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form207").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat207(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat207(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div208").on('click', function () {
                $("#msg-op-conve208").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo208").on('click', function () {
                $("#msg-op-conve208").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send208").click(function () {
            $("#new_chat_form208").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form208").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat208(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat208(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div209").on('click', function () {
                $("#msg-op-conve209").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo209").on('click', function () {
                $("#msg-op-conve209").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send209").click(function () {
            $("#new_chat_form209").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form209").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat209(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat209(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div210").on('click', function () {
                $("#msg-op-conve210").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo210").on('click', function () {
                $("#msg-op-conve210").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send210").click(function () {
            $("#new_chat_form210").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form210").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat210(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat210(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div211").on('click', function () {
                $("#msg-op-conve211").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo211").on('click', function () {
                $("#msg-op-conve211").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send211").click(function () {
            $("#new_chat_form211").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form211").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat211(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat211(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div212").on('click', function () {
                $("#msg-op-conve212").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo212").on('click', function () {
                $("#msg-op-conve212").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send212").click(function () {
            $("#new_chat_form212").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form212").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat212(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat212(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div213").on('click', function () {
                $("#msg-op-conve213").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo213").on('click', function () {
                $("#msg-op-conve213").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send213").click(function () {
            $("#new_chat_form213").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form213").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat213(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat213(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div214").on('click', function () {
                $("#msg-op-conve214").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo214").on('click', function () {
                $("#msg-op-conve214").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send214").click(function () {
            $("#new_chat_form214").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form214").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat214(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat214(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div215").on('click', function () {
                $("#msg-op-conve215").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo215").on('click', function () {
                $("#msg-op-conve215").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send215").click(function () {
            $("#new_chat_form215").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form215").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat215(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat215(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div216").on('click', function () {
                $("#msg-op-conve216").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo216").on('click', function () {
                $("#msg-op-conve216").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send216").click(function () {
            $("#new_chat_form216").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form216").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat216(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat216(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div217").on('click', function () {
                $("#msg-op-conve217").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo217").on('click', function () {
                $("#msg-op-conve217").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send217").click(function () {
            $("#new_chat_form217").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form217").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat217(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat217(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div218").on('click', function () {
                $("#msg-op-conve218").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo218").on('click', function () {
                $("#msg-op-conve218").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send218").click(function () {
            $("#new_chat_form218").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form218").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat218(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat218(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div219").on('click', function () {
                $("#msg-op-conve219").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo219").on('click', function () {
                $("#msg-op-conve219").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send219").click(function () {
            $("#new_chat_form219").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form219").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat219(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat219(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div220").on('click', function () {
                $("#msg-op-conve220").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo220").on('click', function () {
                $("#msg-op-conve220").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send220").click(function () {
            $("#new_chat_form220").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form220").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat220(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat220(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div221").on('click', function () {
                $("#msg-op-conve221").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo221").on('click', function () {
                $("#msg-op-conve221").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send221").click(function () {
            $("#new_chat_form221").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form221").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat221(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat221(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div222").on('click', function () {
                $("#msg-op-conve222").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo222").on('click', function () {
                $("#msg-op-conve222").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send222").click(function () {
            $("#new_chat_form222").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form222").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat222(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat222(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div223").on('click', function () {
                $("#msg-op-conve223").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo223").on('click', function () {
                $("#msg-op-conve223").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send223").click(function () {
            $("#new_chat_form223").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form223").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat223(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat223(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div224").on('click', function () {
                $("#msg-op-conve224").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo224").on('click', function () {
                $("#msg-op-conve224").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send224").click(function () {
            $("#new_chat_form224").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form224").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat224(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat224(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div225").on('click', function () {
                $("#msg-op-conve225").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo225").on('click', function () {
                $("#msg-op-conve225").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send225").click(function () {
            $("#new_chat_form225").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form225").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat225(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat225(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div226").on('click', function () {
                $("#msg-op-conve226").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo226").on('click', function () {
                $("#msg-op-conve226").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send226").click(function () {
            $("#new_chat_form226").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form226").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat226(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat226(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div227").on('click', function () {
                $("#msg-op-conve227").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo227").on('click', function () {
                $("#msg-op-conve227").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send227").click(function () {
            $("#new_chat_form227").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form227").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat227(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat227(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div228").on('click', function () {
                $("#msg-op-conve228").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo228").on('click', function () {
                $("#msg-op-conve228").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send228").click(function () {
            $("#new_chat_form228").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form228").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat228(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat228(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div229").on('click', function () {
                $("#msg-op-conve229").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo229").on('click', function () {
                $("#msg-op-conve229").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send229").click(function () {
            $("#new_chat_form229").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form229").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat229(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat229(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div230").on('click', function () {
                $("#msg-op-conve230").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo230").on('click', function () {
                $("#msg-op-conve230").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send230").click(function () {
            $("#new_chat_form230").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form230").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat230(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat230(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div231").on('click', function () {
                $("#msg-op-conve231").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo231").on('click', function () {
                $("#msg-op-conve231").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send231").click(function () {
            $("#new_chat_form231").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form231").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat231(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat231(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div232").on('click', function () {
                $("#msg-op-conve232").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo232").on('click', function () {
                $("#msg-op-conve232").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send232").click(function () {
            $("#new_chat_form232").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form232").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat232(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat232(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div233").on('click', function () {
                $("#msg-op-conve233").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo233").on('click', function () {
                $("#msg-op-conve233").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send233").click(function () {
            $("#new_chat_form233").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form233").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat233(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat233(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div234").on('click', function () {
                $("#msg-op-conve234").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo234").on('click', function () {
                $("#msg-op-conve234").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send234").click(function () {
            $("#new_chat_form234").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form234").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat234(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat234(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div235").on('click', function () {
                $("#msg-op-conve235").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo235").on('click', function () {
                $("#msg-op-conve235").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send235").click(function () {
            $("#new_chat_form235").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form235").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat235(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat235(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div236").on('click', function () {
                $("#msg-op-conve236").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo236").on('click', function () {
                $("#msg-op-conve236").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send236").click(function () {
            $("#new_chat_form236").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form236").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat236(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat236(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div237").on('click', function () {
                $("#msg-op-conve237").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo237").on('click', function () {
                $("#msg-op-conve237").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send237").click(function () {
            $("#new_chat_form237").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form237").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat237(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat237(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div238").on('click', function () {
                $("#msg-op-conve238").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo238").on('click', function () {
                $("#msg-op-conve238").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send238").click(function () {
            $("#new_chat_form238").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form238").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat238(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat238(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div239").on('click', function () {
                $("#msg-op-conve239").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo239").on('click', function () {
                $("#msg-op-conve239").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send239").click(function () {
            $("#new_chat_form239").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form239").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat239(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat239(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div240").on('click', function () {
                $("#msg-op-conve240").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo240").on('click', function () {
                $("#msg-op-conve240").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send240").click(function () {
            $("#new_chat_form240").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form240").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat240(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat240(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div241").on('click', function () {
                $("#msg-op-conve241").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo241").on('click', function () {
                $("#msg-op-conve241").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send241").click(function () {
            $("#new_chat_form241").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form241").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat241(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat241(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div242").on('click', function () {
                $("#msg-op-conve242").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo242").on('click', function () {
                $("#msg-op-conve242").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send242").click(function () {
            $("#new_chat_form242").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form242").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat242(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat242(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div243").on('click', function () {
                $("#msg-op-conve243").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo243").on('click', function () {
                $("#msg-op-conve243").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send243").click(function () {
            $("#new_chat_form243").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form243").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat243(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat243(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div244").on('click', function () {
                $("#msg-op-conve244").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo244").on('click', function () {
                $("#msg-op-conve244").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send244").click(function () {
            $("#new_chat_form244").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form244").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat244(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat244(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div245").on('click', function () {
                $("#msg-op-conve245").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo245").on('click', function () {
                $("#msg-op-conve245").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send245").click(function () {
            $("#new_chat_form245").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form245").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat245(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat245(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div246").on('click', function () {
                $("#msg-op-conve246").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo246").on('click', function () {
                $("#msg-op-conve246").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send246").click(function () {
            $("#new_chat_form246").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form246").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat246(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat246(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div247").on('click', function () {
                $("#msg-op-conve247").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo247").on('click', function () {
                $("#msg-op-conve247").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send247").click(function () {
            $("#new_chat_form247").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form247").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat247(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat247(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div248").on('click', function () {
                $("#msg-op-conve248").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo248").on('click', function () {
                $("#msg-op-conve248").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send248").click(function () {
            $("#new_chat_form248").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form248").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat248(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat248(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div249").on('click', function () {
                $("#msg-op-conve249").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo249").on('click', function () {
                $("#msg-op-conve249").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send249").click(function () {
            $("#new_chat_form249").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form249").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat249(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat249(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div250").on('click', function () {
                $("#msg-op-conve250").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo250").on('click', function () {
                $("#msg-op-conve250").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send250").click(function () {
            $("#new_chat_form250").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form250").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat250(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat250(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div251").on('click', function () {
                $("#msg-op-conve251").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo251").on('click', function () {
                $("#msg-op-conve251").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send251").click(function () {
            $("#new_chat_form251").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form251").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat251(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat251(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div252").on('click', function () {
                $("#msg-op-conve252").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo252").on('click', function () {
                $("#msg-op-conve252").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send252").click(function () {
            $("#new_chat_form252").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form252").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat252(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat252(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div253").on('click', function () {
                $("#msg-op-conve253").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo253").on('click', function () {
                $("#msg-op-conve253").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send253").click(function () {
            $("#new_chat_form253").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form253").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat253(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat253(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div254").on('click', function () {
                $("#msg-op-conve254").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo254").on('click', function () {
                $("#msg-op-conve254").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send254").click(function () {
            $("#new_chat_form254").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form254").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat254(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat254(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div255").on('click', function () {
                $("#msg-op-conve255").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo255").on('click', function () {
                $("#msg-op-conve255").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send255").click(function () {
            $("#new_chat_form255").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form255").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat255(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat255(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div256").on('click', function () {
                $("#msg-op-conve256").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo256").on('click', function () {
                $("#msg-op-conve256").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send256").click(function () {
            $("#new_chat_form256").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form256").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat256(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat256(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div257").on('click', function () {
                $("#msg-op-conve257").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo257").on('click', function () {
                $("#msg-op-conve257").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send257").click(function () {
            $("#new_chat_form257").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form257").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat257(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat257(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div258").on('click', function () {
                $("#msg-op-conve258").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo258").on('click', function () {
                $("#msg-op-conve258").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send258").click(function () {
            $("#new_chat_form258").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form258").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat258(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat258(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div259").on('click', function () {
                $("#msg-op-conve259").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo259").on('click', function () {
                $("#msg-op-conve259").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send259").click(function () {
            $("#new_chat_form259").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form259").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat259(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat259(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div260").on('click', function () {
                $("#msg-op-conve260").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo260").on('click', function () {
                $("#msg-op-conve260").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send260").click(function () {
            $("#new_chat_form260").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form260").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat260(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat260(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div261").on('click', function () {
                $("#msg-op-conve261").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo261").on('click', function () {
                $("#msg-op-conve261").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send261").click(function () {
            $("#new_chat_form261").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form261").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat261(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat261(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div262").on('click', function () {
                $("#msg-op-conve262").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo262").on('click', function () {
                $("#msg-op-conve262").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send262").click(function () {
            $("#new_chat_form262").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form262").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat262(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat262(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div263").on('click', function () {
                $("#msg-op-conve263").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo263").on('click', function () {
                $("#msg-op-conve263").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send263").click(function () {
            $("#new_chat_form263").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form263").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat263(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat263(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div264").on('click', function () {
                $("#msg-op-conve264").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo264").on('click', function () {
                $("#msg-op-conve264").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send264").click(function () {
            $("#new_chat_form264").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form264").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat264(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat264(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div265").on('click', function () {
                $("#msg-op-conve265").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo265").on('click', function () {
                $("#msg-op-conve265").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send265").click(function () {
            $("#new_chat_form265").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form265").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat265(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat265(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div266").on('click', function () {
                $("#msg-op-conve266").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo266").on('click', function () {
                $("#msg-op-conve266").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send266").click(function () {
            $("#new_chat_form266").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form266").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat266(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat266(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div267").on('click', function () {
                $("#msg-op-conve267").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo267").on('click', function () {
                $("#msg-op-conve267").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send267").click(function () {
            $("#new_chat_form267").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form267").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat267(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat267(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div268").on('click', function () {
                $("#msg-op-conve268").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo268").on('click', function () {
                $("#msg-op-conve268").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send268").click(function () {
            $("#new_chat_form268").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form268").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat268(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat268(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div269").on('click', function () {
                $("#msg-op-conve269").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo269").on('click', function () {
                $("#msg-op-conve269").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send269").click(function () {
            $("#new_chat_form269").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form269").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat269(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat269(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div270").on('click', function () {
                $("#msg-op-conve270").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo270").on('click', function () {
                $("#msg-op-conve270").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send270").click(function () {
            $("#new_chat_form270").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form270").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat270(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat270(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div271").on('click', function () {
                $("#msg-op-conve271").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo271").on('click', function () {
                $("#msg-op-conve271").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send271").click(function () {
            $("#new_chat_form271").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form271").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat271(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat271(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div272").on('click', function () {
                $("#msg-op-conve272").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo272").on('click', function () {
                $("#msg-op-conve272").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send272").click(function () {
            $("#new_chat_form272").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form272").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat272(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat272(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div273").on('click', function () {
                $("#msg-op-conve273").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo273").on('click', function () {
                $("#msg-op-conve273").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send273").click(function () {
            $("#new_chat_form273").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form273").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat273(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat273(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div274").on('click', function () {
                $("#msg-op-conve274").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo274").on('click', function () {
                $("#msg-op-conve274").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send274").click(function () {
            $("#new_chat_form274").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form274").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat274(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat274(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div275").on('click', function () {
                $("#msg-op-conve275").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo275").on('click', function () {
                $("#msg-op-conve275").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send275").click(function () {
            $("#new_chat_form275").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form275").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat275(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat275(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div276").on('click', function () {
                $("#msg-op-conve276").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo276").on('click', function () {
                $("#msg-op-conve276").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send276").click(function () {
            $("#new_chat_form276").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form276").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat276(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat276(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div277").on('click', function () {
                $("#msg-op-conve277").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo277").on('click', function () {
                $("#msg-op-conve277").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send277").click(function () {
            $("#new_chat_form277").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form277").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat277(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat277(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div278").on('click', function () {
                $("#msg-op-conve278").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo278").on('click', function () {
                $("#msg-op-conve278").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send278").click(function () {
            $("#new_chat_form278").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form278").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat278(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat278(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div279").on('click', function () {
                $("#msg-op-conve279").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo279").on('click', function () {
                $("#msg-op-conve279").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send279").click(function () {
            $("#new_chat_form279").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form279").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat279(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat279(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div280").on('click', function () {
                $("#msg-op-conve280").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo280").on('click', function () {
                $("#msg-op-conve280").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send280").click(function () {
            $("#new_chat_form280").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form280").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat280(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat280(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div281").on('click', function () {
                $("#msg-op-conve281").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo281").on('click', function () {
                $("#msg-op-conve281").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send281").click(function () {
            $("#new_chat_form281").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form281").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat281(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat281(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div282").on('click', function () {
                $("#msg-op-conve282").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo282").on('click', function () {
                $("#msg-op-conve282").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send282").click(function () {
            $("#new_chat_form282").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form282").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat282(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat282(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div283").on('click', function () {
                $("#msg-op-conve283").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo283").on('click', function () {
                $("#msg-op-conve283").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send283").click(function () {
            $("#new_chat_form283").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form283").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat283(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat283(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends


    </script>
        <script>
        $(document).ready(function () {
            $("#chat-box-div284").on('click', function () {
                $("#msg-op-conve284").addClass("msg-sho-act");
                setTimeout(function () {
                    var d = $(".chat-box-messages");
                    d.scrollTop(d[0].scrollHeight);
                }, 1);
            });
            $("#comm-msg-pop-clo284").on('click', function () {
                $("#msg-op-conve284").removeClass("msg-sho-act");
            });

        });

    </script>
    <script>

        //
        <!--Message New Chat Form Ajax Call And Validation starts-->

        $("#chat_send284").click(function () {
            $("#new_chat_form284").validate({
                rules: {
                    chat_to_user: {required: true},
                    chat_message: {required: true}

                },
                messages: {

                    chat_to_user: {required: "Choose User"},
                    chat_message: {required: "Type Something.."}
                },

                submitHandler: function (form) { // for demo
                    //form.submit();
                    $.ajax({
                        type: "POST",
                        data: $("#new_chat_form284").serialize(),
                        url: "chat_submit.php",
                        cache: true,
                        success: function (data) {
                            var success = $.parseJSON(data);
                            if (data != null) {
                                updateChat284(success.sender23, success.receiver);
                                $('input[type="text"],textarea').val('');
                            } else {
                                $('input[type="text"],textarea').val('');
                            }

                        }

                    })
                }
            });
        });
        <!--Message New Chat Form Ajax Call And Validation ends-->

        // Update Chat Box function starts

        function updateChat284(sender, receiver) {
            var sender_checklist = "&sender_id=" + sender;
            var receiver_checklist = "&receiver_id=" + receiver;
            var main_string = sender_checklist + receiver_checklist;
            main_string = main_string.substring(1, main_string.length);

            $.ajax({
                type: "POST",
                url: 'filter_chat.php',
                data: main_string,
                cache: false,
                success: function (html) {
                    //alert(html);
                    $(".chat-box-messages").html(html);
                    $(".chat-box-messages").css("opacity", 1);
                    setTimeout(function () {
                        var d = $(".chat-box-messages");
                        d.scrollTop(d[0].scrollHeight);
                    }, 1);
                    // $("#loaderID").css("opacity",0);
                }
            });
        }

        // Update Chat Box function Ends
</script>