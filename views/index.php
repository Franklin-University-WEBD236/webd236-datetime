%% views/header.html %%

<div class="row">
  <div class="col-lg-12">
    <h1>Current server time</h1>
    <p>{{ date('l jS \of F Y h:i:s A') }} in {{ $current_zone }}</p>

          <form action="@@timezone/view@@" method="post">
          <div class="form-row">
            <div class="col">
              <label for="timezone">Select new timezone</label>
              <select name="timezone" id="timezone" class="form-control">
[[ foreach ($timezones as $zone => $text): ]]                
                <option value="{{ str_replace('/', '-', $zone) }}" [[ echo ]]>{{$text}}</option>
[[ endforeach; ]]
              </select>
            </div>
          </div>
          <div class="form-row mt-4 float-right">
            <div class="btn-toolbar align-middle">
              <button type="submit" class="btn btn-primary mr-1 d-flex justify-content-center align-content-between"><span class="material-icons">send</span>&nbsp;Submit</button>
              <button class="btn btn-secondary mr-1 d-flex justify-content-center align-content-between" onclick="get('@@index@@')"><span class="material-icons">cancel</span>&nbsp;Cancel</button>
            </div>
          </div>
        </form>
  </div>
</div>
%% views/footer.html %% 