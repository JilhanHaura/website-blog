
@extends('layouts.main')
@section('container')
<div class="container">
    <div style="text-align:center">
      <h2>Contact Us</h2>
      <form action="/kontak" method="POST">
@csrf
    </div>
    <div class="row">
      <div class="column">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3242667543077!2d100.39814741453807!3d-0.901680299342226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b8649fc7f50f%3A0x5bf4d990466e3ff5!2sGg.%20Sakinah%204%2C%20Gn.%20Sarik%2C%20Kec.%20Kuranji%2C%20Kota%20Padang%2C%20Sumatera%20Barat%2025173!5e0!3m2!1sen!2sid!4v1657989926383!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="column">
        <form action="/kontak" method="POST">
          <label>First Name</label>
          <input type="text" id="fname" name="namadepan" >
          <label>Last Name</label>
          <input type="text" id="lname" name="namabelakang" >
          <label>Email</label>
          <input type="text" id="lname" name="email" >
          <label>Phone Number</label>
          <input type="text" name="nomortlp" >
          <label for="subject">Subject</label>
          <textarea id="subjek" name="subjek" placeholder="Write something.." style="height:170px"></textarea>
          <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>

@endsection
