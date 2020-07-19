@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> let us know more about you</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('store.profile') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="job" class="col-md-4 col-form-label text-md-right"> Job</label>

                                <div class="col-md-6">
                                    <input id="job" type="text"
                                           class="form-control @error('job') is-invalid @enderror"
                                           name="job" value="{{ old('job') }}"
                                            autocomplete="job"
                                           autofocus>

                                    @error('job')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                                   <div class="form-group row">
                                <label for="country" class="col-md-4 col-form-label text-md-right"> country</label>

                                <div class="col-md-6">
                                    <input id="country" type="text"
                                           class="form-control @error('country') is-invalid @enderror"
                                           name="country" value="{{ old('country') }}"
                                            autocomplete="country"
                                           autofocus>

                                    @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                                   <div class="form-group row">
                                <label for="url" class="col-md-4 col-form-label text-md-right"> website</label>

                                <div class="col-md-6">
                                    <input id="url" type="text"
                                           class="form-control @error('url') is-invalid @enderror"
                                           name="url" value="{{ old('url') }}"
                                            autocomplete="url"
                                           autofocus>

                                    @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                                   <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right"> your picture</label>

                                <div class="col-md-6">
                                    <input id="image" type="file"
                                           class="form-control @error('image') is-invalid @enderror"
                                           name="image" value="{{ old('image') }}"
                                            autocomplete="image"
                                           autofocus>

                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right"> websdescription</label>

                                <div class="col-md-6">
                                    <textarea  id="description" type="text"
                                               class="form-control  @error('description') is-invalid @enderror"
                                               name="url" value="{{ old('description') }}"
                                               autocomplete="description"
                                               autofocus></textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
