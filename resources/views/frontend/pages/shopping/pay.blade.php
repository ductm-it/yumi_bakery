@extends('layouts.master_frontend')
@section('content')
      <!-- Start Checkout Area -->
      <section class="our-checkout-area ptb--120 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    <div class="ckeckout-left-sidebar">
                        <!-- Start Checkbox Area -->
                        <div class="checkout-form">
                            <h2 class="section-title-3">Billing details</h2>
                            <div class="checkout-form-inner">
                                <form role="form" action="" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="cc-name" class="control-label">Full Name<span class="text-danger">(*)</span></label>
                                        <input type="text" name="tst_name" id="name" placeholder="Full Name*" value="{{ get_data_user('web','name') }}"  >
                                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-name" class="control-label">Phone<span class="text-danger">(*)</span></label>
                                        <input type="text" name="tst_phone" id="phone" placeholder="Phone*"  value="{{ get_data_user('web','phone') }}"  >
                                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-name" class="control-label">Address<span class="text-danger">(*)</span></label>
                                        <input type="text" name="tst_address" id="address"placeholder="Address*"  value="{{ get_data_user('web','address') }}"  >
                                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-name" class="control-label">Email<span class="text-danger">(*)</span></label>
                                        <input type="text" name="tst_email" id="email"placeholder="Email*"  value="{{ get_data_user('web','email') }}"  >
                                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-name" class="control-label">Note<span class="text-danger">(*)</span></label>
                                        <input type="text" name="tst_note" id="note"placeholder="Note*"  class="form-control cc-name valid" data-val="true"  >
                                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                    </div>
                                    <button type="submit" class="btn btn-success">Submit <i class="fa fa-save"></i></button>
                                </form>
                                {{-- <div class="single-checkout-box">
                                    <input type="text" placeholder="First Name*">
                                    <input type="text" placeholder="Last Name*">
                                </div>
                                <div class="single-checkout-box">
                                    <input type="email" placeholder="Emil*">
                                    <input type="text" placeholder="Phone*">
                                </div>
                                <div class="single-checkout-box">
                                    <textarea name="message" placeholder="Message*"></textarea>
                                </div>
                                <div class="single-checkout-box select-option mt--40">
                                    <select>
                                        <option>Country*</option>
                                        <option>Bangladesh</option>
                                        <option>Bangladesh</option>
                                        <option>Bangladesh</option>
                                        <option>Bangladesh</option>
                                    </select>
                                    <input type="text" placeholder="Company Name*">
                                </div>
                                <div class="single-checkout-box">
                                    <input type="email" placeholder="State*">
                                    <input type="text" placeholder="Zip Code*">
                                </div>
                                <div class="single-checkout-box checkbox">
                                    <input id="remind-me" type="checkbox">
                                    <label for="remind-me"><span></span>Create a Account ?</label>
                                </div> --}}
                            </div>
                        </div>
                        <!-- End Checkbox Area -->
                        <!-- Start Payment Box -->
                        <div class="payment-form">
                            <h2 class="section-title-3">payment details</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur kgjhyt</p>
                            <div class="payment-form-inner">
                                <div class="single-checkout-box">
                                    <input type="text" placeholder="Name on Card*">
                                    <input type="text" placeholder="Card Number*">
                                </div>
                                <div class="single-checkout-box select-option">
                                    <select>
                                        <option>Date*</option>
                                        <option>Date</option>
                                        <option>Date</option>
                                        <option>Date</option>
                                        <option>Date</option>
                                    </select>
                                    <input type="text" placeholder="Security Code*">
                                </div>
                            </div>
                        </div>
                        <!-- End Payment Box -->
                        <!-- Start Payment Way -->
                        <div class="our-payment-sestem">
                            <h2 class="section-title-3">We  Accept :</h2>
                            <ul class="payment-menu">
                                <li><a href="#"><img src="images/payment/1.jpg" alt="payment-img"></a></li>
                                <li><a href="#"><img src="images/payment/2.jpg" alt="payment-img"></a></li>
                                <li><a href="#"><img src="images/payment/3.jpg" alt="payment-img"></a></li>
                                <li><a href="#"><img src="images/payment/4.jpg" alt="payment-img"></a></li>
                                <li><a href="#"><img src="images/payment/5.jpg" alt="payment-img"></a></li>
                            </ul>
                            <div class="checkout-btn">
                                <a class="ts-btn btn-light btn-large hover-theme" href="#">CONFIRM & BUY NOW</a>
                            </div>
                        </div>
                        <!-- End Payment Way -->
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="checkout-right-sidebar">
                        <div class="our-important-note">
                            <h2 class="section-title-3">Note :</h2>
                            <p class="note-desc">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt ut laborekf et dolore magna aliqua.</p>
                            <ul class="important-note">
                                <li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet, consectetur nipabali</a></li>
                                <li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet</a></li>
                                <li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet, consectetur nipabali</a></li>
                                <li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet, consectetur nipabali</a></li>
                                <li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet</a></li>
                            </ul>
                        </div>
                        <div class="puick-contact-area mt--60">
                            <h2 class="section-title-3">Quick Contract</h2>
                            <a href="phone:+8801722889963">+88 01900 939 500</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Checkout Area -->
@stop
