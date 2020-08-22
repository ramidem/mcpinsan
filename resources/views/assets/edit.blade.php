<x-dynamic>
    @include('_partials._heading', [
        'heading' => 'Edit Asset'
    ])

    <div class="row">
        <div class="col-md-8 mx-auto">
            <form
                method="post"
                action="{{ route('assets.update', $asset->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label
                        for="image"
                        class="col-sm-3 col-form-label">
                        Image
                    </label>
                    <div class="col-sm-9">
                        <input
                        class="form-control-file"
                        type="file"
                        name="image"
                        id="image">
                    </div>
                </div>

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
                            id="name"
                            value="{{ $asset->name }}"
                            name="name">

                        @error('name')
                        <div class="d-block invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label
                        for="description"
                        class="col-sm-3 col-form-label">
                        Description
                    </label>
                    <div class="col-sm-9">
                        <textarea
                            class="form-control"
                            id="description"
                            name="description">{{ $asset->description }}</textarea>

                        @error('description')
                        <div class="d-block invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label
                        for="category"
                        class="col-sm-3 col-form-label">
                        Category
                    </label>
                    <div class="col-sm-9">
                        <div class="form-group">
                            <select
                                name="category_id"
                                id="category_id"
                                class="form-control">
                                <option>-- select --</option>
                                @foreach($categories as $category)
                                    <option
                                        {{ $category->id === $asset->category_id ? 'selected' : '' }}
                                        value="{{ $category->id }}">
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @error('category_id')
                        <div class="d-block invalid-feedback">
                            Please select a category.
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
