<div>
    <h3><span class="fa fa-link"></span> Useful Links</h3>
    <hr>
    {{-- <div><a href="{{ route('published.paper') }}"><span class="fa fa-file-pdf-o"></span> Published Papers</a></div> --}}
    {{-- <div><a href="{{ route('paper.status') }}"><span class="fa fa-question-circle"></span> Check Paper Status</a></div> --}}
    <div><a href="{{ route('editors') }}"><span class="fa fa-users"></span> Editorial Board</a></div>
    <div><a href="{{ route('submit.paper.form') }}"><span class="fa fa-paper-plane-o"></span> Submit Paper</a></div>
    <div><a href="{{ route('contact.us') }}"><span class="fa fa-envelope-o"></span> Contact Us</a></div>
    <div><a href="https://server148.web-hosting.com:2096" target="_blank"><span class="fa fa-envelope-square"></span> My Email</a></div>
</div>
<hr>
<br>
<div>
    <h3><span class="fa fa-download"></span> Download</h3>
    <hr>
    <div> <a href="{{route('downloadfile','about_authorship.pdf')}}"
        download="about_authorship.pdf"><span class="fa fa-file-pdf-o"
            style="color: red"></span> About Authorship</a>
</div>

<div><a href="{{route('downloadfile','about_duplicate_publication.pdf')}}"
        download="about_duplicate_publication.pdf"><span class="fa fa-file-pdf-o"
            style="color: red"></span>
        Duplicate Publication</a>
</div>
<div> <a href="{{route('downloadfile','about_plagiarism.pdf')}}"
        download="about_plagiarism.pdf"><span class="fa fa-file-pdf-o"
            style="color: red"></span> About Plagiarism</a>
</div>

<div> <a href="{{route('downloadfile','about_ethics.pdf')}}" download="about_ethics.pdf"><span
            class="fa fa-file-pdf-o" style="color: red"></span> Publication Ethics</a>
</div>
<div> <a href="{{route('downloadfile','Conference_communique.pdf')}}" download="Conference_communique.pdf"><span
            class="fa fa-file-pdf-o" style="color: red"></span> Conference Communique</a>
</div>

    
    <p></p>
<div><a href="{{ route('download.more') }}" class="badge badge-info"><span class="fa fa-download"></span> Download more...</a></div>

</div>