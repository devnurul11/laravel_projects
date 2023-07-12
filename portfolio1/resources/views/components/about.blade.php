<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline" ">About Me</span></h2>
                    <p class="lead fw-light mb-4" id="title">My name is Start Bootstrap and I help brands grow.</p>
                    <p class="text-muted" id="details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit
                        dolorum itaque qui unde quisquam consequatur autem. Eveniet quasi nobis aliquid cumque
                        officiis sed rem iure ipsa! Praesentium ratione atque dolorem?</p>
                    @include('components.socialdata')
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    aboutData();
    async function aboutData(){
        let URL = '/aboutdata';


        try {
            let response = await axios.get(URL);

            
                document.getElementById('title').innerHTML= response.data.title;
                document.getElementById('details').innerHTML= response.data.details;
                
            

        } catch (error) {
            alert(error)
        }
    }
</script>