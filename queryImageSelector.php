<script>
    let mainImg = document.querySelector('#pix2');
    let sImg2 = document.querySelector('#img2');
    let sImg3 = document.querySelector('#img3');
    let sImg4 = document.querySelector('#img4');   
    let sImg5 = document.querySelector('#img5');   
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

</script>