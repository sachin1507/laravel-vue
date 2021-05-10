<template>
    <div> 
        <div class="modals">
    <!-- Modal Login -->
    <div class="modal fade exampleModalCenter" id="loginModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img src="images/close.png"></span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="login__modal">
                        <h5>LOgIN</h5>
                        <div class="form_body">
                            <div class="alert alert-danger" v-if="has_error">
                                <p>Error, unable to connect with these identifiers.</p>
                            </div>
                            <form autocomplete="off" @submit.prevent="login" method="post">
                                <input type="email" class="form-control" placeholder="" v-model="email" required>
                                <input type="password" class="form-control" v-model="password" required>
                                <button type="submit" class="btn btn-default">Login</button>
                                <a class="frg-psw" href="password/reset">Forgot Password?</a>
                            </form>
                        </div>
                        <div class="modal_bottom_content">
                            <p>Or connect using</p>
                            <a href="auth/linkedin" class="btn btn-primary Lnk_btn"><img src="images/icon.svg"> LinkedIn</a>
                        </div>
                    </div>
                    <div class="center-border"></div>
                    <div class="reg__modal">
                        <h5>Register</h5>
                        <div class="form_body">
                            <div class="alert alert-danger" v-if="has_error && !success">
                                <p v-if="error == 'registration_validation_error'">Validation error (s), please see the message (s) below.</p>
                                <p v-else>Error, unable to register at this time. If the problem persists, please contact an administrator.</p>
                            </div>
                            <form autocomplete="off" @submit.prevent="register" v-if="!success" method="post">
                                <div class="form-group" v-bind:class="{ 'has-error': has_error && errors.name }">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" class="form-control" placeholder="" v-model="name" required>                                   
                                </div>
                                <div class="form-group" v-bind:class="{ 'has-error': has_error && errors.email }">
                                    <label for="email">E-mail</label>
                                    <input type="email" id="email" class="form-control" placeholder="" v-model="email" required>                                   
                                </div>
                                <div class="form-group" v-bind:class="{ 'has-error': has_error && errors.password }">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" class="form-control" v-model="password" required>                                   
                                </div>
                                <div class="form-group" v-bind:class="{ 'has-error': has_error && errors.password }">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" id="password_confirmation" class="form-control" v-model="password_confirmation" required>
                                </div>
                                <button type="submit" class="btn btn-default">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Document Login -->
    <div class="modal fade docModal" id="DocModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img src="images/close.png"></span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="document__modal">
                        <div class="document__body document__body1">
                            <h2>Lorem ipsum dolor sit amet</h2>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam diam nisl malesuada
                                malesuada
                                faucibus natoque id hendrerit. Odio mattis risus, dui, magna semper luctus viverra.
                                Magnis
                                sem ut lorem faucibus purus netus. In eleifend in cursus eleifend donec turpis. Etiam
                                amet,
                                vitae id sollicitudin volutpat sed semper sagittis. Nulla sed gravida at nulla sagittis
                                felis. Sit sed et, semper massa. Sit ultrices rutrum tortor, luctus tristique eget id
                                facilisis. At rutrum dui metus est dictumst. Urna pharetra dictum hac libero,
                                ullamcorper
                                tempus ut. Et maecenas egestas at fringilla id a. Facilisis mattis lectus venenatis
                                nulla
                                euismod cras. Tincidunt duis etiam fermentum, posuere libero laoreet vitae.</p>

                              <p>  Nisl, pharetra aliquet mi quam magna leo maecenas lectus scelerisque. Platea interdum
                                est,
                                sit dignissim non condimentum blandit faucibus. Gravida diam pellentesque dignissim mus.
                                Massa tincidunt viverra quam aliquam ac nec, metus. Nulla ligula dolor dui sed gravida
                                et
                                vel nascetur. At hendrerit ut ac sodales in tincidunt id. Aliquam habitasse faucibus
                                tortor
                                aliquam.
                              </p>
                            <p>
                                Nisl in hendrerit duis praesent. Non proin arcu elementum tincidunt senectus enim etiam
                                scelerisque mattis. Tempus diam sed egestas orci, amet ante commodo semper adipiscing.
                                Quis
                                fusce enim tempor nulla nunc placerat egestas dictum. Condimentum a tempus semper varius
                                sem
                                convallis aliquam cursus. Morbi augue vitae dolor euismod urna cursus placerat. Lobortis
                                eget maecenas eu a suscipit quis augue tristique ac.

                                Id vestibulum posuere quis sed facilisis pharetra purus feugiat. Mi lectus id eu massa
                                gravida fringilla nibh feugiat pellentesque.</p>
                        </div>
                        <div class="document_paging">
                            <p>Page 5</p>
                        </div>
                    </div>
                    <div class="center-border"></div>
                    <div class="document__modal document__body2">
                        <div class="document__body">
                            <h2></h2>
                            <p></p>
                        </div>
                        <div class="document_bottom_paging">
                            <p>Documents</p>
                            <div>
                                <button class="active_btn">A</button>
                                <button>B</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>   
        <div class="home_topBanner">

            <div class="home_topSect">
                <h2 class="home_logoText">CLAUSEMAtICS<span>tm</span></h2>
                <div class="home_topSect_row">

                    <div class="home_topLeft">

                        <h1>how It<br>
                            works</h1>
                        <img src="images/Arrow.png">
                        <div class="log_reg_btn">
                            <button type="button" class="btn btn-primary login_btn" data-toggle="modal"
                                    data-target="#loginModal">Login/Register<img src="images/login_icon.svg"></button>
                        </div>
                        <div class="privacy-policy">
                            <router-link :to="{name: 'privacy-policy'}" class="navbar-brand">Privacy Policy</router-link>
                        </div>

                    </div>
                    <div class="home_topRight">
                        <img src="images/VideoImg.svg">
                        <div class="video_playIcon">
                            <img src="images/Vector.svg">
                        </div>

                    </div>
                </div>
            </div>
        </div>   
        <div class="dropzone_section_banner">
            <div class="dropzone_section">
                <div class="dropzone_section_body">
                    <h1 class="dropzone-title">drag & drop to<br>
                        Upload Your files</h1>
                    <div class="dropzone_icon">
                        <img src="images/ant-design_cloud-upload-outlined.png">
                        <p>.PDF .DOC</p>
                    </div>
                    <div class="dropzone_upload_btn">
                        <p>You can also upload files by</p>
                        <button>clicking here</button>
                    </div>

                    <div class="dropzone_next_btns">
                        <button class="cancel_btn">Cancel</button>
                        <button type="button" class="btn btn-primary next_btn" data-toggle="modal"
                                data-target="#DocModal">Next
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <div class="contact_section">
            <h1>Contact us</h1>            
            <div class="contact_main">
                <div class="contact_left">
                    <div class="contact_form">
                        <contact-form></contact-form>
                    </div>
                </div>
                <div class="contact_right">
                    <div class="send-msg-tw">
                        <p>We promise to respond within an hour during business hours,<br>
                        and within 6 hours outside of business hours.</p>                        
                    </div>
                </div>
            </div>
        </div>
        <app-footer></app-footer>
    </div>
