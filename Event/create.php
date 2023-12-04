<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Schedule Events</title>
  <style>
    /* Reset default browser styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
  
    body {
      background-color: #f8f8f8;
      font-family: Arial, sans-serif;
    }
  
    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 40px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
    }
  
    h1 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }
  
    .form-group {
      margin-bottom: 20px;
    }
  
    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      color: #555;
    }
  
    .form-group input[type="text"],
    .form-group input[type="datetime-local"],
    .form-group select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
  
    .form-group textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      resize: vertical;
    }
  
    .form-group button {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #333;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  
    .form-group button:hover {
      background-color: #555;
    }
  
    .event-list {
      margin-top: 40px;
      padding-top: 20px;
      border-top: 1px solid #ccc;
    }
  
    .event {
      margin-bottom: 10px;
      padding-bottom: 10px;
      border-bottom: 1px solid #ccc;
    }
  
    .event-name {
      font-weight: bold;
      margin-bottom: 5px;
    }
  
    .event-date {
      color: #888;
      margin-bottom: 5px;
    }
  
    .event-location {
      margin-bottom: 5px;
    }
  
    .event-description {
      color: #555;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Schedule Events</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
        <label for="event-name">Event Name</label>
        <input type="text" id="event-name" name="event_name" placeholder="Enter event name" required>
      </div>
      <div class="form-group">
        <label for="event-date">Event Date and Time</label>
        <input type="datetime-local" id="event-date" name="event_date" required>
      </div>
      <div class="form-group">
        <label for="event-location">Event Location</label>
        <input type="text" id="event-location" name="event_location" placeholder="Enter event location" required>
      </div>
      <div class="form-group">
        <label for="event-description">Event Description</label>
        <textarea id="event-description" name="event_description" placeholder="Enter event description" rows="5" required></textarea>
      </div>
      <div class="form-group">
        <button type="submit" name="submit">Schedule Event</button>
      </div>
    </form>
      
  </html>