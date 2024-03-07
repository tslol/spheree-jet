<div class="navbar py-3 bg-base-100">
    <div class="navbar-start"></div>
    <div class="navbar-end"></div>
  <div class="navbar-end">

      <div class="dropdown dropdown-hover dropdown-end">
          <div class="avatar mr-3" role="button" tabindex="0">
            <div class="w-10 rounded-full translate-y-1">
              <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
            </div>
          </div>
        <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
          <li>
              <a href="{{ url('/p/' . optional(Auth::user())->id)  }}">View Profile</a>
          </li>
          <li>
              <a href="{{ route('billing') }}">Billing</a>
          </li>
          <li>
              <a href="{{ route('profile.show') }}">Account Settings</a>
          </li>
          <li>
              <a href="{{ route('business.create') }}">Create Business</a>
          </li>
          <li>
              <form method="POST" action="{{ route('logout') }}" x-data>
                  @csrf
                  <a href="{{ route('logout') }}" @click.prevent="$el.closest('form').submit()">Logout</a>
              </form>
          </li>
        </ul>
      </div>


  </div>
</div>
