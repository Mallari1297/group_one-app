@extends('layouts.app')
@section('title', 'Admission')
@section('content')
    <h2>Admission Requirements</h2>
    <p>We are now accepting enrollees and transferees for the 2nd Semester!</p>
    <ul>
        <li>Form 138 or Transcript of Records</li>
        <li>Certificate of Good Moral Character</li>
        <li>NSO Birth Certificate</li>
        <li>2x2 ID Pictures (4 pcs)</li>
    </ul>
    <p>Enroll today and become part of our growing family of champions!</p>
    <img src="{{ asset('images/admission.jpg') }}" alt="Admission">
@endsection
