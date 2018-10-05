@extends('layouts.app')

@section('content')

<div class="container">

  <h1>{{ $student->forename }} {{ $student->surname }}</h1>
  <br>
  <!-- Nav pills -->
  <ul class="nav nav-pills bg-default" role="tablist">
    <li class="nav-item mr-5">
      <a class="nav-link text-center active" data-toggle="pill" href="#profile"><i class="far fa-id-card fa-5x fa-fw mb-3"></i><h5>Profile</h5></a>
    </li>
    <li class="nav-item mr-5">
      <a class="nav-link text-center" data-toggle="pill" href="#ambitions"><i class="fas fa-map-signs fa-5x fa-fw mb-3"></i><h5>Ambitions</h5></a>
    </li>
    <li class="nav-item mr-5">
      <a class="nav-link text-center" data-toggle="pill" href="#achievements"><i class="fas fa-award fa-5x fa-fw mb-3"></i><h5>Achievements</h5></a>
    </li>
    <li class="nav-item mr-5">
      <a class="nav-link text-center" data-toggle="pill" href="#reports"><i class="fas fa-file-alt fa-5x fa-fw mb-3"></i><h5>Reports</h5></a>
    </li>
    <li class="nav-item mr-5">
        <a class="nav-link text-center" data-toggle="pill" href="#targets"><i class="fas fa-tasks fa-5x fa-fw mb-3"></i><h5>Targets</h5></a>
      </li>
    <li class="nav-item mr-5">
        <a class="nav-link text-center" data-toggle="pill" href="#nextsteps"><i class="fas fa-diagnoses fa-5x fa-fw mb-3"></i><h5>Next Steps</h5></a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="profile" class="tab-pane active mb-3"><br>
      <div class="card">
        <div class="card-header bg-secondary text-white"><h4>Profile</h4></div>
        <div class="card-body">
            <h5 class="card-text">Attendance</h5>
            <p class="card-text">{{ $ambition[0]->introduction }}</p>
            <h5 class="card-text">Behaviour</h5>
            <p class="card-text">{{ $ambition[0]->experience }}</p>
            <h5 class="card-text">Assessment</h5>
            <p class="card-text">{{ $ambition[0]->proudOf }}</p>
          </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>
    <div id="ambitions" class="tab-pane fade mb-3"><br>
      <div class="card">
        <div class="card-header bg-info"><h4>Ambitions</h4></div>
        <div class="card-body">
          <h5 class="card-text">Introduction</h5>
          <p class="card-text">{{ $ambition[0]->introduction }}</p>
          <h5 class="card-text">Experience</h5>
          <p class="card-text">{{ $ambition[0]->experience }}</p>
          <h5 class="card-text">Proud Of</h5>
          <p class="card-text">{{ $ambition[0]->proudOf }}</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated on {{ $ambition[0]->updated_at }}</small>
        </div>
      </div>
    </div>
    <div id="achievements" class="tab-pane fade mb-3"><br>
      <div class="card">
        <div class="card-header bg-success"><h4>Achievements</h4></div>
        <div class="card-body">
          <h5 class="card-text">My Achievement</h5>
          <p class="card-text">{{ $ambition[0]->introduction }}</p>
          <h5 class="card-text">My Achievement</h5>
          <p class="card-text">{{ $ambition[0]->experience }}</p>
          <h5 class="card-text">My Achievement</h5>
          <p class="card-text">{{ $ambition[0]->proudOf }}</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>
    <div id="reports" class="tab-pane fade mb-3"><br>
      <div class="card">
        <div class="card-header bg-danger text-white"><h4>Reports</h4></div>
        <div class="card-body">
          <p><i class="fas fa-file-alt fa-5x fa-fw mb-3"></i>  Y11 DC3 Progress Report</p>
          <p><i class="fas fa-file-alt fa-5x fa-fw mb-3"></i>  Y11 DC2 Progress Report</p>
          <p><i class="fas fa-file-alt fa-5x fa-fw mb-3"></i>  Y11 DC1 Progress Report</p>
          <p><i class="fas fa-file-alt fa-5x fa-fw mb-3"></i>  Y10 DC4 Progress Report</p>
        </div>
      </div>
      <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
      <div id="targets" class="tab-pane fade mb-3"><br>
        <div class="card">
          <div class="card-header bg-warning"><h4>Targets</h4></div>
          <div class="card-body">
            <h5 class="card-text">Personal</h5>
            <p class="card-text">{{ $ambition[0]->introduction }}</p>
            <h5 class="card-text">Academic</h5>
            <p class="card-text">{{ $ambition[0]->experience }}</p>
            <h5 class="card-text">Community Kindness</h5>
            <p class="card-text">{{ $ambition[0]->proudOf }}</p>
          </div>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      <div id="nextsteps" class="tab-pane fade mb-3"><br>
        <div class="card">
          <div class="card-header bg-success"><h4>Next Steps</h4></div>
          <div class="card-body">
            <h5 class="card-text">Personal</h5>
            <p class="card-text">{{ $ambition[0]->introduction }}</p>
            <h5 class="card-text">Academic</h5>
            <p class="card-text">{{ $ambition[0]->experience }}</p>
            <h5 class="card-text">Community Kindness</h5>
            <p class="card-text">{{ $ambition[0]->proudOf }}</p>
          </div>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
    </div>





  <div class="card-deck mb-3">
    <div class="card">
      <div class="card-header">Profile</div>
      <div class="card-body">
        <h5>Attendance</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <h5>Behaviour</h5>
        <p>Conduct Information Here</p>
        <h5>Assessment</h5>
        <p>Progress and Attainment Goes Here</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
    <div class="card">
      <div class="card-header">Ambitions</div>
      <div class="card-body">
        <h5 class="card-text">Introduction</h5>
        <p class="card-text">{{ $ambition[0]->introduction }}</p>
        <h5 class="card-text">Experience</h5>
        <p class="card-text">{{ $ambition[0]->experience }}</p>
        <h5 class="card-text">Proud Of</h5>
        <p class="card-text">{{ $ambition[0]->proudOf }}</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="card-deck">
    <div class="card">
      <div class="card-header">Achievements</div>
      <div class="card-body">
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
    <div class="card">
      <div class="card-header">Report/Tracker</div>
      <div class="card-body">
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
    <div class="card">
      <div class="card-header">Objectives</div>
      <div class="card-body">
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header">My Next Steps</div>
    <div class="card-body">
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>

</div>
</tbody>
</table>

@endsection
