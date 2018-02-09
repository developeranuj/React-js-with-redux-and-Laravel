<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
     <script type="text/javascript" src="{{asset('js/vue.js')}}"></script>
     <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"> </script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<script type="text/javascript" src="js/script.js"></script>
<script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-43981329-1']);
    _gaq.push(['_trackPageview']);
    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>
     <!-- Styles -->
        <style>
         #header
  {   
    background-color:#40B1ED;
    height:60px;
  }
.maindiv
  {
    border: 1px solid black;
    background:#FAFAFA;
    width:960px;
    height:1000px;
    position:absolute;
    top:20px;
    left:350px;
    overflow:auto;
  }
.menu
  {
    background-color:white;
    width:220px;
    height:350px;
    padding:15px;
    border:1px solid black;
    border-radius:4px;
    position:absolute;
    top:70px;
    left:10px;
    box-shadow:0 0 5px black;
  }
.menu img
  {
    float:left;
    padding-left:10px;
  }
#your
  {
    padding:10px;
    width:400px;
    height:120px;
    position:absolute;
    top:10px;
    left:50px;
    border:1px dashed white;
    
  }
#your:hover
  {
    background-color:#FBF0FC;
    border:1px dashed black;
    cursor:pointer;
  }
#InputsWrapper
  {
    position:absolute;
    top:150px;
    left:40px;
  }
  
#your1
  {
    padding:10px;
    width:500px;
    height:120px;
    position:absolute;
    top:10px;
    left:50px;
    border:1px dashed black;
  } 
#titleid
  {
    font-size:20px;
  } 
#inputhead
  {
    font-size:30px;
    border-radius:2px;
    box-shadow:0 0 5px #40B1ED;
    border:1px solid #40B1ED;
    width:450px;
  }
#doneid
  {
    position:absolute;
    bottom:5px;
    right:5px;
    color:white;
      background-color:#40B1ED;
    border-radius:2px;
    border:2px solid #40B1ED;
  }
#namebutton
  {
    border:4px solid #9AB7F5;
    width:200px;
    height:50px;
    background: #E4E7F0 url(../images/tab-bg.png) repeat-x;
    margin-bottom:10px;
    font-size:20px;
    border-radius:2px;
  }
#namebutton:hover
  {
    border:4px solid #9680ED;
    border-radius:2px;
    cursor:pointer;
  }
#emailbutton
  {
    border:4px solid #9AB7F5;
    width:200px;height:50px;
    background: #efefef url(../images/tab-bg.png) repeat-x;
    margin-bottom:10px;
    font-size:20px;
    border-radius:2px;
  }
#emailbutton:hover
  {
    border:4px solid #9680ED;
    border-radius:2px;
    cursor:pointer;
  }
#addressbutton
  {
    border:4px solid #9AB7F5;
    width:200px;
    height:50px;
    background: #efefef url(../images/tab-bg.png) repeat-x;
    margin-bottom:10px;
    font-size:20px;
    border-radius:2px;
  }
#addressbutton:hover
  {
    border:4px solid #9680ED;
    border-radius:2px;
    cursor:pointer;
  }
#checkboxbutton
  {
    border:4px solid #9AB7F5;
    width:200px;
    height:50px;
    background: #efefef url(../images/tab-bg.png) repeat-x;
    margin-bottom:10px;
    font-size:20px;
    border-radius:2px;
  }
#checkboxbutton:hover
  {
    border:4px solid #9680ED;
    border-radius:2px;
    cursor:pointer;
  }
#radioaddbutton
  {
    border:4px solid #9AB7F5;
    width:200px;
    height:50px;
    background: #efefef url(../images/tab-bg.png) repeat-x;
    margin-bottom:10px;
    font-size:20px;
    border-radius:2px;
  }
#radioaddbutton:hover
  {
    border:4px solid #9680ED;
    border-radius:2px;
    cursor:pointer;
  }
