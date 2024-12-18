<?php
session_start();
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakım Talebi Formu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Özel CSS -->
    <link href="style.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <style>
        /* Genel Stil */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            background: url(img/1.jpg) no-repeat;
            opacity: 95%;
            
        }
        .container {
            width: 750px;
            border-radius: 10px;
            color: black;
            padding: 40px 35px 55px;
            border: 2px solid rgba(255, 255, 255, .2);
            background: rgba(350, 355, 355, 0.4);
            backdrop-filter: blur(70px);
        }

        .section-title h2 {
            font-size: 28px;
            font-weight: 600;
            color: black;
            margin-bottom: 15px;
            text-align: center;
            padding-top: 15px;
        }

        .description {
            color: black;
            font-size: 16px;
            margin-bottom: 30px;
            text-align: center;
            
        }

        form {
            width: 100%;
        }

        .form-label {
            font-weight: 500;
            color: black;
        }

        .form-control,
        .form-select {
            padding: 12px;
            font-size: 14px;
            border-radius: 36px;
            border: 1px solid #d6e9fa;
            transition: all 0.3s;
            width: 100%;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #000108;
            box-shadow: 0 0 6px rgba(16, 20, 96, 0.2);
        }

        .btn-primary {
            background-color: #101460;
            border: none;
            padding: 10px 20px;
            font-size: 20px;
            font-weight: bold;
            color: #fff;
            border-radius: 36px;
            transition: background-color 0.3s;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #166ab5;
        }
        .logo{
        text-align: center;
        }
        .back-button {
        position: absolute;
        top: 10px;
        left: 10px;
        z-index: 1000;
        padding: 7px 35px;
        background-color: #fff;
        color: #101460;
        border: none;
        border-radius: 22px;
        font-size: 20px;
        text-decoration: none;
        transition: background-color 0.3s;
        }

.back-button:hover {
    background-color: #0e6fb9;
}

        /* Yedek Parça ve Diğer Alanlar */
        #sparePartFields,
        #maintenanceFields,
        #installationFields {
            display: none;
        }
        .main-menu i {
            color: #101460;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="main-menu">
            <a href="index.php">
                <i class="bi bi-x-circle"></i>
            </a>
        </div>
        <div class="section-title">
            <div class="logo"><img src="img/climassist_logo.png" /></div><br>
            <h2>Bakım Talebinizi Oluşturun</h2><br>
            <p class="description"><b>
                Bakım talebinizi bize çevrimiçi olarak iletebilirsiniz. Size en kısa sürede dönüş yapabilmemiz için
                aşağıdaki kısa formu doldurarak detayları bizimle paylaşmanızı rica ederiz.
            </b></p>
        </div>

        <form class="shadow p-4 rounded" method="post" action="submit_request.php">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="username" class="form-label">Ad</label>
                    <input id="username" name="username" class="form-control" 
                        value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>" 
                        required autocomplete="given-name" placeholder="Adınızı girin" />
                </div>
                <div class="col-md-6">
                    <label for="usersurname" class="form-label">Soyad</label>
                    <input id="usersurname" name="usersurname" class="form-control" 
                        value="<?php echo isset($_SESSION['usersurname']) ? $_SESSION['usersurname'] : ''; ?>" 
                        required autocomplete="family-name" placeholder="Soyadınızı girin" />
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="email" class="form-label">E-posta</label>
                    <input id="email" name="email" class="form-control" type="email" 
                        value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" 
                        required autocomplete="email" placeholder="E-posta adresinizi girin" />
                </div>
                <div class="col-md-6">
                    <label for="phone" class="form-label">Telefon</label>
                    <input id="phone" name="phone" class="form-control" 
                        value="<?php echo isset($_SESSION['phone']) ? $_SESSION['phone'] : ''; ?>" 
                        placeholder="05XX1112233" required />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="clienttype" class="form-label">Müşteri Tipi</label>
                    <select id="clienttype" name="clienttype" class="form-select" required>
                        <option value="">Seçiniz</option>
                        <option value="Bireysel">Bireysel</option>
                        <option value="Kurumsal">Kurumsal</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="requesttype" class="form-label">Talep Türü</label>
                    <select id="requesttype" name="requesttype" class="form-select" required
                        onchange="updateFormFields()">
                        <option value="">Seçiniz</option>
                        <option value="Yedek Parça">Yedek Parça</option>
                        <option value="Bakım Aralığı">Bakım Aralığı</option>
                        <option value="Montaj ve Kurulum">Montaj ve Kurulum</option>
                    </select>
                </div>
            </div>

            <div id="sparePartFields" class="mb-3">
                <label for="spareparttype" class="form-label">Yedek Parça Tipi</label>
                <select id="spareparttype" name="spareparttype" class="form-select">
                    <option value="">Seçiniz</option>
                    <option value="Split Klima">Split / RAC / CAC / PAC</option>
                    <option value="VRF">VRF / DVM S2 / S / PlusIV</option>
                    <option value="FJM">FJM Multi</option>
                </select>
            </div>

            <div id="maintenanceFields" class="mb-3">
                <label for="recoverytime" class="form-label">Bakım Aralığı</label>
                <select id="recoverytime" name="recoverytime" class="form-select">
                    <option value="">Seçiniz</option>
                    <option value="3 Aylık">3 aylık</option>
                    <option value="6 Aylık">6 aylık</option>
                    <option value="1 Yıllık">1 Yıllık</option>
                </select>
            </div>

            <div id="installationFields" class="mb-3">
                <label for="unit" class="form-label">Ünite Tipi</label>
                <select id="unit" name="unit" class="form-select">
                    <option value="">Seçiniz</option>
                    <option value="İnner_Unit">İç Ünite</option>
                    <option value="Outer_Unit">Dış Ünite</option>
                </select>
            </div>

            <!-- Mesaj Alanı -->
            <div class="mb-3">
                <label for="message" class="form-label">Mesaj</label>
                <textarea id="message" name="message" class="form-control" rows="3" placeholder="Talep hakkında eklemek istediğiniz bilgileri buraya yazın."></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Gönder</button>
        </form>
    </div>

    <script>
        function updateFormFields() {
            var requestType = document.getElementById("requesttype").value;
            document.getElementById("sparePartFields").style.display = (requestType === "Yedek Parça") ? "block" : "none";
            document.getElementById("maintenanceFields").style.display = (requestType === "Bakım Aralığı") ? "block" : "none";
            document.getElementById("installationFields").style.display = (requestType === "Montaj ve Kurulum") ? "block" : "none";
        }
    </script>
</body>



</html>