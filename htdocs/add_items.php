<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .main-content {
            padding-top: 40px;
        }
        .form-container {
            max-width: 600px;
            margin: auto;
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
                    <h3 class="mb-0">Add New Inventory Item</h3>
                </div>
                <div class="card-body p-4">
                    
                    <form action="save_item.php" method="POST">
                        
                        <div class="mb-3">
                            <label for="itemName" class="form-label">Item Name</label>
                            <input type="text" class="form-control" id="itemName" name="itemName" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="itemDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="itemDescription" name="itemDescription" rows="3"></textarea>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="itemQuantity" class="form-label">Quantity in Stock</label>
                                <input type="number" class="form-control" id="itemQuantity" name="itemQuantity" min="0" required>
                            </div>
                            <div class="col-md-6">
                                <label for="itemPrice" class="form-label">Unit Price ($)</label>
                                <input type="number" class="form-control" id="itemPrice" name="itemPrice" step="0.01" min="0.01" required>
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                            <button type="button" class="btn btn-secondary" onclick="window.location.href='items.html'">Cancel</button>
                            <button type="submit" class="btn btn-success">Save Item</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>