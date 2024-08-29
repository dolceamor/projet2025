<style>
    @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900display=swap");

*, *::before, *::after{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family: 'Nunito', sans-serif;
}

html{
    font-size: 14px;
}

body{
    height: 100vh;
    transition: background-color .3s ease-in-out, color 0.3s ease-in-out;
}
ul{
    list-style: none;
}
a{
    text-decoration: none;
    transition: color 0.3s ease-in-out;
}

.main-container{
    grid-area: main;
    padding: 20px 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;   
}
h3{
    color:#fff;
}
.wrapper{
    position: relative;
    width: 750px;
    height: 530px;
    background: transparent;
    border: 2px solid beige;
    overflow: hidden;
    background-color:dodgerblue;
    
    
    
}
.wrapper .form-box{
    position: absolute;
    top: 0;
    width: 50%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    
}
.wrapper .form-box.login{
    left: 0;
    padding: 0 60px 0 40px;
    
}
.wrapper .form-box.login .animation{
    transform: translateX(0);
    opacity: 1;
    filter: blur(0);
    transition: .7s ease;
    transition-delay: calc(.1s * var(--j));

}
.wrapper.active .form-box.login .animation{
    transform: translateX(-120%);
    opacity: 0;
    filter: blur(10px);
    transition-delay: calc(.1s * var(--i));

}
.wrapper .form-box.register{
    right: 0;
    padding: 0 40px 0 100px;
    pointer-events: none;
   
}
.wrapper.active .form-box.register{
    pointer-events: auto;

}
.wrapper .form-box.register .animation{
    transform: translateX(120%);
    opacity: 0;
    filter: blur(10px);
    transition: .7s ease;
    transition-delay: calc(.1s * var(--j));
}
.wrapper.active .form-box.register .animation{
    transform: translateX(0);
    opacity: 1;
    filter: blur(0);
    transition-delay: calc(.1s * var(--i));
   
}
.form-box h2{
    font-size: 32px;
    color:#fff ;
    text-align: center;
}
.form-box .input-box{
    position: relative;
    width: 100%;
    height: 50px;
    margin: 25px 0 ;
}
.input-box input {
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border-bottom: 2px solid #fff;
    padding-right: 23px;
    font-size: 16px;
    color: #fff;
    font-weight: 500;
    transition:.5s;
    
}
.form-box.register .input-box{
    margin-left: 23px;
    
}
.input-box input:focus,
.input-box input:valid{
    border-bottom: 2px solid #fff;

}

.input-box label {
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    font-size: 16px;
    color: #fff;
    pointer-events: none;
    transition: .5s;

}

.input-box input:focus~label,
.input-box input:valid~label{
    top: -5px;
    color:#fff;
    
}
.input-box span {
    position: absolute;
    top: 50%;
    right: 0;
    transform:translateY(-50%) ;
    font-size: 18px;
    color: #fff;
    transition: .5s;
    
}


.btn{
    position: relative;
    width: 100%;
    height: 45px;
    background: transparent;
    border: 2px solid #fff;
    outline: none;
    border-radius: 40px;
    cursor: pointer;
    font-size: 16px;
    color:#382405;
    font-weight: 600;
    z-index: 1;
    overflow: hidden;
    
    
}
.btn::before{
    content: '';
    position: absolute;
    top: -100%;
    left: 0;
    width: 100%;
    height: 300%;
    background-color: #fff;
    z-index: -1;
    transition: .5s;
    
}
.btn:hover::before{
    top: 0;
}
.form-box .logreg-link{
    font-size: 14.5px;
    color:#fff;
    text-align: center;
    margin: 20px 0 10px;
}
.logreg-link p a{
    color: #382405;
    text-decoration: none;
    font-weight: 600;
}

.wrapper .info-text{
    position: absolute;
    top: 0;
    width: 60%;
    height: 100%;
    margin-top: 100px;
    
    

}
#my{
    margin-left: 50px;
    margin-top: 2px;
}
.wrapper .info-text.login{
    right:0 ;
    text-align: right;
    padding: 0 40px 60px 150px;
    
    
    
}
.wrapper .info-text.login .animation{
    transform: translateX(0);
    opacity: 1;
    filter: blur(0);
    transition: .7s ease;
    transition-delay: calc(.1s * var(--j));
    }

.wrapper.active .info-text.login .animation{
    transform: translateX(120%);
    opacity: 0;
    filter: blur(10px);
    transition-delay: calc(.1s * var(--i));
}
.wrapper .info-text.register{
    left: 0;
    text-align: left;
    padding: 0 150px 60px 40px ;
    pointer-events: none;
    pointer-events: none;
    
    
    
}
.wrapper.active .info-text.register{
    pointer-events: auto;

}
.wrapper .info-text.register .animation{
    transform: translateX(-120%);
    opacity: 0;
    filter: blur(10px);
    transition: .7s ease;
    transition-delay: calc(.1s * var(--j));
    

}
.wrapper.active .info-text.register .animation{
    transform: translateX(0);
    opacity: 1;
    filter: blur(0);
    transition-delay: calc(.1s * var(--i));
    

}
.info-text h2{
    font-size: 30px;
    color:#382405;
    line-height: 1.3;

}
.info-text p{
    font-size: 16px;
    color:#382405;
}
.wrapper .bg-animate{
    position: absolute;
    top: -4px;
    right: 0;
    width: 850px;
    height: 600px;
    background-color: #fff;
    border-bottom: 3px solid #fff;
   transform: rotate(10deg) skewY(40deg);
    transform-origin: bottom right;
    transition: 1.5s ease;
    transition-delay: 1.6s;
    
}
.wrapper.active .bg-animate{
    transform: rotate(0) skewY(0);
    transition-delay: .5s;
   

}
.wrapper .bg-animate2{
    position: absolute;
    top: 100%;
    left: 250px;
    width: 850px;
    height: 700px;
    background-color:dodgerblue;
    border-top: 3px solid #fff;
    /*transform: rotate(-11deg) skewY(-41deg);*/
    transform: rotate(0) skewY(0);
    transform-origin: bottom left;
    transition: 1.5s ease;
    transition-delay: .5s;
    
}
.wrapper.active .bg-animate2{
    transform: rotate(-11deg) skewY(-41deg);
    transition-delay: 1.2s;

}


</style>
