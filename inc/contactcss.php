<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:'Poppins', sans-serif;
}
.contact {
    position: relative;
    min-height: 100vh;
    padding: 50px 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background: url(../images/img6.jpg);
    background-size: cover;
     /* Ajustez la valeur pour éclaircir ou assombrir */
}

.contact .content{
    max-width: 800px;
    text-align: center;
    
}
.contact .content h2{
    font-size: 36px;
    font-weight: 500;
    color: #fff;
}
.contact .content p{
    font-weight: 300;
    color: #fff;
}
.container{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
}
.container .contactInfo{
    width: 50%;
    display: flex;
    flex-direction: column;

}
.container .contactInfo .box{
   position: relative;
   padding: 20px 0;
   display: flex;
}
.container .contactInfo .box .icon {
    min-width: 60px;
    height: 60px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    font-size: 22px;
}
.container .contactInfo .box .text{
    display: flex;
    margin-left: 20px;
    font-size: 16px;
    color: #fff;
    flex-direction: column;
    font-weight: 300;
}
.container .contactInfo .box .text h3{
    font-weight: 500;
    color: #00bcd4;
}
.contactForm{
    width: 40%;
    padding: 40px;
    background: #fff;
}
.contactForm h2{
    font-size: 30px;
    color: #333;
    font-weight: 500;
   
}
.contactForm .inputBox{
    position: relative;
    width: 100%;
    margin-top: 10px;
}
.contactForm .inputBox input,
.contactForm .inputBox textarea
{
    width: 100%;
    padding: 5px 0;
    font-size: 16px;
    margin:  10px 0;
    border: none;
    border-bottom:  2px solid #333;
    outline: none;
    resize: none;
}
.contactForm .inputBox span{
    position: absolute;
    left: 0;
    padding: 5px 0;
    font-size: 16px;
    margin: 10px 0;
    pointer-events: none;
    transition: 0.5s;
    color: #666;
}
.contactForm .inputBox input:focus ~ span,
.contactForm .inputBox input:valid ~ span,
.contactForm .inputBox textarea:focus ~ span,
.contactForm .inputBox textarea:valid ~ span
{
    color: #e91e63;
    font-size: 12px;
    transform: translateY(-20px);
}
.contactForm .inputBox input[type="submit"]{
    width: 100px;
    background: #00bcd4;
    color: #333;
    border: none;
    cursor: pointer;
    padding: 10px;
    font-size: 18px;
}

@media(max-width:991px){
    .contact{
        padding: 50px;
    }
    .container{
        flex-direction: column;
    }
    .container .contactinfo{
        margin-bottom: 40px;
    }
    .container .contactinfo,
    .contactForm{
        width: 100%;
    }
    
}
</style>