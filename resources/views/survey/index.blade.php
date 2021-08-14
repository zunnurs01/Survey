<x-layout>
    <div class="container my-5 py-2 rounded shadow">
    <h3>Survey</h3>
    <form action="/store" method="post">
        @csrf
        <ol>
            <li>What is your age group?
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="age_group" id="age_group1">
                    <label class="form-check-label" for="age_group1">
                        <18
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="age_group" id="age_group2">
                    <label class="form-check-label" for="age_group2">
                        18 to 35
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="age_group" id="age_group3">
                    <label class="form-check-label" for="age_group3">
                        35 to 60
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="age_group" id="age_group4">
                    <label class="form-check-label" for="age_group4">
                        Above 60
                    </label>
                </div>
            </li>
            <li>What is your education level?
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="education_level" id="education_level1">
                    <label class="form-check-label" for="education_level1">
                        Secondary school and below
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="education_level" id="education_level2">
                    <label class="form-check-label" for="education_level2">
                        Diploma
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="education_level" id="education_level3">
                    <label class="form-check-label" for="education_level3">
                        Degree
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="education_level" id="education_level4">
                    <label class="form-check-label" for="education_level4">
                        Post graduate degree
                    </label>
                </div>
            </li>
            <li>What is your monthly income?
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="monthly_income" id="monthly_income1">
                    <label class="form-check-label" for="monthly_income1">
                        Less than RM 1000
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="monthly_income" id="monthly_income2">
                    <label class="form-check-label" for="monthly_income2">
                        Between RM1000 to RM3000
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="monthly_income" id="monthly_income3">
                    <label class="form-check-label" for="monthly_income3">
                        Between RM3000 to RM5000

                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="monthly_income" id="monthly_income4">
                    <label class="form-check-label" for="monthly_income4">
                        More than RM5000
                    </label>
                </div>
            </li>

            <li>Your gender :
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender1">
                    <label class="form-check-label" for="gender1">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender2">
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