#reset{
    border:4px solid #9AB7F5;
    width:200px;
    height:50px;
    margin-bottom:10px;
    font-size:20px;
    border-radius:2px;
} 
.InputsWrapper1
  {
    background-color:white;
    width:650px;
    height:900px;
    border:1px solid black;
    position:absolute;
    top:70px;
    right:10px;
    border-radius:4px;
    overflow:auto;
    box-shadow:0 0 5px black;
  }
div.name
  {
    background: #E1F3FC; 
    margin-bottom: 10px;
    margin-top:15px;
    margin-left:10px;
    width:302px;
    height:35px;
    border-radius:5px;
    border:1px solid blue;
    padding:5px;
    cursor:move;
  } 
.name input,.email input
    {
    padding:5px;
    } 
div.email
    {
        background:#E1F3FC;
      margin-bottom: 10px;
      margin-top:15px;
        margin-left:10px;
        width:302px;
      height:35px;
      border-radius:5px;
        border:1px solid blue;
      padding:5px;
      cursor:move;
    } 
div.address
      {
        position:relative;
        background:#E1F3FC ;
        margin-bottom: 10px; 
        margin-top:15px;
        margin-left:10px;
        width:320px;
        height:50px;
        border-radius:5px;
            border:1px solid blue;
        padding:5px;
        cursor:move;
      }
.address textarea
    {
    padding-left:5px;
    }
div.address label
      {
      position:absolute;
      }   
div.address p
      {
        position:absolute;
        right:10px;
        top:-10px;
      }
.checkbox_child
        {
            background:#E1F3FC; 
            margin-bottom: 10px;
            margin-top:20px;
            margin-left:10px;
            width:170px;
            height:25px;
            border-radius:5px;
            border:1px solid blue;
            padding:5px;
            cursor:move;
        }     
