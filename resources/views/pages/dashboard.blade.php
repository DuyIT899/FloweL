@extends('layout.app')
@section('content')
@include('sweetalert::alert')
<form action="postTest" method="post">
    @csrf
    <textarea name="editor" id="editor"></textarea>
    <button type="submit">post</button>
</form>
<script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
</script>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>

<div id="map"></div>


<script>
    // Lấy địa chỉ từ dữ liệu của bạn (đây là một ví dụ)
    var address = "1600 Amphitheatre Parkway, Mountain View, CA";

    // Tạo URL tìm kiếm trên Google Maps với địa chỉ được trích xuất
    var mapUrl = "https://www.google.com/maps/@10.9941587,107.1598287,17z?entry=ttu";

    // Tạo thẻ iframe Google Maps và nhúng URL tìm kiếm vào đó
    var iframe = document.createElement('iframe');
    iframe.src = mapUrl;
    iframe.width = "600";
    iframe.height = "450";
    iframe.style.border = "0";
    iframe.allowfullscreen = "";
    iframe.loading = "lazy";

    // Hiển thị thẻ iframe trên trang web của bạn
    document.getElementById('map').appendChild(iframe);
</script>
@endsection
