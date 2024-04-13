<div class="adminx-sidebar expand-hover push">
    <ul class="sidebar-nav">
      <li class="sidebar-nav-item">
        <a href="index.html" class="sidebar-nav-link active">
          <span class="sidebar-nav-icon">
            <i data-feather="layout"></i>
          </span>
          <span class="sidebar-nav-name">
            Dashboard
          </span>
          <span class="sidebar-nav-end">

          </span>
        </a>
      </li>

      <li class="sidebar-nav-item">
        <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#example" aria-expanded="false" aria-controls="example">
          <span class="sidebar-nav-icon">
            <i data-feather="align-justify"></i>
          </span>
          <span class="sidebar-nav-name">
            Article
          </span>
          <span class="sidebar-nav-end">
            <i data-feather="chevron-right" class="nav-collapse-icon"></i>
          </span>
        </a>

        <ul class="sidebar-sub-nav collapse" id="example">
          <li class="sidebar-nav-item">
            <a href="{{route('posts.create')}}" class="sidebar-nav-link">
              <span class="sidebar-nav-name">
                Création
              </span>
            </a>
          </li>

          <li class="sidebar-nav-item">
            <a href="{{route('posts.index')}}" class="sidebar-nav-link">
              <span class="sidebar-nav-name">
                Liste
              </span>
            </a>
          </li>
        </ul>
      </li>

      <li class="sidebar-nav-item">
        <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navTables" aria-expanded="false" aria-controls="navTables">
          <span class="sidebar-nav-icon">
            <i data-feather="pie-chart"></i>
          </span>
          <span class="sidebar-nav-name">
            Catégorie
          </span>
          <span class="sidebar-nav-end">
            <i data-feather="chevron-right" class="nav-collapse-icon"></i>
          </span>
        </a>

        <ul class="sidebar-sub-nav collapse" id="navTables">
          <li class="sidebar-nav-item">
            <a href="{{route('categories.create')}}" class="sidebar-nav-link">
              <span class="sidebar-nav-name">
                Création
              </span>
            </a>
          </li>

          <li class="sidebar-nav-item">
            <a href="{{route('categories.index')}}" class="sidebar-nav-link">
              <span class="sidebar-nav-name">
                Liste
              </span>
            </a>
          </li>
        </ul>
      </li>

    </ul>
  </div>