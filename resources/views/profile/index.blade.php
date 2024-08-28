<div id="profile" class="container-side">
    <h2 class="e-name-menu e-border-menu">Profile</h2>
    <div class="row mt-5">
        <div class="col-md-4">
            <h3 class="e-home-body-style fw-bold">It's a nice to meet you here</h3>
            <p class="e-name-color">
                Hi, my name is Erwin. I am a Web Developer with background engineering. I graduate from Computer Engineering at SMK Negeri 2 Bandung. I have been wrote  code since Vocational Hight School,
                    from there i got opportunity to working in a company based on website application development at Bandung.
            </p>
        </div>

        <div class="col-md-4 text-center">
            <img src="{{ asset('images/erwin-photo.jpeg') }}" class="rounded-circle e-width-200" alt="Erwin Indriya Raharja">
        </div>

        <div class="col-md-4">
            <h3 class="e-home-body-style fw-bold">Details</h3>
            <p>
                <strong class="e-name-color">Name :</strong>
                <br>
                <span class="e-name-color">Erwin Indriya Raharja</span>
                <br>
                <strong class="e-name-color">Age :</strong>
                <br>
                <span class="e-name-color" id="age-me"></span>
                <br>
                <strong class="e-name-color">Location :</strong>
                <br>
                <span class="e-name-color">Bandung , Indonesia, Earth</span>
            </p>
        </div>
    </div>
</div>

@section('javascript')
<script>
    $(document).ready(function(){
        var dob = new Date("11/29/2000");
        var month_diff = Date.now() - dob.getTime();
        var age_dt = new Date(month_diff); 
        var year = age_dt.getUTCFullYear();
        
        var age = Math.abs(year - 1970);
        
        $('#age-me').text(age+" Years");
    });
</script>
@endsection