<x-dynamic>
    @include('_partials._heading', [
        'heading' => 'Edit Item'
    ])

    <div class="row">
        <div class="col-md-8 mx-auto">
            <form
                method="post"
                action="{{ route('items.update', $item->id) }}">
                @csrf
                @method('PUT')
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
                                id="code"
                                name="code"
                                value="{{ substr($item->code, -5) }}"
                                aria-describedby="basic-addon3">
                        </div>

                        @error('code')
                        <div class="d-block invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label
                        for="asset_id"
                        class="col-sm-3 col-form-label">
                        Asset
                    </label>
                    <div class="col-sm-9">
                        <div class="form-group">
                            <select
                                name="asset_id"
                                id="asset_id"
                                class="form-control">
                                <option>-- select --</option>
                                @foreach($assets as $asset)
                                    <option
                                        @if($item->asset)
                                        {{ $asset->category_id === $item->asset->category_id ? 'selected' : '' }}
                                        @endif
                                        value="{{ $asset->id }}">
                                        {{ $asset->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label
                        for="item_status_id"
                        class="col-sm-3 col-form-label">
                        Status
                    </label>
                    <div class="col-sm-9">
                        <div class="form-group">
                            <select
                                name="item_status_id"
                                class="form-control">
                                @foreach($statuses as $status)
                                    <option
                                        {{ $status->id === $item->item_status_id ? 'selected' : '' }}
                                        value="{{ $status->id }}">
                                        {{ $status->name }}
                                    </option>
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
        }
    </script>
</x-dynamic>
