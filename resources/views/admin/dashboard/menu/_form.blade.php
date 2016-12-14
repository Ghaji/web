
	{{ csrf_field() }}
    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }} form-control-material static required">
        <input type="text" class="form-control" id="name" name="name" value="{{ (old('name')) ? old('name') : $menu->name }}" placeholder="Enter Menu Name">
        <label for="name">Menu Name</label>

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif

    </div>
    <div class="form-group {{ $errors->has('category') ? ' has-error' : '' }} required">
        <label class="col-sm-3 control-label">Category</label>
        <div class="col-sm-9">
            <select id="category" name="category" class="selectpicker" data-style="btn-white" data-live-search="true" data-size="5">
                <option value="">--Select--</option>
                <option value="primary" {{ ($menu->category == 'primary') ? "selected='selected'" : '' }}>Primary Menu</option>
                <option value="secondary" {{ ($menu->category == 'secondary') ? "selected='selected'" : '' }}>Secondary Menu</option>

            </select>

            @if ($errors->has('category'))
                <span class="help-block">
                    <strong>{{ $errors->first('category') }}</strong>
                </span>
            @endif

        </div>
    </div>
    <div class="form-group {{ $errors->has('position') ? ' has-error' : '' }} form-control-material static required">
        <input type="text" class="form-control" id="position" name="position" value="{{ (old('position')) ? old('position') : $menu->position }}" placeholder="Enter Menu Position">
        <label for="position">Menu Position</label>

        @if ($errors->has('position'))
            <span class="help-block">
                <strong>{{ $errors->first('position') }}</strong>
            </span>
        @endif

    </div>
    <div class="form-group {{ $errors->has('has_sub_nav') ? ' has-error' : '' }} required">
        <label class="col-sm-3 control-label">Has Sub-Navigation</label>
        <div class="col-sm-9">
            <select id="has_sub_nav" name="has_sub_nav" class="selectpicker" data-style="btn-white" data-live-search="true" data-size="5">
                <option value="">--Select--</option>
                <option value="1" {{ ($menu->has_sub_nav == 1) ? "selected='selected'" : '' }}>Yes</option>
                <option value="0" {{ ($menu->has_sub_nav == 0) ? "selected='selected'" : '' }}>No</option>

            </select>

            @if ($errors->has('has_sub_nav'))
                <span class="help-block">
                    <strong>{{ $errors->first('has_sub_nav') }}</strong>
                </span>
            @endif

        </div>
    </div>

    <div class="form-group {{ $errors->has('navigation_type') ? ' has-error' : '' }} required">
        <label class="col-sm-3 control-label">Navigation Type</label>
        <div class="col-sm-9">
            <select id="navigation_type" name="navigation_type" class="selectpicker" data-style="btn-white" data-live-search="true" data-size="5">
                <option value="">--Select--</option>
                <option value="fixed" {{ ($menu->navigation_type == 'fixed') ? "selected='selected'" : '' }}>Fixed Menu</option>
                <option value="dynamic" {{ ($menu->navigation_type == 'dynamic') ? "selected='selected'" : '' }}>Dynamic Menu</option>

            </select>

            @if ($errors->has('navigation_type'))
                <span class="help-block">
                    <strong>{{ $errors->first('navigation_type') }}</strong>
                </span>
            @endif

        </div>
    </div>

    <div class="form-group {{ $errors->has('visible') ? ' has-error' : '' }}">
        <label class="col-sm-3 control-label">Visible</label>
        <div class="col-sm-9">
            <select id="visible" name="visible" class="selectpicker" data-style="btn-white" data-live-search="true" data-size="5">
                <option value="">--Select--</option>
                <option value="1" {{ ($menu->visible == 1) ? "selected='selected'" : '' }}>Yes</option>
                <option value="0" {{ ($menu->visible == 0) ? "selected='selected'" : '' }}>No</option>
                
            </select>

            @if ($errors->has('visible'))
                <span class="help-block">
                    <strong>{{ $errors->first('visible') }}</strong>
                </span>
            @endif

        </div>
    </div>

    

    <div class="form-group {{ $errors->has('weight') ? ' has-error' : '' }}">
        <label class="col-sm-3 control-label">Weight</label>
        <div class="col-sm-9">
            <select id="weight" name="weight" class="selectpicker" data-style="btn-white" data-live-search="true" data-size="5">
                <option value="">--Select--</option>
                <option value="1" {{ ($menu->weight == 1) ? "selected='selected'" : '' }}>Yes</option>
                <option value="0" {{ ($menu->weight == 0) ? "selected='selected'" : '' }}>No</option>

            </select>

            @if ($errors->has('weight'))
                <span class="help-block">
                    <strong>{{ $errors->first('weight') }}</strong>
                </span>
            @endif

        </div>
    </div>
                                                                  
    <div class="form-group">
        <div class="form-control-material static">
            <!-- <div class="input-group"> -->
                <!-- <span class="input-group-addon"><i class="fa fa-user"></i></span> -->
                <input type="text" id="icon" name="icon" value="{{ (old('icon')) ? old('icon') : $menu->icon }}" class="form-control" placeholder="Enter icon Code ">
                <label for="icon">Has Icon</label>
            <!-- </div> -->
        </div>
    </div> 
    <div class="form-group">
        
        <!-- This is form-group to create space between the form and the button -->
        
    </div>
