<div class="login_register_wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-10">
                <div class="login_wrap">
                    <div class="padding_eight_all bg-white">
                        <div class="heading_s1">
                            <h3>Verification</h3>
                        </div>
                        <div class="form-group mb-3">
                            <input id="code" type="text" required="" class="form-control" name="code"
                                   placeholder="Verification Code">
                        </div>
                        <div class="form-group mb-3">
                            <button onclick="verify()" type="submit" class="btn btn-dark btn-block" name="login">
                                Confirm
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>

    async function verify() {
        let otp = $('#code').val();
        let email = sessionStorage.getItem('email')
        if (otp.length === 0) {
            errorToast('OTP Required')
        } else {
            let res = await axios.post('/verifyLogin', {email: email, otp: otp})

            $(".preloader").delay(50).fadeOut(60).removeClass('loaded');

            if (res.data['message'] === 'success') {
                 // sessionStorage.clear()
                sessionStorage.removeItem('email');
                if (sessionStorage.getItem('last_location')) {

                    window.location.href = sessionStorage.getItem('last_location')
                } else {
                    window.location.href = '/';
                }

                    successToast('Login Successful')

            } else {
                $(".preloader").delay(50).fadeOut(60).addClass('loaded');
                errorToast('Failed')
            }
        }
    }


</script>

