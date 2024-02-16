@extends('layouts.dashboard')
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Dashboard</a>
 rols="sideb <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-contarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">

  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Welcome, {{ $userName }}
      </a>
    </div>
  </div>
</header>



<style>

body {
  font-size: .875rem;
}

.feather {
  width: 16px;
  height: 16px;
  vertical-align: text-bottom;
}

/*
 * Sidebar
 */

.sidebar {
  position: fixed;
  top: 0;
  /* rtl:raw:
  right: 0;
  */
  bottom: 0;
  /* rtl:remove */
  left: 0;
  z-index: 100; /* Behind the navbar */
  padding: 48px 0 0; /* Height of navbar */
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
}

@media (max-width: 767.98px) {
  .sidebar {
    top: 5rem;
  }
}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: .5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}

.sidebar .nav-link {
  font-weight: 500;
  color: #2470dc;
}

.sidebar .nav-link .feather {
  margin-right: 4px;
  color: #2470dc;
}

.sidebar .nav-link.active {
  color: black;
}

.sidebar .nav-link:hover .feather,
.sidebar .nav-link.active .feather {
  color: inherit;
}

.sidebar-heading {
  font-size: .75rem;
  text-transform: uppercase;
}

/*
 * Navbar
 */

.navbar-brand {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: 1rem;
  background-color: rgba(0, 0, 0, .25);
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
}

.navbar .navbar-toggler {
  top: .25rem;
  right: 1rem;
}

.navbar .form-control {
  padding: .75rem 1rem;
  border-width: 0;
  border-radius: 0;
}

.form-control-dark {
  color: #fff;
  background-color: rgba(255, 255, 255, .1);
  border-color: rgba(255, 255, 255, .1);
}

.form-control-dark:focus {
  border-color: transparent;
  box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
}


</style>

<body>
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file"></span>
                Orders
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="shopping-cart"></span>
                Products
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="users"></span>
                Customers
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="bar-chart-2"></span>
                Reports
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                Integrations
              </a>
            </li>
          </ul>
  
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Current month
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Last quarter
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Social engagement
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Year-end sale
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="confirmLogout()">
                <span data-feather="file-text"></span>
                Log out
              </a>
            </li>

            <form method="post" id="logoutForm" action="{{ route('logout') }}">
              @csrf
              <button type="submit" style="display: none;"></button>
          </form>
          
          <script>
              function confirmLogout() {
                  if (confirm("Are you sure you want to log out?")) {
                      document.getElementById('logoutForm').submit();
                  }
              }
          </script>

          </ul>
        </div>
      </nav>
  
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 p-5">
          <a type="button" href="/dashboard/create" class="btn btn-primary" style="color: white">Add New Stundent Data</a>
  
          <style>
            .btn-primary {
              background-color: rgb(27, 134, 15);
                padding: 8px;
                border: none;
                color: white;
                font-weight: bold;
                border-radius: 8px;
            }
  
            .btn-primary:hover {
                background-color: rgb(51, 226, 139);
                color: white;
            }
  
        </style>
  
          <table class="table">
              <thead>
                  <tr>
                      <th scope="col">NIS</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Kelas</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($students as $student)
                      <tr>
                          <td>{{ $student->nis }}</td>
                          <td>{{ $student->nama }}</td>
                          <td>{{ $student->kelas->kelas }}</td>
                          <td>{{ $student->alamat }}</td>
                          <td>
                            <form action="/dashboard/detail/{{ $student->id }}" method="get" class="d-inline">
                            <button type="submit" class="btn-primary">Detail</button>
                        </form>
                      </td>
                          <td>
                            <form action="/dashboard/edit/{{ $student->id }}" method="get" class="d-inline">
                              <button type="submit" class="btn btn-primary">Edit</button>
                            </form>
                          </td>
                          <form action="/dashboard/delete/{{ $student->id }}" method="post" class="d-inline"
                              onsubmit="return confirm('Are you sure you want to delete this item?');">
                              @method('delete')
                              @csrf
                              <td><button class="btn btn-danger">Delete</button></td>
                          </form>
                      </tr>
                  @endforeach
              </tbody>
          </table>

          <a type="button" href="/kelas/create"  class="btn btn-primary"  style="color: white">Add New Grade Data</a>

@if (session() -> has('success'))
<div class="alert alert-success col-lg-12" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
</svg>
  {{session('success')}}
</div>
@endif

<table class="table">
  <thead>
    <tr>
      <th scope="col">Kelas</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($kelas as $grade)
    <tr>
      <td>{{ $grade -> kelas }} </td>
      <td>
      <form action="/dashboard/kelas/{{$grade -> id}}" method="GET" class="d-inline" >
       <button class="btn-primary">Detail</button>
      </form>
    </td>
    <td>
      <form action="/kelas/edit/{{$grade -> id}}" method="GET" class="d-inline">
        <button class="btn btn-primary">Edit</button>
      </form>
    </td>
    <td>
        <form action="/kelas/delete/{{ $grade->id }}" method="post" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this item?');">
          @method('delete')
          @csrf
          <button class="btn btn-danger">Delete</button>
        </form>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
      </main>
    </div>
  </div>
</body>

