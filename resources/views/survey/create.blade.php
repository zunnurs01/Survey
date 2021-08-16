<x-layout>
    <div class="container my-5 py-2 rounded shadow">
        <h3>Survey</h3>
        <form action="/survey" method="post">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    Please answer all questions.
                </div>
            @endif
            <ol>
                <li>What is your age group?
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="age_group" id="age_group1" value="1">
                        <label class="form-check-label" for="age_group1">
                            <18
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="age_group" id="age_group2" value="2">
                        <label class="form-check-label" for="age_group2">
                            18 to 35
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="age_group" id="age_group3" value="3">
                        <label class="form-check-label" for="age_group3">
                            35 to 60
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="age_group" id="age_group4" value="4">
                        <label class="form-check-label" for="age_group4">
                            Above 60
                        </label>
                    </div>
                </li>
                <li>What is your education level?
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="education_level" id="education_level1"
                               value="5">
                        <label class="form-check-label" for="education_level1">
                            Secondary school and below
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="education_level" id="education_level2"
                               value="6">
                        <label class="form-check-label" for="education_level2">
                            Diploma
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="education_level" id="education_level3"
                               value="7">
                        <label class="form-check-label" for="education_level3">
                            Degree
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="education_level" id="education_level4"
                               value="8">
                        <label class="form-check-label" for="education_level4">
                            Post graduate degree
                        </label>
                    </div>
                </li>
                <li>What is your monthly income?
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="monthly_income" id="monthly_income1"
                               value="9">
                        <label class="form-check-label" for="monthly_income1">
                            Less than RM 1000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="monthly_income" id="monthly_income2"
                               value="10">
                        <label class="form-check-label" for="monthly_income2">
                            Between RM1000 to RM3000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="monthly_income" id="monthly_income3"
                               value="11">
                        <label class="form-check-label" for="monthly_income3">
                            Between RM3000 to RM5000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="monthly_income" id="monthly_income4"
                               value="12">
                        <label class="form-check-label" for="monthly_income4">
                            More than RM5000
                        </label>
                    </div>
                </li>

                <li>Your gender :
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender1" value="13">
                        <label class="form-check-label" for="gender1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender2" value="14">
                        <label class="form-check-label" for="gender2">
                            Female
                        </label>
                    </div>
                </li>
            </ol>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
</x-layout>
