<?php
session_start(); 
?>
<!DOCTYPE html>
<html>

    <head>
        <title> Live Cooking </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!--   <link type="text/css" rel="stylesheet" href="./jQuery-TE_v.1.4.0/demo/demo.css"> -->

        <link rel="icon" type="image/ico" href="images/favicon.ico">
        
        <meta charset="UTF-8">
        <script src="jquery/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="./jquery-ui-1.11.2.custom/jquery-ui.css">
        <script src="./jquery-ui-1.11.2.custom/jquery-ui.js"></script>
    
        <link rel="stylesheet" type="text/css" href="page_layout.css">
        <script type="text/javascript" src="page_layout.js"></script>
        
        <link rel="stylesheet" type="text/css" href="globalwidgets.css">
        <script type="text/javascript" src="globalwidgets.js"></script>
        
       
        <style>
            
            .maincolumn{
                //background-color: #F5FCFF;
                padding-left: 10px;
                width: 1000px;
            }
            
            .header{
                text-align: center;
                font-size: 30px;
                font-weight: bold;
                padding: 5px;
            }
            
            hr{
                border-width: 3px;
                border-color: black;
            }
            .maincaption{
                width: 100%;
                height: auto;
                background-color: #F5F5DC;
            }
            
            .firstsection{
                position: relative;
                float: left;
                margin-left: 50px;
                height: auto;
                width: 100%;
            }
            .mainarticle{
                position: relative;
                float: left;
               // background-color: orange;
                border: 1pt black solid;
                width: 600px;
            }
            
            .cellmodel{
                width: 140px;
                margin: 10px;
            }
            
            .modelimgparent{
                width: 140px;
                overflow: hidden;
                position: relative;
            }
            
            .modelimg{
                display: block;
                height: 140px;
                margin-left: 50%;
                transform: translateX(-50%);
            }
            
            .catarticles{
                background-color: white;
                border: 1px black solid;
                width: 290px;
                height: auto;
                float: left;
                position: relative;
                margin-right: 20px;
                overflow: hidden;
            }
            
            .catarticles a{
                color: blue;
                text-decoration: none;
                font-weight: bold;
            }
            
            .catarticles ul{
                list-style-type: none;
                padding-left: 15px;
            }
            
            .catarticles li:hover{
                text-decoration: underline;
            }
            .categories{
                display: block;
                clear: both;
                overflow: auto;
            }
            
            .maincategoryheader{
                clear: both;
                display: block;
                text-align: center;
                margin-bottom: 10px;
                background: #A51C30;
                color: white;
                width: 995px;
                font-size: 25px;
                font-family: arial;
            }
            .catheader{
                margin-left: 10px;
                font-weight: bold;
                font-size: 16px;
                color: black;
                text-decoration: underline;
            }
            
            .catheader a{
                color: black;
            }
            
            
            .adescription{
                font-size: 13px;
            }
            

            .articlelist{
                border: 1pt black solid;
                position: relative;
                float: left;
                width: 370px;
                height: 295px;
                background-color: white;
                margin-left: 20px;
                padding-top: 5px;
                padding-bottom: 0px;
                padding-left: 2px;
                overflow: auto;
            }
            
            .articlelist ol{
                padding-left: 30px;
                margin-top: 10px;
                margin-bottom: 2px;
            }
            
            .articlelist li{
                margin-bottom: 3px;
            }
            
            .articlelist a{
                color: blue;
                text-decoration: none;
                font-weight: bold;
            }
            
            .trendingtitle {
                float:left;
                text-decoration: underline;
                font-weight: bold;
                margin-left: 20px;
            }
            
            .secondsection{
                position: relative;
                float: left;
                margin-left: 20px;
                margin-top: 30px;
                height: auto;
                width: 100%;
            }
            
            .secondsection img{
                width: 450px;
                height: 200px;
            }
            .secondarticle{
                position: relative;
                float: left;
                background-color: green;
                border: 1pt black solid;
                width: 450px;
            }
            
            .caption{
                width: 100%;
                height: auto;
                background-color: #F5F5DC;
            }
            
            .thirdarticle{
                position: relative;
                float : right;
                background-color: blue;
                border: 1pt black solid;
                width: 450px;
            }
            
            .mainarticle a, .secondarticle a, .thirdarticle a{
                text-decoration: none;
                color: black;
            }
            
            .storyline{
                width: 995px;
                height: auto;
                background-color: white;
                float: left;
                display: block;
                position: relative;
                margin-top: 20px;
            }
            
            .mainstorylineheader{
                clear: both;
                display: block;
                text-align: center;
                margin-bottom: 10px;
                background: #000000;
                color: white;
                width: 995px;
                font-size: 25px;
                font-family: arial;
            }
            

            
            
            .story{
                border: 1px solid black;
                margin-bottom: 20px;
            }
            
            .story .secdescription{
                margin-left: 10px;
                width: 80%;
                float: left;
            }
            
            .story .secdescriptionnoimage{
                margin-left: 5px;
                margin-right: 10px;
                width: 100%;
                max-height: 200px;
                overflow: hidden;
                float: left;
            }
            
            .secdescriptionnoimage p{
                margin-top: 5px;
                margin-bottom: 5px;
            }
            .story .secdescription figure{
                display: none;
            }
            
            .story .secdescription img{
                display: none;
            }
            
            .story .atopheader{
                position: relative;
                float: left;
                width: 995px;
                height: auto;
            }
            .story .asectionheader{
                font-size: 20px;
                font-weight: bold;
                margin-top: 5px;
                color: black;
                display: inline;
            }   
            
            .story .articledescription {
                font-size: 16px;
                font-weight: bold;
                color: black;

            }
            
            .story a{
                color: black;
                text-decoration: none;
            }
            .articlesection{
                height: auto;
                overflow: hidden;
                padding: 5px;
            }
            
            
            .serieslink{
                font-weight: bold;
                float: left;
                font-style: italic;
                margin-left: 10px;
            }
            
            .articlesectionfooter{
                height: 20px;
                width: 100%;
                border: 1px gainsboro solid;
            }
            
            .articlesectionfooter span{
                float: right;
                margin-right: 20px;
                color: gray;
                font-size: 15px;
            }
            .imgfigure{
                float: left;
             //   border: 1px black solid;
                max-height: 200px;
                display: block;
                clear: both;
            }
            
            .imgfigure img{
                height: 100px;
                width: 100px;
                margin: 10px;
                border: 1px black solid;
                
            }           
            
            .navigation{
                margin-bottom: 5px;
            }
            .navigation a{
                margin-right: 20px;
                font-size: 20px;
                color: blue;
            }
            
            .survey{
                width: 100%;
                max-height:450px;
                overflow: hidden;
            }
            
            .survey_question{
                float: left;
                font-family: "Times New Roman", Times, serif;
                width: 100%;
                font-size: 30px;
                border-bottom: 1pt black solid;
                position: relative;
                    
            }
            
            .questiontext{
                float: left;
                padding: 18px;
                text-align: center;
            }
            
            .survey_choices{
                float: left;
                width: 925px;
                padding: 5px;
                border-bottom: 1pt black solid;
                position: relative;
            }
            

            
            .survey_result{
                float: left;
                width: 100%;
                border: 1pt black solid;
                text-align: center;
                font-family: "Times New Roman", Times, serif;
                font-size: 20px;
                font-weight:  bold;
                color: blue;
            }
            
            .survey_profile{
                float: right;
                border-left: 1px black solid;
                font-size: 14px;
                padding: 10px;
                text-align: center;
            }
            
            .survey_profile img{
                height: 50px;
                width: 50px;
            }
            
            .displayresults{
                text-align: center;
                display: block;
                padding: 5px;
            }
            
            .displayresults img{
                height: 300px;
            }
            .story .arrow {
                font-size:15px ;
             //   line-height:0% ;
                position: absolute ;
                bottom: 0px ;
                right: 0px;
            }
            
            .story .arrow:hover{
                color:blue;
            }
            
            .story .surveymenu{
                position: relative;
                float: right;
                height: 30px;
                width: 150px;
            }
            .story .survey_top_sub-menu {
                width:80px;
                text-align: center;
                padding:1px 0px;
                position:absolute;
                left: 70px;
                top:40%;
                z-index:-1;
                opacity:0;
                transition:opacity linear 0.15s;
                box-shadow:0px 2px 3px rgba(0,0,0,0.2);
                background:black;
                color: white;
            }

            .story .survey_top_sub-menu li {
                display:block;
                font-size:16px;
            }
            
            .story .survey_top_sub-menu li:hover {
                background-color: green;
                text-decoration: none;
            }
            
            
            div.celldesc {
                text-align: left;
                //    border: 1px black solid;
                //   height: 250px;
                font-weight: normal;
                width: auto;
                min-width: 200px;
                max-width: 300px;

                
                font-family: "Comic Sans MS", "Comic Sans", Times;
                font-size: 12px;
                display: inline-block;
            }
            
            table.slidetable{
                //  border: 1px solid yellow;
                //   width: 100%;
                //  display: inline-block;
                height: auto;
                border-collapse: collapse;
                margin: 5px;
            }

            table.slidetable td{
                padding-right: 10px;
                width: auto;
                //    border: 1px solid blue;
            }
            
            table.slidecell{
                height: 100%;
                border: 2px solid black;
                //   border-collapse: collapse;
            }
            table.slidecell td{
                padding: 2px;
                text-align: center;
                //border: 2px solid black;
                height: 100%;
                // width: 100%;
                text-align: center;
                // border: 1px solid yellow;
                //  padding: 20px;
                //   width: 25%;
            }

            table.slidecell img.pic, table.slidecell video.pic{
                width: auto;
                height: auto;
                max-height: 300px;
                max-width: 300px;
            }
            
            div.celldesc {
                text-align: left;
                //    border: 1px black solid;
                //   height: 250px;
                font-weight: normal;
                width: auto;
                min-width: 200px;
                max-width: 300px;

                
                font-family: "Comic Sans MS", "Comic Sans", Times;
                font-size: 12px;
                display: inline-block;
            }
            
            .cellcaption{
                display: flex;
            }
            
            .cellcaption div{
                flex-grow: 1;
                width: 0;
                word-wrap: break-word;
            }
            
            .cellimg{
                position: relative;
            }
            
            .mussymbol{
                height: 30px;
                width: 30px;
                position: absolute;
                bottom: 0px;
                right: 0px;
                margin: 0px;
            }
            
            .topicsection{
                width: 1000px;
                display: flex;
                flex-wrap: wrap;
            }
            
            .cellepi{
                width: 140px;
                margin: 10px;
            }
            
            .cellepi a{
                text-decoration: none;
            }
            

            
            .imgparent{
                width: 220px;
                overflow: hidden;
                position: relative;
            }
            
            .epiimg{
                display: block;
                height: 220px;
                margin-left: 50%;
                transform: translateX(-50%);
            }
            .cellepititle{
                color: black;
                font-weight: bold;
            }
            
            .cellepicreator{
                display: block;
                font-size: 12px;
                color: blue;
            }
            .topicheader, .topicheader a{
                font-size: 22px;
                font-weight: bold;
                margin-top: 10px;
                margin-bottom: 10px;
                color: darkred;
                text-decoration: underline;
            }
            
            .catheader, .catheader a{
                font-size: 18px;
                font-weight: bold;
                margin-top: 10px;
                margin-bottom: 10px;
                color: black;
                text-decoration: none;
            }
            
            
            .previdsymbol{
                height: 20px;
                width: 20px;
                position: absolute;
                bottom: 0px;
                right: 5px;
                margin: 0px;
            }
            
            .vidsymbol{
                height: 30px;
                width: 30px;
                position: absolute;
                bottom: 0px;
                right: 5px;
                margin: 0px;
            }
            .cellepimeta{
                display: block;
                font-size: 12px;
                color: gray;
            }
            
            /* css for requests */
            
            .requestsection{
                display: flex;
                flex-wrap: wrap;
            }
            .reqpreview{
                width: 220px;
                height: 220px;
                border: 2px solid;
                border-color: #000;
                overflow: hidden;
                position: relative;
            }
            
            .reqpreview .imgpreview{
                height: 220px;
                width: 220px;
                margin-left: 50%;
                transform: translateX(-50%);
            }
            
            .reqpreview video{
                height: 220px;
                width: 220px;
                margin-left: 50%;
                transform: translateX(-50%);
            }
            .reqpreview audio{
                margin-top: 40%;
                margin-left: 50%;
                transform: translateX(-50%);
            }
            .requestitem{

                margin-right: 10px;
                margin-bottom: 10px;
                max-width: 230px;
            }
            
            .requestitem a{
                text-decoration: none;
            }
            .sumtext{
                font-size: 15px;
                font-style: italic;
                height: 55px;
                overflow: hidden;
            }
            
            .creuser{
                color: blue;
            }
            
            .requser{
                color: black;
                text-decoration: none;
                font-style: italic;
                clear: left;
                display: block;
                font-size: 12px;
            }
            
            .reqdate{
                font-size: 12px;
            }
            
            .upperpart{
                padding: 5px;
                max-height: 110px;
            }
            
            .reqvidsymbol{
                position: absolute;
                bottom: 10px;
                left: 90px;
                height: 40px;
                width: 40px;
            }
            
            .reqmussymbol{
                position: absolute;
                bottom: 70px;
                left: 60px;
                height: 80px;
                width: 80px;
            }
            
            .previewtext{
                color: black;
                margin-top: 60px;
                margin-left: 50%;
                transform: translateX(-50%);
                font-style: italic;
                width: 200px;
                text-align: center;
            }
            
            /* for display media on screen */
            .cellcaption{
                display: flex;
            }
            
            .cellcaption div{
                flex-grow: 1;
                width: 0;
                word-wrap: break-word;
            }
            
            #dialog-displayslide img{
              width: auto;
              height: auto;
              max-width: 100%;
              max-height: 80vh;
              position: relative;
            //  margin-top: 30%;
            }
            
            #dialog-displayslide{
                overflow: hidden;
                display: inline-block;
            }
            
            .ui-dialog{
                text-align: center;
            }
            
            .ui-dialog,.ui-widget, .ui-widget-content, .ui-corner-all, .foo, .ui-draggable, .ui-resizable {
              //  background:black !important;
                border: none;
            }
            
            .commenttext .ui-widget-content{
                border: 1px solid #aaaaaa;
            }
            .ui-widget-overlay, ui-front{
                background: none;
                background-color: black;
                opacity: .7;
            }
            
            #dialog-displayslide .fullcaption{
                display: flex;
                border: 1px black solid;
                padding: 5px;
                background-color: white;
            }
            
            .fullcaption div{
                flex-grow: 1;
                width: 0;
                word-wrap: break-word;
                font-size: 16px;
                overflow: auto;
            }
            
            .centerme{
                position: relative;
                top: 50%;
                transform: translateY(-50%);
            }
            
            .cellimg{
                position: relative;
            }
            
            .bannersection{
                margin-top: 5px;
                width: 1000px;
                height: 800px;
                background-image: url("images/mainintrobanner.jpg");
            }

            
            a:active, a:focus {
            outline: 0;
            border: none;
            -moz-outline-style: none;
          }
          
          .speakerdesc{
              font-size: 12px;
          }
          
          .centertitle, .centertitle a{
              font-size: 22px;
              font-weight: bold;
              color: darkred;
              text-decoration: underline;
          }
          
          .payperviewbutton {
            border: 2px darkblue solid;
            border-radius: 10px;
            width: 180px;
            position: relative;
            float: left;
            margin-left: 10px;
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 20px;
            padding-bottom: 5px;
            font-size: 16px;
            color: black;
            text-align: center;
            margin-top: 10px;
        }
        
        .showtype {
            font-size: 16px;
            font-style: italic;
            color: black;
        }
        
        .ticketprice {
            color: darkorange;
        }
        
        .redtext {
            color: red;
        }
        
        .fgoals {
            font-weight: normal;
        }
        
        .chattopic {
            font-style: italic;
            display: block;
            clear: right;
        }
        
        .privateentry {
            color: black;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        .userlist {
            color: black;
            max-height: 500px;
            overflow: auto;
            margin-top: 10px;
            margin-bottom: 10px;
            font-size: 14px;
        }
        
        .showstarted{
            color: green;
            font-weight: bold;
            display: block;
            clear: left;
        }
        
        .speakername{
            display: block;
            margin-top: 10px;
            font-weight: bold;
            font-size: 14px;
            color: blue;
        }
        
        .speakerlogo{
            width: 60px;
            height: 60px;
        }
        
        .stdbutton {
            border: 2px green solid;
            border-radius: 10px;
            width: 180px;
            position: relative;
            float: left;
            margin-left: 10px;
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 20px;
            padding-bottom: 5px;
            font-size: 16px;
            color: black;
            text-align: center;
            margin-top: 10px;
        }
        
        hr{
            border-style: solid;
        }
        
        .roompreview{
            max-width: 180px;
            max-height: 180px;
            clear:right;
            clear: left;
            display: block;
            margin: 0 auto;
        }
        
        .greentext{
            color: green;
        }
        
        </style>
        
        <script>
            $(document).ready(function () {
                
                var globalsurveyid = "";
                var globalarticleid = "";
                var globalsectionid = "";
                
               
               
                
                $(".maincolumn").on("click", ".celldesc img", function () {
                    var img = $(this).attr("src");
                    var highres = img.replace("-midres.jpg", "-highres.jpg");
                    var caption = $(this).parent().siblings(".cellcaption").text();
                    var audiourl = $(this).parent().parent().data("audiourl");
                    
                    var content = "<div id='dialog-displayslide'><div class='centerme'><div><img src=" + highres + "></div>";
                    
                    if($.trim(caption) !== ''){
                        content = content + "<div class='fullcaption'><div>" + caption + "</div><audio src='" + audiourl + "' autoplay></audio></div></div></div>";
                    }
                    else{
                         content = content + "<audio src='" + audiourl + "' autoplay></audio></div></div>";
                    }
                   // popup("testing", content);
                    
                    if($("#dialog-displayslide").length === 0){
                             $(".maincolumn").append(content);
                         }

                         dialog = $( "#dialog-displayslide" ).dialog({
                              autoOpen: false,
                              height: window.innerHeight,
                              width: window.innerWidth *.75,
                              modal: true,
                              buttons: {
                              },
                              close: function() {
                                  $("#dialog-displayslide").remove();
                              },
                              position: {
                                  my: "center top",
                                  at: "center top"
                              }
                         });

                         $("#dialog-displayslide").dialog("open");
                         $("#dialog-displayslide").siblings(".ui-dialog-titlebar").remove();
                         if(audiourl !== ""){
                             $("#dialog-displayslide").find("audio").get(0).play();
                         }
                         $(document).on( "mouseup", function( event ) {
                             switch (event.which) {
                                     case 1:
                                       // alert('Left Mouse button pressed.');
                                    //    $("#dialog-displayslide").remove();
                                        var container = $("#dialog-displayslide");

                                        // if the target of the click isn't the container nor a descendant of the container
                                        if (!container.is(event.target) && container.has(event.target).length === 0) 
                                        {
                                            dialog.dialog( "close" );
                                            $("#dialog-displayslide").remove();
                                            $(document).off("mouseup");
                                        }
                                        break;
                                    case 2:
                                        //alert('Middle Mouse button pressed.');
                                        break;
                                    case 3:
                                        //alert('Right Mouse button pressed.');
                                        break;
                                    default:
                                    //    alert('You have a strange Mouse!');
                             }
                             
                             //alert("yo");
                          });
                         //$("#dialog-formreport" ).dialog( "option", "height", 250 );
                         
                   // $("body").append("<div class='fullsizedisplay'><img src=" + highres + "></div>");
                });
                
                $(".maincolumn").on("click", ".celldesc video", function () {
                    var img = $(this).attr("src");
                    var highres = img.replace("-midres.jpg", "-highres.jpg");
                    var caption = $(this).parent().siblings(".cellcaption").text();
                    var videourl = $(this).parent().parent().data("videourl");
                    
                    var content = "<div id='dialog-displayslide'><div class='centerme'><div><video controls autoplay src=" + videourl + "></div>";
                    content = content + "</div></div>";
                    
                   // popup("testing", content);
                    
                    if($("#dialog-displayslide").length === 0){
                             $(".maincolumn").append(content);
                         }

                         dialog = $( "#dialog-displayslide" ).dialog({
                              autoOpen: false,
                              height: window.innerHeight,
                              width: window.innerWidth *.75,
                              modal: true,
                              buttons: {
                              },
                              close: function() {
                                  $("#dialog-displayslide").remove();
                             // form[ 0 ].reset();
                              //allFields.removeClass( "ui-state-error" );
                              },
                              position: {
                                  my: "center top",
                                  at: "center top"
                              }
                         });

                         $("#dialog-displayslide").dialog("open");
                         $("#dialog-displayslide").siblings(".ui-dialog-titlebar").remove();
                         if(videourl !== ""){
                             $("#dialog-displayslide").find("video").get(0).play();
                         }
                         $(document).on( "mouseup", function( event ) {
                             switch (event.which) {
                                     case 1:
                                       // alert('Left Mouse button pressed.');
                                    //    $("#dialog-displayslide").remove();
                                        var container = $("#dialog-displayslide");

                                        // if the target of the click isn't the container nor a descendant of the container
                                        if (!container.is(event.target) && container.has(event.target).length === 0) 
                                        {
                                            dialog.dialog( "close" );
                                            $("#dialog-displayslide").remove();
                                            $(document).off("mouseup");
                                        }
                                        break;
                                    case 2:
                                        //alert('Middle Mouse button pressed.');
                                        break;
                                    case 3:
                                        //alert('Right Mouse button pressed.');
                                        break;
                                    default:
                                    //    alert('You have a strange Mouse!');
                             }
                             
                             //alert("yo");
                          });
                         //$("#dialog-formreport" ).dialog( "option", "height", 250 );
                         
                   // $("body").append("<div class='fullsizedisplay'><img src=" + highres + "></div>");
                });
                
                
                $(".maincolumn").on("click", ".payperviewbutton", function () {
                    
                    if($(this).find(".showstarted").length > 0){
                        var channelid = $(this).data("channel");
                        var creatorid = $(this).data("creatorid");
                        window.location.href = 'conversation.php?room=' + channelid ;
                    }
                    else{
                        var channelid = $(this).data("channel");
                        var creatorid = $(this).data("creatorid");
                        window.location.href = 'purchaseshow.php?channel=' + channelid + '&creatorid=' + creatorid;
                    }
                });
                
                $(".maincolumn").on("click", ".stdbutton", function () {
                    if($(this).find(".showstarted").length > 0){
                        var channelid = $(this).data("channel");
                        var creatorid = $(this).data("creatorid");
                        window.location.href = 'conversation.php?room=' + channelid ;
                    }
                    else{
                        var channelid = $(this).data("channel");
                        var creatorid = $(this).data("creatorid");
                        window.location.href = 'purchaseshow.php?channel=' + channelid + '&creatorid=' + creatorid;
                    }
                });
                
            });
       </script>
            
    </head>
    <body>

        <div class="maincolumn">

<?php

echo "<div class='bannersection'></div>";
require 'globalserver.php';
require 'globalfunctions.php';
require_once 'htmlpurifier-4.6.0/library/HTMLPurifier.auto.php';

$val = randshr();
$con = connectdb("normal", $val);

if(isset($_SESSION['userid'])){

    $viewerid = $_SESSION['userid'];
    $viewercon = connectdb("normal", shr($viewerid));
}
else{
    $viewerid = 0;
    $viewercon = connectdb("normal", randshr());
    $_SESSION['timezone'] = "America/Los_Angeles";
}

$start = microtime(true);


$time_elap = microtime(true) - $start;


function removehtml($x){
    $ret =  strip_tags($x);

    return $ret;
}

function cmp($a, $b) {
    if (strtotime($a[1]) == strtotime($b[1])) {
        return 0;
    }
    return (strtotime($a[1]) < strtotime($b[1])) ? 1 : -1;
}
    
    
if( isset($_GET['page']))
{
    $curpage = intval($_GET['page']);
}
else{
    $curpage = 1;
}
    
$dupepisodes = array();
if($curpage === 1){

    
    $ifollowing = array();
    $duprequests = array();
    
    if($viewercon !== null){
        
    
        $sql = "SELECT * FROM user_following WHERE userid=? ORDER BY RAND()";
        $followingresult = querye($viewercon, $sql, $viewerid);


        while ($cur = mysqli_fetch_array($followingresult)) {
            array_push($ifollowing, $cur['followingid']);               
        }

       



        // find requests from people following
        $output = "";
            $shows = array();
            foreach($ifollowing as $val){

                $creatorid = $val;
                $creatorcon = connectdb("normal", shr($creatorid));
                $sql = "SELECT * FROM creator_shows where creatorid=? AND CURRENT_TIME() <= endtime ORDER BY begintime ASC LIMIT 3";
                $aresult = querye($creatorcon, $sql, $creatorid);
                closedb($creatorcon);
                while($arow = mysqli_fetch_array($aresult)){

                   // $tmp = array($arow['rid'], $arow['completedon'], $arow['creatorid'], $arow['summary'], $arow['requestorid']);
                    array_push($shows, $arow);
                   // array_push($duprequests, $arow['rid'] ."-" . $arow['creatorid']);
                }
            }


           // usort($stories, "cmp");

            $stcount = 0;
            if (sizeof($shows) > 0) { 
                $output = '<div class="topicheader"><a href="showsfollowing.php">Shows from following</a></div>';
                $output = $output . "<div class='requestsection'>";

                $counter = 0;
                $maxreqper = 4;
                for($i=0; $i < sizeof($shows); $i++){

                  //  echo implode(", ", $shows[$i]);

                    $arow = $shows[$i];

                    $nexdate = convZone($arow['date']);
                    $cur = strtotime($nexdate);  
                    $curday = date('M d', $cur);
                    $dow = date('D', $cur);
                    $fulldow = strtolower(date('l', $cur));


                    $begintime = date("g:ia", strtotime(convZone($arow['begintime'])));
                    $endtime = date("g:ia", strtotime(convZone($arow['endtime'])));
                    $viewsetting = $arow['type'];
                    $channel = $arow['channel'];
                    $chattopic = outclean($arow['description']);
                    $creatorid = $arow['creatorid'];

                    $crow = getuserinfo($creatorid);
                    $csn = $crow['screenname'];
                    $caimg = $crow['avatarimage'];

                     $ticketprice = $arow['price'];
                     if(empty($ticketprice)){
                         $ticketprice = 3;
                     }

                    $chcon = connectdb("normal", shr($channel));
                    $sql = "SELECT * FROM channel_snapshots where channel=?";
                    $zresult = querye($chcon, $sql, $channel);
                    if($zrow = mysqli_fetch_array($zresult)){
                        $imgurl = $zrow['url'];
                    }
                    else{
                        $imgurl = "";
                    }

                     if($viewsetting === "private"){
                        $output = $output . "<div class='stdbutton' id='" . $cur . "' data-channel='" . $channel . "' data-creatorid='" . $creatorid . "'><img class='roompreview' src='" . $imgurl . "'><span class='showdate'>". $dow . ", " . $curday . "</span>";
                        $output = $output . "<br><span class='showtime'>". $begintime . " - " . $endtime . " " . getTZabrev($_SESSION['timezone']) . "</span><br>";
                        $output = $output . "<span class='showtype'>Private</span><br>";
                        $output = $output . "min price: <span class='ticketprice'>$" . $ticketprice . "</span>";

                        $output = $output . "<div class='privateentry'>";

                        $output = $output . "<br>" . $arow['numsold'] . " viewers, $" . $arow['totalamountsold']. "<br>";

                        $output = $output . "<div class='userlist'>";
                        $sql = "SELECT * FROM show_attendees where channel=? and userrole='leadviewer'";
                        $zresult = querye($chcon, $sql, $channel);
                        while($zrow = mysqli_fetch_array($zresult)){
                            $user = getuserinfo($zrow['userid']);
                            $upro = $user['profilepage'];
                            $usn = $user['screenname'];
                            $output = $output . "<a href='" . $upro . "'>" . $usn . "</a> - " . $zrow['userrole'] . " ($" . $zrow['price'] . ")<br>";
                        }
                        $output = $output . "</div>";
                        $output = $output . "<br><span class='chattopic'>\"". $chattopic . "\"</span><br>";

                        $output = $output . "</div>";

                       // see if show is in progress
                       if($arow['showstatus'] === "started" || $arow['showstatus'] === "startedwithhost"){
                           $output = $output . "<span class='showstarted'>Show is in progress(preview it)</span>";
                       }

                       $output = $output . "<a class='speakername' href='channel/" . $csn . "'>" . $csn . "<br>";
                       $output = $output . "<img class='speakerlogo' src='" . $caimg . "'></a>";
                       $output = $output . "</div>";
                       $stcount++;
                     }
                     else if($viewsetting === "broadcast"){
                            $output = $output . "<div class='payperviewbutton' id='" . $cur . "' data-channel='" . $channel . "' data-creatorid='" . $creatorid . "'><img class='roompreview' src='" . $imgurl . "'><span class='showdate'>". $dow . ", " . $curday . "</span>";
                            $output = $output . "<br><span class='showtime'>". $begintime . " - " . $endtime . " " . getTZabrev($_SESSION['timezone']) . "</span><br>";
                            $output = $output . "<span class='showtype'>Broadcast Show</span><br>";
                            $output = $output . "min price: <span class='ticketprice'>$" . $ticketprice . "</span>";

                            $output = $output . "<div class='privateentry'>";

                            $output = $output . "<br>" . $arow['numsold'] . " viewers<br>";

                           // $output = $output . "<div class='userlist'>";
                            $output = $output . "<span class='chattopic'>\"". $chattopic . "\"</span><br>";
                            if(floatval($arow['totalamountsold']) >= floatval($arow['targetprice'])){
                                $output = $output . "<span class='fgoals'>Funding Goal: <span class='ticketprice'>$" . $arow['targetprice'] . "</span><br><span class='greentext'>currently raised: $" . $arow['totalamountsold'] . "</span>";
                            }
                            else{
                                $output = $output . "<span class='fgoals'>Funding Goal: <span class='ticketprice'>$" . $arow['targetprice'] . "</span><br><span class='redtext'>currently raised: $" . $arow['totalamountsold'] . "</span>";
                            }
                            // see if show is in progress
                            if($arow['showstatus'] === "started" || $arow['showstatus'] === "startedwithhost"){
                                $output = $output . "<span class='showstarted'>Show is in progress(preview it)</span>";
                            }

                            $output = $output . "<br><a class='speakername' href='channel/" . $csn . "'>" . $csn . "<br>";
                            $output = $output . "<img class='speakerlogo' src='" . $caimg . "'></a>";
                            $output = $output . "</div>";
                            $output = $output . "</div>";
                            $stcount++;
                     }
                     
                     closedb($chcon);
                     if($stcount === 8){
                         break;
                     }
                }
                 echo $output . "</div>";
            }


    }
    
    // find random creators that user does not currently follow
    // get their most recent requests



    $output = "";
    $shows = array();

    $count = 0;
    $creatorcon = connectdb("normal", randshr());
    
    $sql = "SELECT * FROM global_creator_shows where CURRENT_TIME() <= endtime AND type='private' ORDER BY begintime ASC LIMIT 30";
    $aresult = querye($creatorcon, $sql);
    while($arow = mysqli_fetch_array($aresult)){
        $channel = $arow['channel'];

        $curcon = connectdb("normal", shr($channel));
        $sql = "SELECT * FROM creator_shows where channel=?";
        $kresult = querye($curcon, $sql, $channel);
        $krow = mysqli_fetch_array($kresult);
        $status = $krow['showstatus'];

        if($status === "canceled"){
            continue;
        }

      //  $tmp = array($arow['rid'], $arow['completedon'], $arow['creatorid'], $arow['summary'], $arow['requestorid']);
        array_push($shows, $krow);
        $count++;
        if($count === 12){
            break;
        }
       // array_push($duprequests, $arow['rid'] ."-" . $arow['creatorid']);
    }
    

    //usort($stories, "cmp");
    $stcount = 0;
    if (sizeof($shows) > 0) { 
        $output = '<div class="topicheader"><a href="upcomingrequestedshows.php">Upcoming Requested Cooking Jobs</a></div>';
        $output = $output . "<div class='requestsection'>";

        $counter = 0;
        $maxreqper = 4;
        for($i=0; $i < sizeof($shows); $i++){
            
          //  echo implode(", ", $shows[$i]);
            
            $arow = $shows[$i];
            
            $nexdate = convZone($arow['date']);
            $cur = strtotime($nexdate);  
            $curday = date('M d', $cur);
            $dow = date('D', $cur);
            $fulldow = strtolower(date('l', $cur));
            
            
            $begintime = date("g:ia", strtotime(convZone($arow['begintime'])));
            $endtime = date("g:ia", strtotime(convZone($arow['endtime'])));
            $viewsetting = $arow['type'];
            $channel = $arow['channel'];
            $chattopic = outclean($arow['description']);
            $creatorid = $arow['creatorid'];
            
            $crow = getuserinfo($creatorid);
            $csn = $crow['screenname'];
            $caimg = $crow['avatarimage'];
            
             $ticketprice = $arow['price'];
             if(empty($ticketprice)){
                 $ticketprice = 3;
             }
             
            $chcon = connectdb("normal", shr($channel));
            $sql = "SELECT * FROM channel_snapshots where channel=?";
            $zresult = querye($chcon, $sql, $channel);
            if($zrow = mysqli_fetch_array($zresult)){
                $imgurl = $zrow['url'];
            }
            else{
                $imgurl = "";
            }
                    
                $output = $output . "<div class='stdbutton' id='" . $cur . "' data-channel='" . $channel . "' data-creatorid='" . $creatorid . "'><img class='roompreview' src='" . $imgurl . "'><span class='showdate'>". $dow . ", " . $curday . "</span>";
                $output = $output . "<br><span class='showtime'>". $begintime . " - " . $endtime . " " . getTZabrev($_SESSION['timezone']) . "</span><br>";
                $output = $output . "<span class='showtype'>Private</span><br>";
                $output = $output . "min price: <span class='ticketprice'>$" . $ticketprice . "</span>";

                $output = $output . "<div class='privateentry'>";

                $output = $output . "<br>" . $arow['numsold'] . " viewers, $" . $arow['totalamountsold']. "<br>";

                $output = $output . "<div class='userlist'>";
                $sql = "SELECT * FROM show_attendees where channel=? and userrole='leadviewer'";
                $zresult = querye($chcon, $sql, $channel);
                while($zrow = mysqli_fetch_array($zresult)){
                    $user = getuserinfo($zrow['userid']);
                    $upro = $user['profilepage'];
                    $usn = $user['screenname'];
                    $output = $output . "<a href='" . $upro . "'>" . $usn . "</a> - " . $zrow['userrole'] . " ($" . $zrow['price'] . ")<br>";
                }
                $output = $output . "</div>";
                
                $output = $output . "<br><span class='chattopic'>\"". $chattopic . "\"</span><br>";

                $output = $output . "</div>";
                    
               // see if show is in progress
               if($arow['showstatus'] === "started" || $arow['showstatus'] === "startedwithhost"){
                   $output = $output . "<span class='showstarted'>Show is in progress(preview it)</span>";
               }

               $output = $output . "<a class='speakername' href='channel/" . $csn . "'>" . $csn . "<br>";
               $output = $output . "<img class='speakerlogo' src='" . $caimg . "'></a>";
               $output = $output . "</div>";
               $stcount++;
               
               closedb($chcon);
               if($stcount === 8){
                   break;
               }
        }
         echo $output . "</div>";
    }
    
    
    $shows = array();
    
    $sql = "SELECT * FROM global_creator_shows where CURRENT_TIME() <= endtime AND type='broadcast' ORDER BY begintime ASC LIMIT 30";
    $aresult = querye($creatorcon, $sql);
    while($arow = mysqli_fetch_array($aresult)){
        $channel = $arow['channel'];

        $curcon = connectdb("normal", shr($channel));
        $sql = "SELECT * FROM creator_shows where channel=?";
        $kresult = querye($curcon, $sql, $channel);
        $krow = mysqli_fetch_array($kresult);
        $status = $krow['showstatus'];

        if($status === "canceled"){
            continue;
        }

      //  $tmp = array($arow['rid'], $arow['completedon'], $arow['creatorid'], $arow['summary'], $arow['requestorid']);
        array_push($shows, $krow);
        $count++;
        if($count === 12){
            break;
        }
       // array_push($duprequests, $arow['rid'] ."-" . $arow['creatorid']);
    }
    closedb($creatorcon);
    

    //usort($stories, "cmp");
    $stcount = 0;
    if (sizeof($shows) > 0) { 
        $output = '<div class="topicheader"><a href="upcomingbroadcastshows.php">Upcoming Broadcast Shows</a></div>';
        $output = $output . "<div class='requestsection'>";

        $counter = 0;
        $maxreqper = 4;
        for($i=0; $i < sizeof($shows); $i++){
            
          //  echo implode(", ", $shows[$i]);
            
            $arow = $shows[$i];
            
            $nexdate = convZone($arow['date']);
            $cur = strtotime($nexdate);  
            $curday = date('M d', $cur);
            $dow = date('D', $cur);
            $fulldow = strtolower(date('l', $cur));
            
            
            $begintime = date("g:ia", strtotime(convZone($arow['begintime'])));
            $endtime = date("g:ia", strtotime(convZone($arow['endtime'])));
            $viewsetting = $arow['type'];
            $channel = $arow['channel'];
            $chattopic = outclean($arow['description']);
            $creatorid = $arow['creatorid'];
            
            $crow = getuserinfo($creatorid);
            $csn = $crow['screenname'];
            $caimg = $crow['avatarimage'];
            
             $ticketprice = $arow['price'];
             if(empty($ticketprice)){
                 $ticketprice = 3;
             }
             
                $chcon = connectdb("normal", shr($channel));
                $sql = "SELECT * FROM channel_snapshots where channel=?";
                $zresult = querye($chcon, $sql, $channel);
                if($zrow = mysqli_fetch_array($zresult)){
                    $imgurl = $zrow['url'];
                }
                else{
                    $imgurl = "";
                }
            
               $output = $output . "<div class='payperviewbutton' id='" . $cur . "' data-channel='" . $channel . "' data-creatorid='" . $creatorid . "'><img class='roompreview' src='" . $imgurl . "'><span class='showdate'>". $dow . ", " . $curday . "</span>";
               $output = $output . "<br><span class='showtime'>". $begintime . " - " . $endtime . " " . getTZabrev($_SESSION['timezone']) . "</span><br>";
               $output = $output . "<span class='showtype'>Broadcast Show</span><br>";
               $output = $output . "min price: <span class='ticketprice'>$" . $ticketprice . "</span>";

               $output = $output . "<div class='privateentry'>";

               $output = $output . "<br>" . $arow['numsold'] . " viewers<br>";

              // $output = $output . "<div class='userlist'>";
               $output = $output . "<span class='chattopic'>\"". $chattopic . "\"</span><br>";
               if(floatval($arow['totalamountsold']) >= floatval($arow['targetprice'])){
                   $output = $output . "<span class='fgoals'>Funding Goal: <span class='ticketprice'>$" . $arow['targetprice'] . "</span><br><span class='greentext'>currently raised: $" . $arow['totalamountsold'] . "</span>";
               }
               else{
                   $output = $output . "<span class='fgoals'>Funding Goal: <span class='ticketprice'>$" . $arow['targetprice'] . "</span><br><span class='redtext'>currently raised: $" . $arow['totalamountsold'] . "</span>";
               }
               // see if show is in progress
               if($arow['showstatus'] === "started" || $arow['showstatus'] === "startedwithhost"){
                   $output = $output . "<span class='showstarted'>Show is in progress(preview it)</span>";
               }

               $output = $output . "<br><a class='speakername' href='channel/" . $csn . "'>" . $csn . "<br>";
               $output = $output . "<img class='speakerlogo' src='" . $caimg . "'></a>";
               $output = $output . "</div>";
               $output = $output . "</div>";
               $stcount++;
               
               closedb($chcon);
               if($stcount === 8){
                   break;
               }

        }
         echo $output . "</div>";
    }
    
    echo "<hr>";
            
    $output = '<div class="centertitle"><a href="searchspeakers.php">Featured Chefs</a></div>';
    $output = $output . '<div class="topicsection">';

    $counter = 0;

    $curcon = connectdb("normal", randshr());

    $sql = "SELECT * FROM global_creators ORDER BY RAND() LIMIT 24" ;
    $curresult = querye($curcon, $sql);
    while($currow = mysqli_fetch_array($curresult)) { 

        $curuserid = $currow['userid'];
        $curuser = getuserinfo($curuserid);
        $uniquesn = $curuser['uniquename'];
        $cursn = $curuser['screenname'];

        $imageurl = $curuser['avatarimage'];
        $imageurl = str_replace( '.jpg', '-highres.jpg', outclean($imageurl));

        $bcon = connectdb("normal", shr($curuserid));
        $sql = "SELECT * FROM global_categories_speakers WHERE userid=?" ;
        $bres = querye($bcon, $sql, $curuserid);
        $brow = mysqli_fetch_array($bres);
        
        $desc = outclean($brow['description']);
        $numreviews = $brow['numreviews'];
        
        if(!empty($imageurl)){
               $output = $output . '<div class="cellmodel"><a href="channel/' . $uniquesn . '"><div class="modelimgparent"><img class="modelimg" src="' . $imageurl . '" /></div></a><span class="speakerdesc">' . $desc . '</span><span class="cellepicreator">' . $cursn . '</span><span class="cellepimeta">' . $numreviews . ' reviews</span></div>';   
               $counter++;
        }             
    }
    closedb($curcon);


    $output = $output . '</div><hr>';
    echo $output;

        $output = '<div class="centertitle"><a href="newspeakers.php">New Chefs</a></div>';
    $output = $output . '<div class="topicsection">';

    $counter = 0;

    $curcon = connectdb("normal", randshr());

    $sql = "SELECT * FROM global_creators ORDER BY addedon DESC LIMIT 24" ;
    $curresult = querye($curcon, $sql);
    while($currow = mysqli_fetch_array($curresult)) { 

        $curuserid = $currow['userid'];
        $curuser = getuserinfo($curuserid);
        $uniquesn = $curuser['uniquename'];
        $cursn = $curuser['screenname'];

        $imageurl = $curuser['avatarimage'];
        $imageurl = str_replace( '.jpg', '-highres.jpg', outclean($imageurl));

        $bcon = connectdb("normal", shr($curuserid));
        $sql = "SELECT * FROM global_categories_speakers WHERE userid=?" ;
        $bres = querye($bcon, $sql, $curuserid);
        $brow = mysqli_fetch_array($bres);
        
        $desc = outclean($brow['description']);
        $numreviews = $brow['numreviews'];
        
        if(!empty($imageurl)){
               $output = $output . '<div class="cellmodel"><a href="channel/' . $uniquesn . '"><div class="modelimgparent"><img class="modelimg" src="' . $imageurl . '" /></div></a><span class="speakerdesc">' . $desc . '</span><span class="cellepicreator">' . $cursn . '</span><span class="cellepimeta">' . $numreviews . ' reviews</span></div>';   
               $counter++;
        }        
        
        if($counter === 12){
            break;
        }
    }
    closedb($curcon);


    $output = $output . '</div><hr>';
    echo $output;

    
    /*

    echo "<div class='centertitle'>Categories of Chefs</div>";

            
    // get top 3 most popular categories , and then get random category;
    $icategories= array();
    $sql = "SELECT * FROM global_categories_rank ORDER BY score DESC LIMIT 3";
    $followingresult = querye($viewercon, $sql);

    while ($cur = mysqli_fetch_array($followingresult)) {
        array_push($icategories, $cur['name']);               
    }
    
    $numrandcats = 8;
    $catcount = 0;
    $sql = "SELECT * FROM global_categories_rank ORDER BY RAND()";
    $followingresult = querye($viewercon, $sql);

    while ($cur = mysqli_fetch_array($followingresult)) {
        if(in_array($cur['name'], $icategories)){
            
        }
        else{
            
          array_push($icategories, $cur['name']);
          $catcount++;
          if($catcount == $numrandcats){
              break;
          }
        }
    }
    

    // for each category
    // get max top 40 series


    $numtopcats = 3;
    $curcat = 0;
    $isrando = false;
    
    foreach($icategories as $val){
      //  echo "category = " . $val . "<br>";
        $speakers = array();
        $sql = "SELECT * FROM global_categories_speakers WHERE name=? ORDER BY score DESC LIMIT 40";
        $cur = querye($viewercon, $sql, $val);
        while($bar = mysqli_fetch_array($cur)){
            $foo_userid = $bar['userid'];
            
            array_push($speakers, $bar);
            

        }
        
        

        if (sizeof($speakers) > 0) {
            if($val == "none"){
                $valname = "miscellaneous";
            }
            else{
                $valname = $val;
            }
            $output = '<div class="catheader"><a href="categoryspeakers.php?category=' . $val . '">' . ucfirst($valname) . '</a></div>';
            $output = $output . '<div class="topicsection">';

            $counter = 0;
            for($i=0; $i < sizeof($speakers); $i++){


                $curid =  $speakers[$i]['userid'];
                $cursn = $speakers[$i]['screenname'];
                $curav = $speakers[$i]['avatarimage'];
                $curav = str_replace( '.jpg', '-highres.jpg', outclean($curav));
                $curdesc = $speakers[$i]['description'];
                $curscore = $speakers[$i]['score'];
                $curnumreviews = $speakers[$i]['numreviews'];
                
                $output = $output . '<div class="cellmodel"><a href="channel.php?username=' . $cursn . '"><div class="modelimgparent"><img class="modelimg" src="' . $curav . '" /></div></a><span class="speakerdesc">' . outclean($curdesc) .'</span><span class="cellepicreator">' . $cursn . '</span><span class="cellepimeta">' . $curnumreviews . ' reviews</span></div>';   
                $counter++;

                if($isrando){
                    if($counter === 12){
                        break;
                    }
                }
                else if($counter === 12){
                    break;
                }
                

            }
            $output = $output . '</div>';
            echo $output;
            
            $curcat++;
            if($curcat === $numtopcats){
                $isrando = true;
            }
        }
    }

*/


}

    

    
    




?>
                    

                
                
            </div>
        </div>
    </body>
</html>