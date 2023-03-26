@extends('layouts.main')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Contact form</title>
</head>
<body>
<div class="container mt-4">
    <br>
    <br>
    <br>
    <br>
    <h2>Contact Form</h2>
    <form action="{{route('send.email')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form_group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your name">
                </div>
            </div>
            <div class="col-md-6">
                <label for="email">Mail</label>
                <input type="text" name="mail" class="form-control" placeholder="Enter your mail">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <input type="submit" value="Send Message" class="btn btn-primary">
        </div>
    </form>
</div>

</body>
</html>
