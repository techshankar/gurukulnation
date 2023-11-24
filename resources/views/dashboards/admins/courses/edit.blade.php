@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Edit Course')

@section('content')

<style>
    .tags-input-wrapper {
        background: transparent;
        padding: 2px;
        /* border-radius: 4px; */
        /* max-width: 400px; */
        border: 1px solid #ccc
    }

    .tags-input-wrapper input {
        border: none;
        background: transparent;
        outline: none;
        width: 140px;
        margin-left: 8px;
    }

    .tags-input-wrapper .tag {
        display: inline-block;
        background-color: gray;
        color: white;
        border-radius: 40px;
        padding: 0px 3px 0px 7px;
        margin-right: 5px;
        margin-bottom: 5px;
        box-shadow: gray;
    }

    .tags-input-wrapper .tag a {
        margin: 0 7px 3px;
        display: inline-block;
        cursor: pointer;
    }
</style>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Course</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit Course</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="active nav-link tablinks" data-toggle="tab">Course</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">

                            <!-- /.tab-pane -->
                            <div class="active tab-pane tabcontent">
                                <form class="form-horizontal" action="{{ url('admin/update/course') }}/{{$courses->id}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group row">
                                        <div class="col-lg-4">
                                            <label for="inputName" class="col-sm-12 col-form-label">Course Category:</label>
                                            <select name="category_id" value="{{ $courses->category_id }}" class="form-control">
                                                <option>-- Select course category --</option>
                                                @foreach($courseCatcary as $row)
                                                <option value="{{ $row->id }}" {{ $row->id == $courses->category_id ? 'selected' : '' }}>{{ $row->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="inputName" class="col-sm-6 col-form-label">Title:</label>
                                            <input type="input" class="form-control" name="title" value="{{$courses->title}}" required>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="inputName" class="col-sm-6 col-form-label">Sub Title:</label>
                                            <input type="input" class="form-control" name="sub_title" value="{{$courses->sub_title}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="inputName" class="col-sm-6 col-form-label">What you will learn?:</label>
                                            <input type="input" class="form-control" name="what_you_will_learn"  value="{{$courses->what_you_will_learn}}" required>
                                            
                                            <!-- <input type="text" id="tag-input1" class="form-control" name="what_you_will_learn[]" value="{{$courses->what_you_will_learn }}"> -->
                                        </div>
                                        
                                        <div class="col-lg-6">
                                            <label for="inputName" class="col-sm-6 col-form-label">Brands:</label>
                                            <input type="input" class="form-control" name="brands[]"  value="{{$courses->brands}}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-12 col-form-label">Course Description:</label>
                                        <div class="col-sm-12">
                                            <textarea name="course_description" class="form-control">{{ $courses->course_description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label for="inputName" class="col-sm-6 col-form-label">Thumbnail:</label>
                                            <input type="file" class="form-control" name="thumbnail" value="{{$courses->thumbnail}}">
                                        </div>
                                        <div class="col-lg-3">
                                        <label for="inputName" class="col-sm-6 col-form-label">Old Thumbnail:</label>
                                            <img src="{{$courses->thumbnail}}" alt="" style="height:120px; width: 240px; border-radius:5%;">
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="inputName" class="col-sm-6 col-form-label">Certificate:</label>
                                            <input type="file" class="form-control" name="certificate_img" value="{{$courses->certificate_img}}">
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="inputName" class="col-sm-6 col-form-label">Old Certificate:</label>
                                            <img src="{{$courses->certificate_img}}" alt="" style="height:120px; width: 240px; border-radius:5%;">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 text-center">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>


                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
<script src="{{ url('public/plugins/jquery/jquery.min.js')}}"></script>


<script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
        });


    // for input what you learn? 
    (function() {
        "use strict"
        var TagsInput = function(opts) {
            this.options = Object.assign(TagsInput.defaults, opts);
            this.init();
        }
        TagsInput.prototype.init = function(opts) {
            this.options = opts ? Object.assign(this.options, opts) : this.options;
            if (this.initialized)
                this.destroy();
            if (!(this.orignal_input = document.getElementById(this.options.selector))) {
                console.error("tags-input couldn't find an element with the specified ID");
                return this;
            }
            this.arr = [];
            this.wrapper = document.createElement('div');
            this.input = document.createElement('input');
            init(this);
            initEvents(this);
            this.initialized = true;
            return this;
        }
        TagsInput.prototype.addTag = function(string) {
            if (this.anyErrors(string))
                return;
            this.arr.push(string);
            var tagInput = this;
            var tag = document.createElement('span');
            tag.className = this.options.tagClass;
            tag.innerText = string;
            var closeIcon = document.createElement('a');
            closeIcon.innerHTML = '&times;';
            closeIcon.addEventListener('click', function(e) {
                e.preventDefault();
                var tag = this.parentNode;
                for (var i = 0; i < tagInput.wrapper.childNodes.length; i++) {
                    if (tagInput.wrapper.childNodes[i] == tag)
                        tagInput.deleteTag(tag, i);
                }
            })
            tag.appendChild(closeIcon);
            this.wrapper.insertBefore(tag, this.input);
            this.orignal_input.value = this.arr.join(',');
            return this;
        }
        TagsInput.prototype.deleteTag = function(tag, i) {
            tag.remove();
            this.arr.splice(i, 1);
            this.orignal_input.value = this.arr.join(',');
            return this;
        }
        TagsInput.prototype.anyErrors = function(string) {
            if (this.options.max != null && this.arr.length >= this.options.max) {
                console.log('max tags limit reached');
                return true;
            }

            if (!this.options.duplicate && this.arr.indexOf(string) != -1) {
                console.log('duplicate found " ' + string + ' " ')
                return true;
            }
            return false;
        }
        TagsInput.prototype.addData = function(array) {
            var plugin = this;

            array.forEach(function(string) {
                plugin.addTag(string);
            })
            return this;
        }

        // Get the Input String
        TagsInput.prototype.getInputString = function() {
            return this.arr.join(',');
        }
        TagsInput.prototype.destroy = function() {
            this.orignal_input.removeAttribute('hidden');
            delete this.orignal_input;
            var self = this;
            Object.keys(this).forEach(function(key) {
                if (self[key] instanceof HTMLElement)
                    self[key].remove();

                if (key != 'options')
                    delete self[key];
            });
            this.initialized = false;
        }

        function init(tags) {
            tags.wrapper.append(tags.input);
            tags.wrapper.classList.add(tags.options.wrapperClass);
            tags.orignal_input.setAttribute('hidden', 'true');
            tags.orignal_input.parentNode.insertBefore(tags.wrapper, tags.orignal_input);
        }

        function initEvents(tags) {
            tags.wrapper.addEventListener('click', function() {
                tags.input.focus();
            });
            tags.input.addEventListener('keydown', function(e) {
                var str = tags.input.value.trim();

                if (!!(~[9, 13, 188].indexOf(e.keyCode))) {
                    e.preventDefault();
                    tags.input.value = "";
                    if (str != "")
                        tags.addTag(str);
                }
            });
        }
        TagsInput.defaults = {
            selector: '',
            wrapperClass: 'tags-input-wrapper',
            tagClass: 'tag',
            max: null,
            duplicate: false
        }
        window.TagsInput = TagsInput;
    })();
    var tagInput1 = new TagsInput({
        selector: 'tag-input1',
        duplicate: false,
        max: 10
    });
    // tagInput1.addData(['Write your full sentence' , 'Then press Enter button' , 'Your sentence add'])

    // for input what you learn? 
</script>

@endsection