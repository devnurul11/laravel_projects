<div class="d-flex justify-content-center fs-2 gap-4">
    <a target="-blank" class="text-gradient" id="twitterLink" href="#!" ><i class="bi bi-twitter"></i></a>
    <a target="-blank" class="text-gradient" id="linkedinLink" href="#!"><i class="bi bi-linkedin"></i></a>
    <a target="-blank" class="text-gradient" id="githubLink" href="#!"><i class="bi bi-github"></i></a>
</div>

<script>
    socialdata();
    async function socialdata() {
        let URL = '/socialdata';

        try {
    //preloader
    document.getElementById('loading-div').classList.remove('d-none');
            document.getElementById('content-div').classList.add('d-none');


            const response = await axios.get(URL);

            document.getElementById('loading-div').classList.add('d-none');
            document.getElementById('content-div').classList.remove('d-none');

            document.getElementById('twitterLink').href= response.data.twitterLink;
            document.getElementById('githubLink').href= response.data.githubLink;
            document.getElementById('linkedinLink').href= response.data.linkedinLink;

        } catch (error) {
            alert(error)
        }

    }
</script>
