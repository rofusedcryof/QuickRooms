@extends('layouts.main')

<style>
  body {
    font-family: 'Poppins', Arial, sans-serif;
    background-color: #f8f9fc;
    margin: 0;
    padding: 0;
  }

  .profile-container {
    max-width: 700px;
    margin: 50px auto;
    background-color: #ffffff;
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    text-align: center;
  }

  .profile-photo {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    border: 5px solid #4e73df;
    margin-bottom: 20px;
  }

  .profile-name {
    font-size: 28px;
    font-weight: 600;
    color: #333;
    margin-bottom: 10px;
  }

  .profile-email {
    font-size: 18px;
    color: #555;
    margin-bottom: 20px;
  }

  .profile-bio {
    font-size: 16px;
    color: #666;
    margin-bottom: 15px;
  }

  .edit-button {
    padding: 12px 25px;
    font-size: 16px;
    font-weight: 500;
    background-color: #4e73df;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .edit-button:hover {
    background-color: #375acb;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
  }

  .edit-button:active {
    background-color: #2c4aad;
    transform: scale(0.98);
  }
</style>

@section('container')
  <div class="profile-container">
    <img src="{{ asset('img/default-profile.png') }}" alt="Foto Profil" class="profile-photo">
    <div class="profile-name">Nama: {{ $user->nama }}</div>
    <div class="profile-email">Email: {{ $user->email }}</div>
    <div class="profile-bio">Nomor HP: {{ $user->no_hp ?? 'Belum diisi' }}</div>
    <div class="profile-bio">Alamat: {{ $user->alamat ?? 'Belum diisi' }}</div>
  </div>
@endsection