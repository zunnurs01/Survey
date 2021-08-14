<x-layout>
    <div class="container my-5 py-2 rounded shadow">
    <h3>Results</h3>
    <ol>
        <li>Age Group
            <ol type="a">
                <li><18 (Total : {{$q1_a1}})</li>
                <li>18 to 35 (Total : {{$q1_a2}})</li>
                <li>35 to 60 (Total : {{$q1_a3}})</li>
                <li>Above 60 (Total : {{$q1_a4}})</li>
            </ol>
        </li>
        <li>Education Level
            <ol type="a">
                <li>Secondary school and below (Total : {{$q2_a1}})</li>
                <li>Diploma (Total : {{$q2_a2}})</li>
                <li>Degree (Total : {{$q2_a3}})</li>
                <li>Post graduate degree (Total : {{$q2_a4}})</li>
            </ol>
        </li>
        <li>Monthly Income
            <ol type="a">
                <li>Less than RM 1000 (Total : {{$q3_a1}})</li>
                <li>Between RM1000 to RM3000 (Total : {{$q3_a2}})</li>
                <li>Between RM3000 to RM5000 (Total : {{$q3_a3}})</li>
                <li>More than RM5000 (Total : {{$q3_a4}})</li>
            </ol>
        </li>

        <li>Gender
            <ol type="a">
                <li>Male (Total : {{$q4_a1}})</li>
                <li>Female (Total : {{$q4_a2}})</li>
            </ol>
        </li>
    </ol>
</div>
</x-layout>
