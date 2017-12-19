<style type="text/css">
    .barra-prefeitura-sp {
        background-color: black !important;
        border-bottom: 1px solid #fff;
        height: 46px;
    }
    
    .barra-prefeitura-sp .logo-portal { 
        float:left; 
    }
    .barra-prefeitura-sp .logo-prefeitura { 
        float:right;
        margin-top:5px;
    }
    
    .site-header {
        top: 46px;
    }
    .admin-bar .site-header {
        top: 78px;
    }
</style>
<script type="text/javascript">
    (function($){
        var siteHeaderTop, $siteHeader;
        
        $(window).scroll(function(){
            if(!siteHeaderTop){
                $siteHeader = $('.site-header') 
                siteHeaderTop = parseInt($siteHeader.css("top"));
            }
            
            var top;
            if(this.scrollY >= 46){
                top = siteHeaderTop - 46;
            }else{
                top =  siteHeaderTop - this.scrollY;
            }
            $siteHeader.css('top', top);
        });
    })(jQuery);
</script>
<div class="barra-prefeitura-sp">
    <a href="http://www.prefeitura.sp.gov.br" target="_blank">
        <img src="<?php echo plugins_url('logo_portal.gif', __FILE__) ?>" alt="Portal da Prefeitura de São Paulo" class="logo-portal" title="Portal da Prefeitura de São Paulo">
        <img src="<?php echo plugins_url('logo_prefeitura.gif', __FILE__) ?>" alt="Prefeitura de São Paulo" class="logo-prefeitura" title="Prefeitura de São Paulo">
    </a>
</div>