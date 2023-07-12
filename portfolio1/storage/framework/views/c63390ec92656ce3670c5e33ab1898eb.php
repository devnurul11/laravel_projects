<div class="container px-5 my-5">
    <section>
        <div class="container">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                <a class="btn btn-primary px-4 py-3" href="https://devnurul.me/">
                    <div class="d-inline-block bi bi-download me-2"></div>
                    Download Resume
                </a>
            </div>
        </div>
        
        <!-- Education Card 1-->

        <div id="exData">

        </div>

        

    </section>
</div>


<script>
    educationData();
    async function educationData() {
        let URL = '/experiencedata';

        try {

            let response = await axios.get(URL);

            response.data.forEach(item => {
                document.getElementById('exData').innerHTML += (
                    `<div  class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5 ">
                        <div class="row align-items-center gx-5">
                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                <div class="bg-light p-4 rounded-4">
                                    <div class="text-secondary fw-bolder mb-2">Duration: ${item['duration']}</div>
                                        <div class="mb-2">
                                        <div class="small fw-bolder"> Institution: ${item['institutionName']}</div>
                                        <div class="small text-muted">Fields: ${item['field']}</div>
                                </div>
                                
                            </div>
                        </div>
                    <div class="col-lg-8">
                        <div>${item['details']}</div>
                    </div>
                </div>
            </div>
        </div>  `
                )
            });


        } catch (error) {
            alert(error);
        }

    }
</script>
<?php /**PATH G:\laragon\www\massignment17\resources\views/components/experiences.blade.php ENDPATH**/ ?>