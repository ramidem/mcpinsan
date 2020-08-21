<x-dynamic>
    @include('_partials._heading', [
        'heading' => 'Add New Item'
    ])

    <div class="row">
        <div class="col-md-8 mx-auto">
            <form
                method="post"
                action="{{ route('items.store') }}">
                @csrf
                @php
                    $code_suggestion = strtoupper(Str::random(5))
                @endphp

                <div class="form-group row">
                    <label
                        for="code"
                        class="col-sm-3 col-form-label">
                        Suggestion
                    </label>
                    <div class="col-sm-9">
                        <div class="input-group mb-3">
                            <input
                                type="text"
                                id="new_code"
                                class="form-control"
                                value="{{ $code_suggestion }}"
                                aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button
                                    onclick="location.reload()"
                                    class="form-control btn btn-outline-secondary" type="button" id="button-addon2">
                                    New Code
                                </button>
                            </div>
                            <div class="input-group-append">
                                <button
                                    onclick="copyInput()"
                                    class="form-control btn btn-outline-secondary"
                                    type="button"
                                    id="button-addon2">
                                    Copy
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label
                        for="code"
                        class="col-sm-3 col-form-label">
                        Code
                    </label>
                    <div class="col-sm-9">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="form-control input-group-text" id="basic-addon3">
                                    MCP
                                </span>
                            </div>
                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                name="name"
                                placeholder="{{ $code_suggestion }}"
                                aria-describedby="basic-addon3">
                        </div>

                        @error('name')
                        <div class="d-block invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label
                        for="asset"
                        class="col-sm-3 col-form-label">
                        Asset
                    </label>
                    <div class="col-sm-9">
                        <div class="form-group">
                            <select class="form-control">
                                <option>-- select --</option>
                                @foreach(range(1, 10) as $option)
                                    <option id="_id_">_asset_name_</option>
                                @endforeach
                            </select>
                        </div>
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
    <script>
        function copyInput() {
            var copyText = document.getElementById("new_code");
            copyText.select();
            copyText.setSelectionRange(0, 99999)
            document.execCommand("copy");
            alert("Copied the code: " + copyText.value);
        }
    </script>
</x-dynamic>
