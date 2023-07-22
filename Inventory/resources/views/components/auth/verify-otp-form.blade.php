<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6 center-screen">
            <div class="card animated fadeIn w-90  p-4">
                <div class="card-body">
                    <h4>ENTER OTP CODE</h4>
                    <br/>
                    <label>6 Digit OTP has been sent in your email</label>
                    <input id="code" placeholder="Code" class="form-control" type="text"/>
                    <br/>
                    <button onclick="verifyOtp()"  class="btn w-100 float-end btn-primary"> Next </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
async function verifyOtp() {
  let otp = document.getElementById('code').value;

  try {
    const response = await axios.post('/verifyOtp',  {
                otp:otp,
                email:sessionStorage.getItem('email')
            });
    const data = response.data;

    if (data.status === 'Success') {
      // The OTP is verified successfully
      
      successToast(data.message);

      
      setTimeout(() => {
        window.location.href = '/resetPassword';
      }, 1000);
      
     
      // Perform any additional actions or redirect to a new page
    } else {
      // The OTP verification failed
      alert(data.message);
    }
  } catch (error) {
    // Handle any errors that occurred during the request
    console.error(error);
  }
}
</script>
