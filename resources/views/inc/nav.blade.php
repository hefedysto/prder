<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="/items">{{config('app.name', 'Purchase Order')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a class="nav-link" href="/purchaseorders">Purchase Orders</a>
            </li>
            {{-- <li class="nav-item">
            <a class="nav-link" href="/costcenters">Cost Center</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/fundsources">Fund Sources</a>
            </li> --}}
            {{-- <li class="nav-item">
            <a class="nav-link" href="/items">Items</a>
            </li> --}}
        </ul>
    </div>
</nav>