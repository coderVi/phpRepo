<footer>
        <p>Author: Abdulsamet (CODER VI) YILMAZ<br>
        <a href="mailto:devBlog@info.com">devBlog@info.com</a></p>
        <a href=""><i class="fa fa-brands fa-instagram fa-2xl" style="color: #ffffff;"></i></a>
        <a href=" https://wa.me/PhoneNumber"><i class="fa fa-brands fa-whatsapp fa-2xl"></i></a>
        <a href="https://call.whatsapp.com/voice/number"><i class="fa fa-solid fa-phone fa-2xl"></i></a>
    </footer> 
    <!-- Bootstrap Js import link i -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    

     <!-- Scroll değeri eğer belirli bir değerin üzerindeyse arkaplan rengini değiştir -->
    <script>
        // Eğer scroll bar 100px aşağı kaydırılırsa if bloğu içinde ki verilen renk aktif olur, eğer 100px den yukarıdaysa arka plan rengi else bloğunda ki renklere bürünür
        window.addEventListener('scroll', function() {
            var navbar = document.getElementById('navbar');
            if (window.scrollY > 100) {
                navbar.style.backgroundColor = 'rgb(54, 54, 54)';
            } else {
                navbar.style.backgroundColor = '';
            }
        });

        // Eğer scroll bar 300px aşağı kaydırılırsa if bloğu içinde ki verilen renk aktif olur, eğer 300px den yukarıdaysa arka plan rengi else bloğunda ki renklere bürünür
        window.addEventListener('scroll', function(){
            var egitim = document.getElementById('egitim');
            if(window.scrollY > 300){
                egitim.style.backgroundColor = 'rgb(54, 54, 54)';
                egitim.style.textShadow = "3px 3px 5px red"
                egitim.style.color="white"
            } else{
                egitim.style.backgroundColor = ""
                egitim.style.color="black"
                egitim.style.textShadow = "3px 3px 5px"
            }

        });
    </script>
  </body>
</html>