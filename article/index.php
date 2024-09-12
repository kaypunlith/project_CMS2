<?php include('header.php'); ?>
<main class="home">
    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-trending">
                        <div class="content-left">
                            TRENDING NOW
                        </div>   
                        <div class="content-right">
                            <marquee behavior="" onmouseover="this.stop()" onmouseleave="this.start()" direction="left">
                                <div class="text-news">
                                    <i class="fas fa-angle-double-right"></i>
                                    <a href="">ពិធីសម្ពោធដាក់ឱ្យប្រើប្រាស់នូវកំណាត់ផ្លូវជាតិលេខ២៦ ប្រវែងជិត ៦៤គីឡូម៉ែត្រ </a> &ensp;
                                    <i class="fas fa-angle-double-right"></i>
                                    <a href="">ពិធីសម្ពោធដាក់ឱ្យប្រើប្រាស់នូវកំណាត់ផ្លូវជាតិលេខ២៦ ប្រវែងជិត ៦៤គីឡូម៉ែត្រ </a>
                                </div>
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="latest-news">
        <div class="container">
            <div class="row">
               <?php popular()?>
                <div class="col-4 content-right">
                   <?php popular_left()?>
                   
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-trending">
                        <div class="content-left">
                            SPORT NEWS
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <div class="row">
                <?php select_new_tyoe('sport')?>   
            </div>
        </div>
    </section>

    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-trending">
                        <div class="content-left">
                            SOCIAL NEWS
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="news">
        <div class="container">
            <div class="row">
                <?php social_news('social')?>
                
               
            </div>
        </div>
    </section>
    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-trending">
                        <div class="content-left">
                            ENTERTAINMENT NEWS
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="news">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <figure>
                        <a href="">
                            <div class="thumbnail">
                                <img src="https://via.placeholder.com/350x200" alt="">
                            <div class="title">
                                អ្នកជំនាញថា កម្ពុជាមិនទាន់ធ្លាក់ចូលទៅក្នុងវិបត្តិបំណុលនោះទេ ខណៈកម្ពុជាអាចនៅអាចគ្រប់គ្រងបានល្អ​
                            </div>
                            </div>
                        </a>
                    </figure>
                </div>
                <div class="col-4">
                    <figure>
                        <a href="">
                            <div class="thumbnail">
                                <img src="https://via.placeholder.com/350x200" alt="">
                            <div class="title">
                                អ្នកជំនាញថា កម្ពុជាមិនទាន់ធ្លាក់ចូលទៅក្នុងវិបត្តិបំណុលនោះទេ ខណៈកម្ពុជាអាចនៅអាចគ្រប់គ្រងបានល្អ​
                            </div>
                            </div>
                        </a>
                    </figure>
                </div>
                <div class="col-4">
                    <figure>
                        <a href="">
                            <div class="thumbnail">
                                <img src="https://via.placeholder.com/350x200" alt="">
                            <div class="title">
                                អ្នកជំនាញថា កម្ពុជាមិនទាន់ធ្លាក់ចូលទៅក្នុងវិបត្តិបំណុលនោះទេ ខណៈកម្ពុជាអាចនៅអាចគ្រប់គ្រងបានល្អ​
                            </div>
                            </div>
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include('footer.php'); ?>