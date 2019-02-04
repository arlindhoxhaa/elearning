
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
          </ul><br>
          <div class="teacherProfile">
              <div class="tpHeader">
                  <img src="{{asset("images/man-user (1).png")}}" alt="Edmond Jahjaga" style="width:40px;">
                  <h5>Edmond <br><b>Jahjaga</b></h5>
              </div>
              <div class="tpBody"><br><br>
                  <ul>
                      <li><span>Joining Date</span><div>24 August</div></li>
                      <li><span>Departament</span><div>CSE</div></li>
                      <li><span>Category</span><div>Teaching staff</div></li>
                      <li><span>Email</span><div>-</div></li>
                      <li><span>Status</span><div>Active</div></li>
                      <li><span>Qualification</span><div>Phd</div></li>
                  </ul>
              </div>
              <div class="tpFooter">
                  <p>Last Active: 1h ago</p>
              </div>
          </div>
        </div>
          <div class="col-md-10 main">
          <div class="card">
            <h5 class="card-header">Software Design</h5>
            <div class="card-body">
              <div class="card">
                <h5 class="card-header">Section 1 - Requirements Elicitation</h5>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <div class="download-lecture">
                  <img class="pdf-icon" src="images\pdf.png" alt="PDF Image Cap">
                  <a href="www.google.com">Download Lecture(PDF)</a>
                    <img class="video-lecture-pic" src="images\play-button.png" alt="MP4 Video Cap">
                    <a href="www.google.com">Download Lecture(.MP4)</a>
                </div>
                </div>
              </div><br>
              <div class="card">
                <h5 class="card-header">Section 2 - Design Phase</h5>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <div class="download-lecture">
                      <img class="pdf-icon" src="images\pdf.png" alt="PDF Image Cap">
                      <a href="www.google.com">Download Lecture(PDF)</a>
                        <img class="video-lecture-pic" src="images\play-button.png" alt="MP4 Video Cap">
                        <a href="www.google.com">Download Lecture(.MP4)</a>
                    </div>
                </div>
              </div><br>
              <div class="card">
                <h5 class="card-header">Section 3 - Prototyping</h5>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <div class="download-lecture">
                      <img class="pdf-icon" src="images\pdf.png" alt="PDF Image Cap">
                      <a href="www.google.com">Download Lecture(PDF)</a>
                        <img class="video-lecture-pic" src="images\play-button.png" alt="MP4 Video Cap">
                        <a href="www.google.com">Download Lecture(.MP4)</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endsection