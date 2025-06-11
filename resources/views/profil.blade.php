@extends('layouts.main')

  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f4f8;
      margin: 0;
      padding: 0;
    }

    .profile-container {
      max-width: 600px;
      margin: 50px auto;
      background-color: #ffffff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .profile-photo {
      width: 130px;
      height: 130px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid #4e73df;
      margin-bottom: 20px;
    }

    .profile-name {
      font-size: 24px;
      font-weight: bold;
      color: #333;
    }

    .profile-email {
      font-size: 16px;
      color: #666;
      margin-bottom: 10px;
    }

    .profile-bio {
      font-style: italic;
      color: #555;
      margin: 20px 0;
    }

    .profile-date {
      font-size: 14px;
      color: #888;
      margin-bottom: 20px;
    }

    .edit-button {
      padding: 10px 20px;
      font-size: 14px;
      background-color: #4e73df;
      color: white;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .edit-button:hover {
      background-color: #2e59d9;
    }
  </style>

@section('container')
  <div class="profile-container">
    <div class="profile-name">Nama: {{ $nama }}</div>
    <div class="profile-email">Email: {{ $email }}</div>
@endsection