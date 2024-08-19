@import url("https:fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins' , sans-serif;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;


}
.wrapper{
    position: relative;
    width: 750px;
    height: 580px;
    background: transparent;
    border: 2px solid dodgerblue;
    box-shadow: 0 0 25px dodgerblue;
    overflow: hidden;
    
}
.wrapper .form-box{
    position: absolute;
    top: 0;
    width: 50%;
    height: 100%;
    background-color: dodgerblue;
    display: flex;
    flex-direction: column;
    justify-content: center;
    
}
.wrapper .form-box.login{
    left: 0;
    padding: 0 60px 0 40px;
    
}


.wrapper .form-box.register{
    right: 0;
    padding: 0 30px 0 50px;
    
    
}



.form-box h2{
    font-size: 32px;
    color:beige ;
    text-align: center;
}
.form-box .input-box{
    position: relative;
    width: 100%;
    height: 50px;
    margin: 25px 0;
}
.input-box input {
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    border-bottom: 2px solid beige;
    padding-right: 23px;
    font-size: 16px;
    color: beige;
    font-weight: 500;
    transition: .5s;
}

.input-box input:focus,
.input-box input:valid{
    border-bottom: 2px solid beige;

}
.input-box label{
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    font-size: 16px;
    color: beige;
    pointer-events: none;
    transition: .5s;

}
.input-box input:focus~label,
.input-box input:valid~label{
    top: -5px;
    color:#fff;
    
}
.input-box i{
    position: absolute;
    top: 50%;
    right: 0;
    transform:translateY(-50%) ;
    font-size: 18px;
    color: beige;
    transition: .5s;
}
.input-box input:focus~i,
.input-box input:valid~i{
    color:#fff;
}
.btn{
    position: relative;
    width: 100%;
    height: 45px;
    background: transparent;
    border: 2px solid beige;
    outline: none;
    border-radius: 40px;
    cursor: pointer;
    font-size: 16px;
    color: beige;
    font-weight: bold;
    z-index:1 ;
    overflow: hidden;
    
    
}
.btn::before{
    content: '';
    position: absolute;
    top: -100%;
    left: 0;
    width: 100%;
    height: 300%;
    background: linear-gradient(dodgerblue,#fff);
    z-index: -1;
    transition: .5s;
    
}
.btn:hover::before{
    top: 0;
}
.form-box .logreg-link{
    font-size: 14.5px;
    color:beige;
    text-align: center;
    margin: 20px 0 10px;
}
.logreg-link p a{
    color: #efff;
    text-decoration: none;
    font-weight: 600;
}
.wrapper .info-text{
    position: absolute;
    top: 0;
    width: 50%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;


}
.wrapper .info-text.login{
    right:0 ;
    text-align: right;
    padding: 0 40px 60px 150px;
    
}


.info-text h2{
    font-size: 36px;
    color: #fff;
    line-height: 1.3;
    text-transform:uppercase ;

}
.info-text p{
    font-size: 16px;
    color: #fff
}
.wrapper .bg-animate{
    position: absolute;
    top: -4px;
    right: 0;
    width: 850px;
    height: 455px;
    background: linear-gradient(45deg,dodgerblue,#fff);
    border-bottom: 3px solid #fff;
    transform: rotate(10deg) skewY(40deg);
    transform-origin: bottom right;
    transition: 1.5s ease;
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
    height: 2000px;
    background: dodgerblue;
    border-top: 3px solid #fff;
    /*transform:rotate: (-11deg) skewY(-41deg);*/
    transform: rotate(-11deg) skewY(-41deg);
    transform-origin: bottom left;
    transition: 1.5s ease;
}
.wrapper.active .bg-animate2{
    transform: rotate(-11deg) skewY(-41deg);
    transition-delay: 1.2s;

}
.input-box img{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-top: -30px;
    margin-left: 90px;

}
#input-file{
    border-bottom: none;
}
#file{
   margin-top: 50px;
}













































.wrapper .form-box.login .animation{
    transform: translateX(0);
    opacity: 1;
    filter: blur(0);
    transition: .7s ease;
}
.wrapper.active .form-box.login .animation{
    transform: translateX(-120%);
    opacity: 0;
    filter: blur(10px);
    transition-delay: calc(.1s * var(--i));
}






.wrapper .form-box.register .animation{
    transform: translateX(120%);
    opacity: 0;
    filter: blur(10px);
    transition: .7s ease;
}
.wrapper.active .form-box.register .animation{
    transform: translateX(120%);
    opacity: 1;
    filter: blur(0);
    transition-delay: calc(.1s * var(--i))
}
    .wrapper .info-text.login .animation{
    transform: translateX(0);
    opacity: 1;
    filter: blur(0);
    transition: .7s ease;
    }
}
.wrapper.active .info-text.login .animation{
    transform: translateX(120%);
    opacity: 0;
    filter: blur(10px);
    transition-delay: calc(.1s * var(--i));
}
.wrapper .info-text.register{
    margin-top: -150px;
    margin-left: 5px;
    pointer-events: none;
    
    
}

.wrapper .info-text.register .animation{
    transform: translateX(-120%);
    opacity: 0;
    filter: blur(10px);
    transition: .7s ease;

}
.wrapper.active .info-text.register .animation{
    transform: translateX(0);
    opacity: 1;
    filter: blur(0);
    transition-delay: calc(.1s * var(--i));
}










