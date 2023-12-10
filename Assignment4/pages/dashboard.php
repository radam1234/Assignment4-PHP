<!-- dashboard.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>

<header>
    <h1>Welcome, [Username]!</h1>
    <a href="../includes/logout.php">Logout</a>
</header>

<section class="overview">
    <h2>Overview</h2>
    <p>Here's a quick overview of your application:</p>
</section>

<section class="actions">
    <h2>Quick Actions</h2>
    <ul>
        <li><a href="#">View Records</a></li>
        <li><a href="#">Add New Record</a></li>
        <li><a href="#">Edit Profile</a></li>
    </ul>
</section>

<section class="recent-activity">
    <h2>Recent Activity</h2>
    <ul>
        <li>User [Username] added a new record on [Date].</li>
        <li>User [Username] updated their profile picture on [Date].</li>
    </ul>
</section>

<section class="data-listing">
    <h2>Your Data</h2>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Item 1</td>
            <td>Category A</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Item 2</td>
            <td>Category B</td>
        </tr>
        </tbody>
    </table>
</section>

<section class="notifications">
    <h2>Notifications</h2>
    <ul>
        <!-- Display notifications or alerts for the user -->
        <li>You have a new message from [Sender].</li>
        <li>Your account was accessed from a new device.</li>
    </ul>
</section>
</body>

</html>
