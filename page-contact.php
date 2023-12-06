<?php get_header(); ?>

<section id="contact" class="wrapper_1000 sp_container">
    <h2 class="content_title">Contact</h2>

    <p>お仕事のご依頼やご相談は下記のフォームからお問い合わせください。</p>

    <div class="form">
        <div class="form_row">
            <label for="full_name">Name<span>*</span></label>
            <div class="form_content">
                <input type="text" name="fullname" id="fullname">
            </div>
        </div>

        <div class="form_row">
            <label for="email">E-mail<span>*</span></label>
            <div class="form_content">
            <input type="email" name="email" id="email">
            </div>
        </div>

        <div class="form_row">
            <label for="message">Message<span>*</span></label>
            <div class="form_content">
            <textarea name="message" id="message"></textarea>
            </div>
        </div>

        <div class="form_btn">
        <input class="send_btn" type="submit" name="send" value="送信">
        </div>

    </div>

</section>

<?php get_footer(); ?>