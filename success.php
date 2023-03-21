<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
    body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
    }

    video {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
    }

    
.content {
    position: absolute;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 100%;
    height: 100%;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }
    h1 {
        color: #88B04B;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-weight: 900;
        font-size: 40px;
        margin-bottom: 10px;
    }

    p {
        color: #404F5E;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-size: 20px;
        margin: 0;
    }

    i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left: -15px;
    }

    .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px transparent;
        display: inline-block;
        margin: 0 auto;
    }
</style>

<body>
    <video src="assets/back.mp4" autoplay muted loop></video>
    <div class="content">
        <div class="card">
            <div style="border-radius:200px; height:200px; width:200px; background: transparent; margin:0 auto;">
                <i class="checkmark">✓</i>
            </div>
            <h1>Registration Success</h1>
            <p>We are waiting for you<br /> Don't Be late</p>
        </div>
    </div>

</body>

</html>