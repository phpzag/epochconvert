
<footer>
    <div class="footer-container"> 
	  <p>&copy; 2026 developed by <a href="https://www.phpzag.com">phpzag's developers</a>. All rights reserved.</p>
      <ul class="footer-links">
        <li><a href="/privacy">Privacy Policy</a></li>
        <li><a href="/disclaimer">Disclaimer</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>	  
    </div>
</footer>  
<script>
window.addEventListener('load', function () {
    requestIdleCallback(function () {

        var s = document.createElement('script');
        s.src = 'https://www.googletagmanager.com/gtag/js?id=G-D8KJNFBQLR';
        s.async = true;
        document.head.appendChild(s);

        window.dataLayer = window.dataLayer || [];

        function gtag(){
            dataLayer.push(arguments);
        }

        window.gtag = gtag;

        gtag('js', new Date());
        gtag('config', 'G-D8KJNFBQLR');

    });
});
</script>