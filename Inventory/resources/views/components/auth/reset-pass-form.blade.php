<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6 center-screen">
            <div class="card animated fadeIn w-90 p-4">
                <div class="card-body">
                    <h4>SET NEW PASSWORD</h4>
                    <br/>
                    <label>New Password</label>
                    <input id="pass" placeholder="New Password" class="form-control" type="password"/>
                    <br/>
                    <label>Confirm Password</label>
                    <input id="cpass"  placeholder="Confirm Password" class="form-control" type="password"/>
                    <br/>
                    <button onclick="ResetPass()" class="btn w-100  btn-primary">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    async function ResetPass(){
    
      let password = document.getElementById('pass').value;
      let cpassword = document.getElementById('cpass').value;
    
      if (password.length === 0) {
        errorToast('Password is required');
      } else if (cpassword.length === 0) {
        errorToast('Confirm Password is required');
      } else if (password !== cpassword) {
        errorToast('Password and Confirm Password must be the same');
      } else {
        showLoader();
        try {
          const response = await axios.post("/setPassword", { password: password });
          hideLoader();
          if (response.status === 200) {
            successToast(response.data['message']);
            setTimeout(function () {
              window.location.href = "/userLogin";
            }, 5000);
          } else {
            errorToast(response.data['message']);
          }
        } catch (error) {
          hideLoader();
          console.error("Error occurred:", error);
          errorToast("An error occurred. Please try again later.");
        }
      }
}
</script>
