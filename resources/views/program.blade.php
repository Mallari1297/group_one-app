@extends('layouts.app')
@section('title', 'Programs Offered')
@section('content')
    <h2>Our Programs</h2>
    <ul>
        <li>Bachelor of Science in Information Technology (BSIT)</li>
        <li>Bachelor of Science in Computer Science (BSCS)</li>
        <li>Computer Secretarial Program</li>
        <li>High School and Senior High School</li>
    </ul>
    <p>Our programs are designed to equip students with the skills and knowledge needed for a successful future.</p>
    <img src="{{ asset('images/programs.jpg') }}" alt="Programs">
@endsection
