<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans:700,300);
.frame {
	position: absolute;
	top: 50%;
	left: 50%;
	width: 400px;
	height: 400px;
	margin-top: -200px;
	margin-left: -200px;
	border-radius: 2px;
	box-shadow: 4px 8px 16px 0 rgba(0, 0, 0, 0.1);
	overflow: hidden;
	background: linear-gradient(to top right, darkmagenta 0%, hotpink 100%);
	color: #1B1E4F;
	font-family: "Open Sans", Helvetica, sans-serif;
}

.center {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 300px;
	height: 260px;
	border-radius: 3px;
	box-shadow: 8px 10px 15px 0 rgba(0, 0, 0, 0.2);
	background: #D9D9DF;
	display: flex;
	align-items: center;
	justify-content: space-evenly;
	flex-direction: column;
}

.title {
	width: 100%;
	height: 50px;
	border-bottom: 1px solid #999;
	text-align: center;
}

h1 {
	font-size: 16px;
	font-weight: 300;
	color: #666;
}

.dropzone {
	width: 100px;
	height: 80px;
	border: 1px dashed #999;
	border-radius: 3px;
	text-align: center;
}

.upload-icon {
	margin: 25px 2px 2px 2px;
}

.upload-input {
	position: relative;
	top: -62px;
	left: 0;
	width: 100%;
	height: 100%;
	opacity: 0;
}

.btn {
	display: block;
	width: 140px;
	height: 40px;
	background: darkmagenta;
	color: #fff;
	border-radius: 3px;
	border: 0;
	box-shadow: 0 3px 0 0 hotpink;
	transition: all 0.3s ease-in-out;
	font-size: 14px;
}

.btn:hover {
	background: rebeccapurple;
	box-shadow: 0 3px 0 0 deeppink;
}
.alert-success {
            margin-top: 20px; /* Atur margin sesuai kebutuhan Anda */
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1050; /* Pastikan alert berada di atas elemen lain */
        }

</style>
</head>
<body>
<form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
    @csrf <!-- Token CSRF -->
    <div class="center">
        <div class="title">
            <h1>Drop file to upload</h1>
        </div>
        <div class="dropzone">
            <img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon"/>
            <input type="file" class="upload-input" id="photo" name="photo"/>
        </div>

        <button type="submit" class="btn">Upload file</button>
    </div>
</form>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- Script untuk menampilkan pesan sukses -->
    <script>
        $(document).ready(function() {
            @if (session('success'))
                // Membuat elemen alert Bootstrap
                const alert = `<div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                               </div>`;

                // Menambahkan alert ke body dan memposisikannya di atas halaman
                $('body').prepend(alert);

                // Menghilangkan alert setelah 3 detik
                setTimeout(function() {
                    $('.alert').alert('close');
                }, 3000);
            @endif
        });
    </script>
</body>
</html>