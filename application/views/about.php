<!-- - - - Start Contact - - - -->
<div class="jumbotron behind" id="behind" style="padding-bottom: 15px;">
    <h1 class="display-3" style="text-align: center; font-size: 40pt; padding-bottom: 40px;">About Us</h1>
</div>

<div class="container-fluid behind" id="behind">
    <div class="row" style="background-color: white;">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-sm-6" style="text-align: center;">
                    <p style="margin-left: 115px;">Feel free to contact us if you have any inquiries!</p>
                </div>
                <div class="col-sm-6">
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" id="emailbtn" style="color: white;" role="button" onclick="toggleForm()">Contact by email</a>
                    </p>
                </div>
            </div>
            <div class="row d-flex justify-content-center"></div>
        </div>
        <div class="col-lg-6 d-flex justify-content-center">
            <div class="col-xs-1"></div>
            <div class="col-lg-10"><img src="assets/images/users/img (189).jpg" alt="Group picture" style="max-width: 100%; width: auto; height: auto;"></div>
            <div class="col-xs-1"></div>
        </div>
    </div>
</div>

<div class="form-popup" id="myForm">
    <form action="mailto:herecomestreblewmu@gmail.com">
        <fieldset>
            <div class="form-group">
                <label for="exampleInputFirstName1">First name</label>
                <input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Enter first name">
            </div>
            <div class="form-group">
                <label for="exampleInputLastName1">Last name</label>
                <input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Enter last name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleComments1">Comments</label>
                <input type="text" class="form-control" id="exampleComments1" aria-describedby="commentHelp" placeholder="Enter comments">
            </div>
            <button type="submit" class="btn btn-primary" onclick="toggleForm()">Submit</button>
            <button type="reset" class="btn btn-secondary" onclick="toggleForm()">Close</button>
        </fieldset>
    </form>
</div>
<!-- - - - End Contact - - - -->
