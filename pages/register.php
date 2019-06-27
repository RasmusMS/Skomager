<form class="needs-validation" novalidate action="handlers/insertData.php" method="post">
    <div class="myBox">
        <div class="mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" name="firstname" placeholder="" value="" required>
            <div class="invalid-feedback">
                Valid first name is required.
            </div>
        </div>
        <div class="mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" name="lastname" placeholder="" value="" required>
            <div class="invalid-feedback">
                Valid last name is required.
            </div>
        </div>

        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
            <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
            </div>
        </div>

        <div class="mb-3">
            <label>Skostørrelse</label>
            <input type="text" class="form-control" name="shoesize" placeholder="">
            <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
            </div>
        </div>

        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
    </div>
</form>