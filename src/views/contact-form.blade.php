<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact Form</title>
          <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                max-width: 1170px;
                margin: auto auto;

            }

            nav {
                    border-top: 1px solid #eee;
                    border-bottom: 1px solid #eee;
                    padding: 5px;
                    margin-top: 10px;
                    margin-bottom: 20px;
                }

                nav ul {
                    margin: 0;
                    padding: 0;
                    list-style-type: none;
                }

                nav ul li {
                    display: inline-block;
                    padding: 10px;
                }

                nav ul li {
                    font-weight: bold;
                    text-transform: uppercase;
                }

                nav ul li a:link {
                    text-decoration: none;
                }

                nav ul li a:hover {
                    color: #18bc9c;

                }


        </style>
    </head>
    <body>

            <nav>
                <ul>
                    <li><a href='/'>Home</a></li>
                    <li><a href='/contact-form'>Contact Form</a></li>
                    <li><a href='#'>Support</a></li>
                </ul>
            </nav>
        </div>
            <div class="content flex-center">
                  @if (session('status'))
                    <div class="alert alert-success">
                         {{ session('status') }}
                     </div>s
                    @endif

                <section>
                    <div>
                    <h2>CONTACT US</h2>
                       </div>
                        <form  action="{{ route ('contact-form') }}" method="post">
                                    {{ csrf_field() }}
                               <input type="hidden" data-form-email="true">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" required="" placeholder="Name*" data-form-field="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" required="" placeholder="Email*" data-form-field="Email">
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" name="phone" placeholder="Phone" data-form-field="Phone">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" placeholder="Message" rows="7" data-form-field="Message"></textarea>
                                </div>
                                <div>
                                <button type="submit" class="btn btn-lg btn-danger">CONTACT US</button>
                            </div>
                      </form>
                </section>
        </div>
    </body>
</html>




