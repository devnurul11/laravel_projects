<div class="container px-5 my-5">
    <section>
        <h2 class="text-secondary fw-bolder mb-4">Education</h2>
        <!-- Education Card 1-->

        <div id="educationData">

        </div>

        

    </section>
</div>


<script>
    educationData();
    async function educationData() {
        let URL = '/educationsdata';

        try {

            let response = await axios.get(URL);

            response.data.forEach(item => {
                document.getElementById('educationData').innerHTML += (
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
<?php /**PATH G:\laragon\www\massignment17\resources\views/components/education.blade.php ENDPATH**/ ?>