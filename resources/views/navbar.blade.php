<style>
    .header{
            justify-content: center;
            align-items: center;
            background-color: rgb(255, 196, 0);
            border-style: solid;
            border-color: rgb(255, 196, 0);
            border-width: 10px;
        }
        .header h1{
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .navbar{
            justify-content: center;
            align-items: center;
            text-align: center;
        }
</style>

<div class="header">
    <div class="bookstore">
        <h1 style="color: white">Giant Book Supplier</h1>
    </div>
</div>

<div class="navbar">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/" style="color: blue">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: blue">
                  Category
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/categories">Sport</a></li>
                  <li><a class="dropdown-item" href="/categories">Action</a></li>
                </ul>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/publisher" style="color: blue">Publisher</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/contact" style="color: blue">Contact</a>
                  </li>
                </li>
            </ul>
          </div>
        </div>
      </nav>
</div>
