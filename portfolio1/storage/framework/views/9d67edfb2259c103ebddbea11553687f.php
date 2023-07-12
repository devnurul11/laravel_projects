

<section class="py-5">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div id="projectList" class="col-lg-11 col-xl-9 col-xxl-8">
                
            
            </div>
        </div>
    </div>
</section>

<script>
    projectData();
    async function projectData() {
        let URL = '/projectsdata';


        try{

            //preloader
            document.getElementById('loading-div').classList.remove('d-none');
            document.getElementById('content-div').classList.add('d-none');


            const response = await axios.get(URL);

            document.getElementById('loading-div').classList.add('d-none');
            document.getElementById('content-div').classList.remove('d-none');

            response.data.forEach((item) => {
                document.getElementById('projectList').innerHTML+=(
                    `
                    <div  class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder">${item['title']}</h2>
                                <p>${item['details']}</p>
                            </div>
                            <img class="img-fluid w-40" src="${item['thumbmailLink']}"
                                alt="..." />
                        </div>
                    </div>
                </div>
                    `
                )
            });
        }catch(error){
            alert(error)
        }

        
    }
</script><?php /**PATH G:\laragon\www\massignment17\resources\views/components/project.blade.php ENDPATH**/ ?>