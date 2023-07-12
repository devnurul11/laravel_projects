<div class="container px-5 my-5">
    <section>
        <!-- Skillset Card-->
        <div class="card shadow border-0 rounded-4 mb-5">
            <div class="card-body p-5">
                <!-- Professional skills list-->
                <div class="mb-5">
                    <div class="d-flex align-items-center mb-4">
                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i
                                class="bi bi-tools"></i></div>
                        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Professional Skills</span></h3>
                    </div>
                    <div id="skillData" class="row row-cols-1 row-cols-md-3 mb-4">
                        
                        
                    </div>
                
                </div>
                <!-- Languages list-->
                <?php echo $__env->make('components.language', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </section>
</div>

<script>
    skillData();
    async function skillData() {
        let URL = '/skillsdata';

        try {
            let response = await axios.get(URL);

            response.data.forEach((item) => {
                document.getElementById('skillData').innerHTML += (
                    `<div class="col mb-4 pb-3 mb-md-0">
                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">${item['name']}</div>
                        </div>`
                )
            });

        } catch (error) {
            alert(error)
        }

    }
</script>
<?php /**PATH G:\laragon\www\massignment17\resources\views/components/skills.blade.php ENDPATH**/ ?>