</template> 
<script>
    import Footer from '../components/Footer'
    import Contact from './ContactForm'
    export default {
        components: {         
         'app-footer' : Footer,
         'contact-form' : Contact
        },
        data() {
          return {
            name: '',
            email: '',
            password: '',
            password_confirmation: '',
            has_error: false,
            error: '',
            errors: {},
            success: false
          }
        },
        mounted() {
          //
        },
        methods: {
          login() {
            // get the redirect object
            //var redirect = this.$auth.redirect()
            var app = this
            this.$auth.login({
              params: {
                email: app.email,
                password: app.password
              },
              success: function() {
                $('#loginModal').modal('hide');
                alert('Auth '+  this.$auth);
                // handle redirection
    const redirectTo = redirect ? redirect.from.name : this.$auth.user().role === 2 ? 'admin.dashboard' : 'dashboard'
                //const redirectTo = 'admin.dashboard'
                router.push({name: redirectTo})
              },
              error: function() {
                app.has_error = true
              },
              rememberMe: true,
              //redirect: '/',
              fetchUser: false
            })
          },
          register() {
            var app = this
            this.$auth.register({
              data: {
                name: app.name,
                email: app.email,
                password: app.password,
                password_confirmation: app.password_confirmation
              },
              success: function () {
                $('#loginModal').modal('hide');
                app.success = true
                this.$router.push({name: 'login', params: {successRegistrationRedirect: true}})
              },
              error: function (res) {
                console.log(res.response.data.errors)
                app.has_error = true
                app.error = res.response.data.error
                app.errors = res.response.data.errors || {}
              }
            })
          }
        }
    }
</script>
    