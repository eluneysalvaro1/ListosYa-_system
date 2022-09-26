
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
        <h1>Gracias por sumarte a ListosYa!</h1>
    </div>
    
    <hr>

    <div class="content">
        <p>Su cuenta ha sido creada con éxito. Para poder participar de los diferentes eventos propuestos por la organización te recomendamos completes todos los datos faltantes. Dicha
            sección la encontraras en tu perfíl. Una vez hayas cargado todo, podras ser parte de nuestras increibles propuestas de voluntariado.
        </p>
    </div>
    
    <div class="footer">
        <img src=" {{asset('../images/logolistosya.png')}} " alt="listosya">
        <a href=" http://127.0.0.1:8000/">Volver</a>
    </div>



</div>

