
<style>
    *{
        font-family: Helvetica, sans-serif;
    }
    .card{
        margin: auto;
        width: 450px;
        background: F7F7F7;
        box-shadow: 3px 2px 21px -8px rgba(0,0,0,0.75);
        -webkit-box-shadow: 3px 2px 21px -8px rgba(0,0,0,0.75);
        -moz-box-shadow: 3px 2px 21px -8px rgba(0,0,0,0.75);
        border-radius: 5px;
    }
    h1{
        padding: 15px 25px;
        font-weight: 700;
        margin: 10px auto;
        text-align: center;
        color: #1D1D1D;
    }
    .content{
        
        
        width: auto;
        margin: 15px auto;
        padding: 20px;
        color: #1D1D1D;
    }

    .footer{
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 15px auto;
        padding: 20px;
        background: #1D1D1D;
        border-radius: 0px 0px 5px 5px;
    }
    .footer img{
        width: 100px;
    }
    .footer a{
        background: #12AA8670;
        margin: 10px;
        font-weight: 700;
        padding: 10px 10px;
        border-radius: 5px;
        color: azure;
        text-decoration: none;
    }
    .footer a:hover{
        background: #12AA86;
        }
        
</style>


<div class="card">
    <div class="title">
        <h1>Algo ha pasado!</h1>
    </div>
    
    <hr>

    <div class="content">
        <p>Lamentamos informarle que no ha sid@ seleccionad@ para participar del programa de Listos Ya! Pero ánimo, hay muchos mas en los cuáles podrá participar. Preparad@ Listos Ya!
        </p>
    </div>
    
    <div class="footer">
        <img src=" {{asset('../images/logolistosya.png')}} " alt="listosya">
        <a href=" http://billetera.listosya.org/">Volver</a>
    </div>



</div>

