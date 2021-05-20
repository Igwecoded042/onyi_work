<script>
    let mainImg = document.querySelector('#pix2');
    let sImg2 = document.querySelector('#img2');
    let sImg3 = document.querySelector('#img3');
    let sImg4 = document.querySelector('#img4'); 
    let sImg5 = document.querySelector('#img5');  
    let sImg6 = document.querySelector('#img6');  
    let sImg7 = document.querySelector('#img7');  
    let sImg8 = document.querySelector('#img8');  
    let sImg9 = document.querySelector('#img9');  
        
        // console.log(mainImg);
    sImg2.addEventListener('click',function(e){
        e.preventDefault();
    let big = mainImg.getAttribute('src');
        let sm = sImg2.getAttribute('src');      
        mainImg.setAttribute('src',sm);
    })
    sImg3.addEventListener('click',function(e){
        e.preventDefault();
    let big =    mainImg.getAttribute('src');
        let sm1 =   sImg3.getAttribute('src');      
        mainImg.setAttribute('src',sm1);
    })
    sImg4.addEventListener('click',function(e){
        e.preventDefault();
    let big =    mainImg.getAttribute('src');
        let sm2 =   sImg4.getAttribute('src');      
        mainImg.setAttribute('src',sm2);
    })
    sImg5.addEventListener('click',function(e){
        e.preventDefault();
    let big =    mainImg.getAttribute('src');
        let sm3 =   sImg5.getAttribute('src');      
        mainImg.setAttribute('src',sm3);
    })
    sImg6.addEventListener('click',function(e){
        e.preventDefault();
    let big =    mainImg.getAttribute('src');
        let sm4 =   sImg6.getAttribute('src');      
        mainImg.setAttribute('src',sm4);
    })
    sImg7.addEventListener('click',function(e){
        e.preventDefault();
    let big =    mainImg.getAttribute('src');
        let sm5 =   sImg7.getAttribute('src');      
        mainImg.setAttribute('src',sm5);
    })
    sImg8.addEventListener('click',function(e){
        e.preventDefault();
    let big =    mainImg.getAttribute('src');
        let sm6 =   sImg8.getAttribute('src');      
        mainImg.setAttribute('src',sm6);
    })
    sImg9.addEventListener('click',function(e){
        e.preventDefault();
    let big =    mainImg.getAttribute('src');
        let sm7 =   sImg9.getAttribute('src');      
        mainImg.setAttribute('src',sm7);
    })
    
</script>