.radiobutton_child 
        {
          background:#E1F3FC;
          margin-bottom: 10px; 
          margin-top:20px;
          margin-left:10px;
          width:140px;
          height:25px;
          border-radius:5px;
          border:1px solid blue;
          padding:5px;
          cursor:move;
        }


        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

          <section id="user_data">
            <h2>Dynamic Form Using JQuery</h2>

            <div class="maindiv">
            
      <div id="header"></div>
            
      <div class="menu">
                <button id="namebutton"><img src="images/name-img.png"/>Name</button><br>
                <button id="emailbutton"><img src="images/email.png"/>Email</button><br>
                <button id="addressbutton"><img src="images/contact-img.png"/>Address</button><br>
                <button id="checkboxbutton"><img src="images/check-img.png"/>CheckBox</button><br>
                <button id="radioaddbutton"><img src="images/radio-img.png"/>Radio</button>
        <button id="reset">Reset</button>
            </div>
            
      <div class="InputsWrapper1">
                <div id="yourhead">
          <div id="your">
            <h2 id="yourtitle">Your Form Title<img src="images/edit-form.png"/></h2>
            <h4 id="justclickid">Just Click on Fields on left to start building your form. It's fast, easy & fun.</h4>
          </div>
        </div>  
                
      
      <div id="InputsWrapper"></div>
      
      

            </div>
        </div>
          </section>
        </div>
   

   <script>
        $(document).ready(function() {
              
        /*------------------------------------------------
        To edit your form heading
        -------------------------------------------------*/
        
        $("#yourtitle").click(function(){
          $("#your").hide();            
            var createhead=$(document.createElement('div'));
            createhead.attr("id","your1");
            createhead.html('<label id="titleid">'+
            '<b>Title : </b>'+
            '</label>'+
            '<br/>'+
            '<input id="inputhead" "type=text placeholder="Type Your Choicehead"/>'+
            '<button id="doneid">Done</button>');
              $("#yourhead").append(createhead);
            var get1=$("#yourtitle").text();
            $("#inputhead").val(get1);  
            
          $("#doneid").click(function(){  
            var get=$("#inputhead").val(); 
            if(get==0)
            {
            alert("Cannot Leave Field Blank");
            }
            else
            {
            
            $("#yourtitle").html('<h1>'+get+'</h1>');  
            $("#yourtitle").css({"text-align":"center","font-size":"25px","color":"white","cursor":"pointer"});
            $("#your1").remove();
            $("#your").show();   
            $("#your").css({"background-color":"#F4D4FA","width":"530px"});
            $("#justclickid").hide(); 
            }
            });
        });
  
                /*----------------------------------------------------------------------------------------------------*/

        
        var MaxInputs = 100; //Maximum input boxes allowed
                
          
                /*----------------------------------
        to keep track of fields and divs added
        -----------------------------------*/
        var nameFieldCount = 0; 
                var emailFieldCount = 0; 
                var addressFieldCount = 0; 
                var checkboxFieldCount = 0; 
                var radiobuttonFieldCount = 0; 
        var checkboxdivCount = 0; 
        var checkbox_sub_para_Count=0;
        var radiobuttondivCount = 0; 
        var radio_sub_para_Count=0;
        
        
        
        
        var InputsWrapper = $("#InputsWrapper"); //Input box wrapper ID
        var x = InputsWrapper.length; //Initial field count
                
        
        
        /*------------------
        to get fields button ID
        ------------------*/
        var namefield = $("#namebutton"); 
                var emailfield = $("#emailbutton"); 
                var addressfield = $("#addressbutton"); 
                var checkbox =  $("#checkboxbutton");
                var radiobutton= $("#radioaddbutton");
               
                
                $(InputsWrapper).sortable();      // to make added fields sortable
        
        
        
        /*------------------------------------------------
        To add Name field 
        -------------------------------------------------*/
        $(namefield).click(function()     
                {
                    if (x <= MaxInputs)     
                    {
                        nameFieldCount++;       
                        
            
                        $(InputsWrapper).append('<div>'+'<div class="name" id="InputsWrapper_0' + nameFieldCount + '">'+
            '<label>Name:' + nameFieldCount + '</label>'+
            '<input type="text" name="mytext[]" id="field_' + nameFieldCount + '" placeholder="Name ' + nameFieldCount + '"/>'+
            '<button class="removeclass0">x</button>'+
            '<button class="addclass0">+</button>'+'<br>'+
            '</div>'+'</div>');
            
                        x++; 
                    }
                    return false;
                });
               
          $("body").on("click", ".removeclass0", function() {   //to remove name field

                    $(this).parent('div').remove(); 
                    x--; 
                    return false;
                });
                
        $("body").on("click", ".addclass0", function() {      //to add more name fields 
                    nameFieldCount++;

                    $(this).parent('div').parent('div').append('<div class="name">'+
          '<label>Name:' + nameFieldCount + '</label>'+
          '<input type="text" name="mytext[]" id="field_' + nameFieldCount + '" placeholder="Name ' + nameFieldCount + '"/>'+
          '<button class="removeclass0">x</button>'+
          '<button class="addclass0">+</button>'+'<br>'+
          '</div>');

                    x++;
                    return false;
                });
                
        
        
        
        
        
        /*------------------------------------------------
        To add Email field 
        -------------------------------------------------*/
        $(emailfield).click(function()  
                {
                    if (x <= MaxInputs) 
                    {
                        emailFieldCount++; 
                         
                        $(InputsWrapper).append('<div>'+'<div class="email" id="InputsWrapper_1' + emailFieldCount + '">'+
            '<label>Email:' + emailFieldCount + '</label>'+
            '<input type="text" name="myemail[]" id="field_' + emailFieldCount + '" placeholder="Email' + emailFieldCount + '"/>'+
            '<button class="removeclass1">x</button>'+
            '<button class="addclass1">+</button>'+'<br>'+
            '</div>'+'</div>');
                        x++; 
                    }
                    return false;
                });
                
        $("body").on("click", ".removeclass1", function() {     //to remove Email field 

                    $(this).parent('div').remove();
                    x--;  
                    return false;
                });
                $("body").on("click", ".addclass1", function() {      //to add more Email field

                    emailFieldCount++;
                    $(this).parent('div').parent('div').append('<div  class="email">'+
          '<label>Email:' + emailFieldCount + '</label>'+
          '<input type="text" name="myemail[]" id="field_' + emailFieldCount + '" placeholder="Email' + emailFieldCount + '"/>'+
          '<button class="removeclass1">x</button>'+
          '<button class="addclass1">+</button>'+'<br>'+
          '</div>');
                    x++;
                    return false;
                });
                
        
        
        
        
        /*------------------------------------------------
        To add Address field 
        -------------------------------------------------*/
        $(addressfield).click(function()  
                {
                    if (x <= MaxInputs)
                    {
                        addressFieldCount++; 
                      
                        $(InputsWrapper).append('<div>'+'<div class="address" id="InputsWrapper_2' + addressFieldCount + '">'+
            '<label>Address:' + addressFieldCount + '</label>'+
            '<p>'+
            '<textarea   type="text" name="myaddress[]" id="field_' + addressFieldCount + '" placeholder="Address' + addressFieldCount + '" />'+
            '<button class="removeclass2">x</button>'+
            '<button class="addclass2">+</button>'+
            '</p>'+'<br>'+
            '</div>'+'</div>');
                        x++; 
                    }
                    return false;
                });
                
        
        $("body").on("click", ".removeclass2", function() { //to remove address field

                    $(this).parent('p').parent('div').remove();
                    x--; 
                    return false;
                });
                $("body").on("click", ".addclass2", function() { //to add more address field

                    addressFieldCount++;
                    $(this).parent('p').parent('div').parent('div').append('<div  class="address">'+
          '<label>Address:' + addressFieldCount + '</label>'+
          '<p>'+
          '<textarea type="text" name="myaddress[]" id="field_' + addressFieldCount + '" placeholder="Address' + addressFieldCount + '"/>'+
          '<button class="removeclass2">x</button>'+
          '<button class="addclass2">+</button>'+'<br>'+
          '</p>'+
          '</div>');
                    x++;
                    return false;
                });
                
        
        
        
        
        /*------------------------------------------------
        To add Check-box
        -------------------------------------------------*/
        $(checkbox).click(function() 
                {
                    if (x <= MaxInputs) 
                    {
                        checkboxFieldCount++;
            checkboxdivCount++; 
            checkbox_sub_para_Count++;
                       
                        $(InputsWrapper).append('<div class="checkbox" id="InputsWrapper_3_'+ checkboxdivCount + '">'+
            '<p class="checkbox_child" id="para'+checkbox_sub_para_Count+'">'+
            '<label>CheckBox:' + checkboxFieldCount + '</label>'+
            '<input type="checkbox" name="mycheckbox[]" id="field_' + checkboxFieldCount + '" value="CheckBox' + checkboxFieldCount++ + '"/>'+
            '<button class="removeclass3">x</button>'+
            '<button class="addclass3">+</button>'+
            '</p>'+
            '<p class="checkbox_child" id="para'+checkbox_sub_para_Count+'" >'+
            '<label>CheckBox:' + checkboxFieldCount + '</label>'+
            '<input type="checkbox" name="mycheckbox[]" id="field_' + checkboxFieldCount + '" value="CheckBox' + checkboxFieldCount++ + '"/>'+
            '<button class="removeclass3">x</button>'+
            '<button class="addclass3">+</button>'+
            '</p>'+
            '<p class="checkbox_child" id="para'+checkbox_sub_para_Count+'" >'+
            '<label>CheckBox:' + checkboxFieldCount + '</label>'+
            '<input type="checkbox" name="mycheckbox[]" id="field_' + checkboxFieldCount + '" value="CheckBox' + checkboxFieldCount + '"/>'+
            '<button class="removeclass3">x</button>'+
            '<button class="addclass3">+</button>'+
            '</p>'+
            '</div>');
                        x++; 
                    }
                    return false;
                });
                $("body").on("click", ".removeclass3", function() { //to remove check-box

                    $(this).parent('p').remove(); 
                    x--;
                    return false;
                });
                $("body").on("click", ".addclass3", function() { //to add more check-box

                    checkboxFieldCount++;
            
          $(this).parent('p').parent('div').append('<p  class="checkbox_child" id="para'+checkbox_sub_para_Count+'">'+
          '<label>CheckBox:' + checkboxFieldCount + '</label>'+
          '<input type="checkbox" name="mycheckbox[]" id="field_' + checkboxFieldCount + '" value="CheckBox' + checkboxFieldCount + '"/>'+
          '<button class="removeclass3">x</button>'+
          '<button class="addclass3">+</button>'+
          '</p>');
                    x++;
          
                    return false;
          
                });
        
                
        
        
        
        /*------------------------------------------------
        To add Radio-button
        -------------------------------------------------*/
        $(radiobutton).click(function()  
                {
                    if (x <= MaxInputs) 
                    {
                        radiobuttonFieldCount++;
            radiobuttondivCount++; 
            radio_sub_para_Count++;
                        
                        $(InputsWrapper).append('<div class="radiobutton" id="InputsWrapper_4_' + radiobuttondivCount + '">'+
            '<p class="radiobutton_child" id="para'+radio_sub_para_Count+'">'+
            '<label>Radio:' + radiobuttonFieldCount + '</label>'+
            '<input type="radio" name="myradio[]" id="field_' + radiobuttonFieldCount + '" placeholder="Radio_' + radiobuttonFieldCount++ + '"/>'+
            '<button class="removeclass4">x</button>'+
            '<button class="addclass4">+</button>'+
            '</p>'+
            '<p class="radiobutton_child" id="para'+radio_sub_para_Count+'">'+
            '<label>Radio:' + radiobuttonFieldCount + '</label>'+
            '<input type="radio" name="myradio[]" id="field_' + radiobuttonFieldCount + '" placeholder="Radio_' + radiobuttonFieldCount++ + '"/>'+
            '<button class="removeclass4">x</button>'+
            '<button class="addclass4">+</button>'+
            '</p>'+
            '<p  class="radiobutton_child" id="para'+radio_sub_para_Count+'">'+
            '<label>Radio:' + radiobuttonFieldCount + '</label>'+
            '<input type="radio" name="myradio[]" id="field_' + radiobuttonFieldCount + '" placeholder="Radio_' + radiobuttonFieldCount + '"/>'+
            '<button class="removeclass4">x</button>'+
            '<button class="addclass4">+</button>'+
            '</p>'+
            '</div>');
                        x++; 
                    }
                    return false;
                });
                $("body").on("click", ".removeclass4", function() { //to remove Radio-button

                    $(this).parent('p').remove(); 
                    x--; 
                    return false;
                });
                $("body").on("click", ".addclass4", function() { //to add more Radio-button

                    radiobuttonFieldCount++;
                    $(this).parent('p').parent('div').append('<p class="radiobutton_child" id="para'+radio_sub_para_Count+'">'+
          '<label>Radio:' + radiobuttonFieldCount + '</label>'+
          '<input type="radio" name="myradio[]" id="field_' + radiobuttonFieldCount + '" placeholder="Radio_' + radiobuttonFieldCount + '"/>'+
          '<button class="removeclass4">x</button>'+
          '<button class="addclass4">+</button>'+
          '</p>');
                    x++;
                    return false;
                });
        
        $("#reset").on("click", function() { //to reset all elements

                    $("#InputsWrapper").empty();
                });
        
});
  
  



      
   </script>     
        
    </body>
</html>
