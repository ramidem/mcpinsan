<x-dynamic>
    @include('_partials._heading', [
        'heading' => 'Add Category'
    ])

    <div class="row">
        <div class="col-md-8 mx-auto">
            <form
                method="post"
                action="{{ route('categories.store') }}">
                @csrf

                <div class="form-group row">
                    <label
                        for="name"
                        class="col-sm-3 col-form-label">
                        Name
                    </label>
                    <div class="col-sm-9">
                        <input
                            type="text"
                            class="form-control"
                            name="name"
                            id="name">

                        @error('name')
                        <div class="d-block invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-3">&nbsp;</div>
                    <div class="col-sm-9">
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-dynamic>
