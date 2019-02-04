
@extends('layouts.template')

    @section('content')

    <br>
      <div class="row">
        <div class="col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Export</a></li>
            <li><a href="">Announcements</a></li>
            <li><a href="">Assignments</a></li>
            <li><a href="">Discussions</a></li>
            <li><a href="">Grades</a></li>
            <li><a href="">People</a></li>
            <li><a href="">Pages</a></li>
            <li><a href="">Files</a></li>
            <li><a href="">Syllabus</a></li>
            <li><a href="">Outcomes</a></li>
            <li><a href="">Quizzes</a></li>
            <li><a href="">Modules</a></li>
            <li><a href="">Conference</a></li>
            <li><a href="">Collaborations</a></li>
          </ul>

          <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="images\man-user (1).png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Krenare Pireva</h5>
                <p class="card-text">Joining Date <br><br> Department <br><br> Category <br><br> E-Mail <br><br> </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Active 1h ago</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-10 main">
          <div class="card">
            <h5 class="card-header">Curriculum</h5>
            <div class="card-body">
              <div class="card">
                <h5 class="card-header">Section 1 - Requirements Elicitation</h5>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div><br>
              <div class="card">
                <h5 class="card-header">Section 2 - Design Phase</h5>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div><br>
              <div class="card">
                <h5 class="card-header">Section 3 - Prototyping</h5>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endsection