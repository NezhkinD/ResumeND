@section('contacts')
    <div class="row">
        <div class=" col-xs-12 col-sm-4 ">
            <div class="p-50"></div>

            <div class="block-title">
                <h2>Контакты</h2>
            </div>
            <div id="info_list_1" class="info-list-w-icon">

                <div class="info-block-w-icon">
                    <div class="ci-icon">
                        <i class="linecons linecons-phone"></i>
                    </div>
                    <div class="ci-text">
                        <h5>7-977-762-58-77</h5>
                    </div>
                </div>

                <div class="info-block-w-icon">
                    <div class="ci-icon">
                        <i class="linecons linecons-location"></i>
                    </div>
                    <div class="ci-text">
                        <h5>Moscow</h5>
                    </div>
                </div>

                <div class="info-block-w-icon">
                    <div class="ci-icon">
                        <i class="linecons linecons-mail"></i>
                    </div>
                    <div class="ci-text">
                        <h5>dnezhkin@gmail.com</h5>
                    </div>
                </div>
            </div>

        </div>


        <div class=" col-xs-12 col-sm-8 ">
            <div class="p-50"></div>
            <div class="block-title">
                <h2>Связаться со мной</h2>
            </div>

            <form id="contact_form" class="contact-form" action="contact_form/contact_form.php" method="post"
                  novalidate="true">

                <div class="messages"></div>

                <div class="controls two-columns">
                    <div class="fields clearfix">
                        <div class="left-column">
                            <div class="form-group form-group-with-icon">
                                <input id="form_name" type="text" name="name" class="form-control"
                                       placeholder="Имя" required="required" data-error="Имя не заполнена">
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group form-group-with-icon">
                                <input id="form_email" type="email" name="email" class="form-control"
                                       placeholder="Email" required="required"
                                       data-error="Valid email is required.">
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group form-group-with-icon">
                                <input id="form_name" type="text" name="subject" class="form-control"
                                       placeholder="Тема" required="required" data-error="Тема не заполнена">
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="right-column">
                            <div class="form-group form-group-with-icon has-error has-danger">
                                <textarea id="form_message" name="message" class="form-control" placeholder="Сообщение"
                                          rows="7" required="required"
                                          data-error="Введите сообщение"></textarea>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors">Введите сообщение</div>
                            </div>
                        </div>
                    </div>

                    <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI">
                        <div style="width: 304px; height: 78px;">
                            <div>
                                <iframe
                                    src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI&amp;co=aHR0cHM6Ly9sbXBpeGVscy5jb206NDQz&amp;hl=ru&amp;v=BT5UwN2jyUJCo7TdbwTYi_58&amp;size=normal&amp;cb=rrouhv5wms2j"
                                    width="304" height="78" role="presentation" name="a-4vhk742kvdqe" frameborder="0"
                                    scrolling="no"
                                    sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                            </div>
                            <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response"
                                      style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                        </div>
                        <iframe style="display: none;"></iframe>
                    </div>

                    <input type="submit" class="button btn-send disabled" value="Отправить сообщение">
                </div>
            </form>

        </div>


    </div>
