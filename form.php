<html>
<head>
    <title>İletişim Formu</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="stil.css" />
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>

<div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form method="post" action="save.php">
                <h3>Bize Mesaj Gönderin</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="gonderen" class="form-control" placeholder="Adınızı yazın *" value="" />
                        </div>
                        
                        <div class="form-group">
                            <input type="text" name="baslik" class="form-control" placeholder="Başlık yazın *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="gonder" class="btnContact" value="Mesajı Gönder" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="icerik" class="form-control" placeholder="Mesajınızı yazın *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>

</body>
</html>