<style>
    .main{
        min-height: 300px;
    }
    .footer{
        background: #1f2630;
        color: #e7e0e0;
        padding: 10px 20px;
        bottom: 0;
        /* border: 2px solid yellow; */
        
    }
    .footer .footer-section h3.section-title{
        font-size: 26px;
        /* margin: 0; */
    }

    .footer ul.socials{
        padding: 0;
        margin: 0;
        list-style: none;
    }
    .footer ul.socials li{
        display: inline-block;
        margin-right: 6px;

    }
    .footer ul.socials li a{
        color: #e7e0e0;
        font-size: 19px;
    }
    .footer ul.categories{
        padding: 10px 0;
        list-style: none;
        margin: 0;
    }
    .footer ul.categories li{
        display: inline-block;
        margin: 3px 0;
    }
    .footer ul.categories li a {
        color: #646464;
        text-decoration: none;
        text-transform: capitalize;
        min-width: 100px;
        display: block;
        background: #ededed;
        text-align: center;
        font-size: 12px;
        padding: 3px;
        border-radius: 4px;
        font-family: sans-serif;
    }
    .footer ul.account {
        padding: 0;
        margin: 0;
        list-style: none;
    }
    .footer ul.account li{
        display: block;
        margin: 5px 0;
    }
    .footer ul.account li a{
        color: #e7e0e0;
        text-decoration: none;
        font-size: inherit;
        
    }
</style>

<div class="footer">
    <div class="row">
        <div class="col col-lg-3 col-md-3 col-xs-12 col-sm-12">
            <div class="footer-section">
                <h3 class="section-title">Shopp</h3>
                <div class="section-content">
                    <p style="line-height: 22px">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                        It has survived not only five centuries, but also the leap into electronic typesetting, 
                        remaining essentially unchanged.
                    </p>
                    <ul class="socials">
                        <li><a href="#">
                            <span class="fab fa-instagram"></span>    
                        </a></li>
                        <li><a href="#">
                            <span class="fab fa-google-plus"></span>    
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col col-lg-3 col-md-3 col-xs-12 col-sm-12">
            <div class="footer-section">
                <h3 class="section-title">Payment methods</h3>
                <div class="section-content">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries
                    </p>
                    <p>
                        <img src="{{asset('images/app/pm.jpg')}}" style="width:200px; border-radius:4px;" alt="">
                    </p>
                </div>
            </div>
        </div>
        <div class="col col-lg-3 col-md-3 col-xs-12 col-sm-12">
            <div class="footer-section">
                <h3 class="section-title">Categories</h3>
                <div class="section-content">
                    <ul class="categories">
                        <li> <a href="#">Computers</a></li>
                        <li> <a href="#">Desktops</a></li>
                        <li> <a href="#">Cell phones</a></li>
                        <li> <a href="#">Watches</a></li>
                        <li> <a href="#">Clothes</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col col-lg-3 col-md-3 col-xs-12 col-sm-12">
            <div class="footer-section">
                <h3 class="section-litle">Your Account</h3>
                <div class="section-content">
                     <ul class="account">
                          <li><a href="#"><span class="fa fa-shopping-cart"></span> Shopping cart</a></li>
                          <li><a href="#"><span class="fa fa-heart"></span> Wish List</a></li>
                          <li><a href="#"><span class="fa fa-user"></span> Your Account</a></li>

                     </ul>
                </div>
            </div>
        </div>
    </div>
</div>