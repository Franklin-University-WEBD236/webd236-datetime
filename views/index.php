%% views/header.html %%


<div class="row">
  <div class="col-lg-12">
    <h1>Current server time</h1>
    <p>{{ date('l jS \of F Y h:i:s A') }} in {{ $current_zone }}</p>

    <form>
      <select name="current_zone">
        <option>Foo</option>
      </select>
    </form>
%% views/footer.html %% 