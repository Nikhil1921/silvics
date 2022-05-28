<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section class="contact-page-section">
    <div class="auto-container">
        <div class="heading-box clearfix">
            <div class="sec-title">
                <h2>Contact Us</h2>
            </div>
            <div class="text">
                <p>You can talk to our online representative at any time. Please use our Live Chat System on our website or Fill up below instant messaging programs. Please be patient, We will get back to you. Our 24/7 Support,</p>
            </div>
        </div>
        <div class="row clearfix">
            <!-- Form Column -->
            <div class="form-column col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="contact-form-two">
                    <form method="post" id="contact-form">
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                <input type="text" name="name" maxlength="100" placeholder="Name" required="">
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                <input type="email" name="email" maxlength="100" placeholder="Email" required="">
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                <input type="text" name="phone" maxlength="10" placeholder="Phone" required="">
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                <input type="text" name="subject" maxlength="100" placeholder="Subject" required="">
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <textarea name="message" maxlength="255" placeholder="Your Message" required=""></textarea>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <button class="theme-btn btn-style-two" type="submit" name="Submit">Send Massage</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="contact-column col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <ul class="contact-info">
                        <li>
                            <span class="icon flaticon-home"></span>
                            <strong>Corporate Office</strong>
                            <p><?= $this->config->item('address1') ?></p>
                        </li>

                        <li>
                            <span class="icon flaticon-home"></span>
                            <strong>Manufacturing Unit</strong>
                            <p><?= $this->config->item('address2') ?></p>
                        </li>

                        <li>
                            <span class="icon flaticon-mail"></span>
                            <strong>Send your mail at</strong>
                            <p><a href="mailto:<?= $this->config->item('email') ?>"><?= $this->config->item('email') ?></a></p>
                        </li>
                        <li>
                            <span class="icon flaticon-phone-1"></span>
                            <strong>Have Any Question</strong>
                            <p>
                                <a href="tel:<?= $this->config->item('mobile1') ?>"><?= $this->config->item('mobile1') ?></a><br>
                                <a href="tel:<?= $this->config->item('mobile2') ?>"><?= $this->config->item('mobile2') ?></a>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Section -->
<!-- Contact Map Section -->
<section class="contact-map-section">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="map_head_left">
                    <h2>Corporate Office</h2>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3669.77747322521!2d72.47534801740251!3d23.1052404778548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9d0443e34c8d%3A0xbf182e24d7df9df2!2sSilvics%20Wood%20veneer%20pvt%20ltd!5e0!3m2!1sen!2sin!4v1652685382542!5m2!1sen!2sin"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-6">
                <div class="map_head_right">
                    <h2>Manufacturing Unit</h2>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5184.790357761274!2d72.35438626249781!3d23.235792766585895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd975ca0220ab480a!2zMjPCsDE0JzEwLjkiTiA3MsKwMjEnMTguOSJF!5e0!3m2!1sen!2sin!4v1653050671586!5m2!1sen!2sin"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<!-- End Map Section -->
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped product-table text-center">
                        <thead>
                            <tr>
                                <th>
                                    <strong class="tbl_head">Name</strong>
                                </th>
                                <th>
                                    <strong class="tbl_head">Conatct No.</strong>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($this->config->item('contacts') as $c): ?>
                            <tr>
                                <td class="font-size"><?= $c['name'] ?></td>
                                <td>
                                <?php foreach ($c['contacts'] as $mo): ?>
                                    <a class="font-size" href="tel:<?= $mo ?>"><?= $mo ?></a>
                                    
                                <?php echo count($c['contacts']) > 1 ? "<br />" : ''; endforeach ?>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>