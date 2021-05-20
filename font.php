<?php require_once "header.php";?>

<a href="#"> <i class="fa fa-star fa cls1" data-index="0" ></i></a>
<a href="#"> <i class="fa fa-star fa cls2" data-index="1" ></i></a>
<a href="#"> <i class="fa fa-star fa cls3" data-index="2" ></i></a>
<a href="#"> <i class="fa fa-star fa cls4" data-index="3" ></i></a>
<a href="#"> <i class="fa fa-star fa cls5" data-index="4" ></i></a>

<!-- using query to make star rating -->
<script> 
    $(document).ready(function(){ 
        var rating = 0;
        // starting query code
        let cls = $('.cls1');
        cls.on('click',function(){
         
            $('.cls1').addClass("pink");
            $('.cls2').removeClass("pink");
            $('.cls3').removeClass("pink");
            $('.cls4').removeClass("pink");
            $('.cls5').removeClass("pink");
            rating = 'Poor';
            $.ajax({
                url: "rating.php", 
                type: "post",
                data:{"rating":rating},
                success: function(result){
                    alert(result);
            
                       }
            });

     });

     let cls2 = $('.cls2');
        cls2.on('click',function(){
         
            $('.cls1').addClass("pink");
            $('.cls2').addClass("pink");
            $('.cls3').removeClass("pink");
            $('.cls4').removeClass("pink");
            $('.cls5').removeClass("pink");
            rating = 'Quite Poor';
            $.ajax({
                url: "rating.php", 
                type: "post",
                data:{"rating":rating},
                success: function(result){
                    alert(result);
            
                       }
            });
     }); 
     let cls3 = $('.cls3');
        cls3.on('click',function(){
            $('.cls1').addClass("pink");
            $('.cls2').addClass("pink");
            $('.cls3').addClass("pink");
            $('.cls4').removeClass("pink");
            $('.cls5').removeClass("pink");
            rating = 'Average';
            $.ajax({
                url: "rating.php", 
                type: "post",
                data:{"rating":rating},
                success: function(result){
                    alert(result);
            
                       }
            });
     });


     let cls4 = $('.cls4');
        cls4.on('click',function(){
            $('.cls1').addClass("pink");
            $('.cls2').addClass("pink");
            $('.cls3').addClass("pink");
            $('.cls4').addClass("pink");
            $('.cls5').removeClass("pink");

            rating = "It's Awesome";
            $.ajax({
                url: "rating.php", 
                type: "post",
                data:{"rating":rating},
                success: function(result){
                    alert(result);
            
                       }
            });
     });



     let cls5 = $('.cls5');
        cls5.on('click',function(){
            $('.cls1').addClass("pink");
            $('.cls2').addClass("pink");
            $('.cls3').addClass("pink");
            $('.cls4').addClass("pink");
            $('.cls5').addClass("pink");
            rating = 'Excellent';

            $.ajax({
                url: "rating.php", 
                type: "post",
                data:{"rating":rating},
                success: function(result){
                    alert(result);
            
                       }
            });
     });
        });
        // ending query code
</script>





