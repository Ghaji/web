
	{{ csrf_field() }} 
  
    <div class="form-group {{ $errors->has('navigations_id') ? ' has-error' : '' }} required">
        <label class="col-sm-3 control-label">Has Sub-Navigation</label>
        <div class="col-sm-9">
            <select id="navigations_id" name="navigations_id" class="selectpicker" data-style="btn-white" data-live-search="true" >
                @foreach( $menus as $menu )
                    
                    @if($submenu->navigations_id == $menu->id)
                        <option value="{{ $submenu->navigations_id }}" selected='selected'>{{ $menu->name }}</option>
                    @else
                        <option value="{{ $menu->id }}">{{ strtoupper($menu->name) }}</option>
                    @endif

                @endforeach

            </select>

            @if ($errors->has('navigations_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('navigations_id') }}</strong>
                </span>
            @endif

        </div>
    </div>
    <div class="form-group {{ $errors->has('has_children') ? ' has-error' : '' }} required">
        <label class="col-sm-3 control-label">Has Children</label>
        <div class="col-sm-9">
            <select id="has_children" name="has_children" class="selectpicker" data-style="btn-white" data-live-search="true" data-size="5">
                <option value="">--Select--</option>
                <option value="1" {{ ($submenu->has_children == 1) ? "selected='selected'" : '' }}>Yes</option>
                <option value="0" {{ ($submenu->has_children == 0) ? "selected='selected'" : '' }}>No</option>

            </select>

            @if ($errors->has('has_children'))
                <span class="help-block">
                    <strong>{{ $errors->first('has_children') }}</strong>
                </span>
            @endif

        </div>
    </div>
    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }} form-control-material static required">
        <input type="text" class="form-control" id="name" name="name" value="{{ (old('name')) ? old('name') : $submenu->name }}" placeholder="Enter Sub Menu Name">
        <label for="name">Sub menu Name</label>

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif

    </div>
    <div class="form-group {{ $errors->has('position') ? ' has-error' : '' }} form-control-material static required">
        <input type="text" class="form-control" id="position" name="position" value="{{ (old('position')) ? old('position') : $submenu->position }}" placeholder="Enter Menu Position">
        <label for="position">Menu Position</label>

        @if ($errors->has('position'))
            <span class="help-block">
                <strong>{{ $errors->first('position') }}</strong>
            </span>
        @endif

    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" id="content" cols="30" rows="10" class="summernote">{{ (old('content')) ? old('content') : $submenu->content }}</textarea>
    </div>
    <div class="form-group {{ $errors->has('visible') ? ' has-error' : '' }}">
        <label class="col-sm-3 control-label">Visible</label>
        <div class="col-sm-9">
            <select id="visible" name="visible" class="selectpicker" data-style="btn-white" data-live-search="true" data-size="5">
                <option value="">--Select--</option>
                <option value="1" {{ ($submenu->visible == 1) ? "selected='selected'" : '' }}>Yes</option>
                <option value="0" {{ ($submenu->visible == 0) ? "selected='selected'" : '' }}>No</option>
                
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
                <option value="1" {{ ($submenu->weight == 1) ? "selected='selected'" : '' }}>Yes</option>
                <option value="0" {{ ($submenu->weight == 0) ? "selected='selected'" : '' }}>No</option>

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
                <input type="text" id="icon" name="icon" value="{{ (old('icon')) ? old('icon') : $submenu->icon }}" class="form-control" placeholder="Enter icon Code ">
                <label for="icon">Has Icon</label>
            <!-- </div> -->
        </div>
    </div> 
    <div class="form-group">
        
        <!-- This is form-group to create space between the form and the button -->
        
    </div>
