<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .main-content {
            padding-top: 40px;
        }
        .form-container {
            max-width: 600px;
            margin: auto;
        }
        /* Custom CSS to make the active link indicator line green */
        .navbar-nav .nav-link.active {
            border-bottom: 2px solid #198754; /* Green color for active indicator */
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MyApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.html">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="items.html">Items</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container main-content">
        
        <div class="form-container">
            <div class="card shadow-lg">
                <div class="card-header bg-white text-dark border-bottom">
                    <h3 class="mb-0">Edit Item: </h3>
                </div>
                <div class="card-body p-4">
                    
                    <form action="update_item.php" method="POST">
                        
                        <input type="hidden" name="itemId" value="1001">
                        
                        <div class="mb-4">
                            <label for="itemName" class="form-label">Item Name</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="itemName" 
                                name="itemName" 
                                value="Laptop Computer" 
                                required
                            >
                        </div>
                        
                        <div class="mb-4">
                            <label for="itemStatus" class="form-label">Status</label>
                            <select class="form-select" id="itemStatus" name="itemStatus">
                                <option value="In Stock" selected>In Stock</option>
                                <option value="Out of Stock">Out of Stock</option>
                                <option value="Discontinued">Discontinued</option>
                            </select>
                        </div>


                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                            <button type="button" class="btn btn-secondary" onclick="window.location.href='items.html'">Cancel</button>
                            <button type="submit" class="btn btn-success">Save Changes</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>