    <div class="container-header">
      <input
        id="menu_toggle"
        name="menu_toggle"
        class="menu_toggle"
        type="checkbox"
      />
      <div class="logo__wrapper">
        <p class="logo">Нарушений.нет</p>
        <label class="menu_button_container" for="menu_toggle">
          <div class="menu_button"></div>
        </label>
      </div>
      <div class="wrapper">
        <div class="menu">
        <a class="text" href="{{route('home')}}">Главная</a>
        <a class="text" href="{{route('array')}}">Массивы</a>
        <a class="text" href="{{route('report.index')}}">Reports</a>
        </div>
      </div>
    </div>