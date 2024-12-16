@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')
    <h2>Contact Us</h2>
    <p>Have any questions or inquiries? Reach out to us through the following channels:</p>
    <p>Email: <a href="mailto:info@eastwoods.edu">info@eastwoods.edu</a></p>
    <p>Phone: (123) 456-7890</p>
    <p>Address: Eastwoods Professional College, 123 Champion Avenue, City, Country</p>
    <img src="{{ asset('images/contact.jpg') }}" alt="Contact Us">
@endsection
