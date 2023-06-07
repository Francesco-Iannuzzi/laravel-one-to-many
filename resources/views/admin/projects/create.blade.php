@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        @include('partials.validation_errors')

        <form action="{{ route('admin.projects.store') }}" method="post" class="pt-3">
            @csrf

            <h1 class="fs-4 text-secondary my-4">Add new Project</h1>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                    placeholder="Add title" aria-describedby="helpTitle" value="{{ old('title') }}">
                <small id="helpTitle" class="text-muted">Insert Title of the project here</small>
            </div>

            @error('title')
                <div class="alert alert-danger" role="alert">
                    <strong>Error:</strong> {{ $message }}
                </div>
            @enderror
            {{-- form title --}}

            <div class="mb-3">
                <label for="made_by" class="form-label">Author</label>
                <input type="text" name="made_by" id="made_by"
                    class="form-control @error('made_by') is-invalid @enderror" placeholder="Add Author"
                    aria-describedby="helpMadeBy" value="{{ old('made_by') }}">
                <small id="helpMadeBy" class="text-muted">Insert Author of the project</small>
            </div>

            @error('made_by')
                <div class="alert alert-danger" role="alert">
                    <strong>Error:</strong> {{ $message }}
                </div>
            @enderror
            {{-- form made_by --}}

            <div class="mb-3">
                <label for="cover" class="form-label">Cover</label>
                <input type="text" name="cover" id="cover"
                    class="form-control @error('cover') is-invalid @enderror" placeholder="Add Cover"
                    aria-describedby="helpCover" value="{{ old('cover') }}">
                <small id="helpCover" class="text-muted">Insert Cover of the project</small>
            </div>

            @error('cover')
                <div class="alert alert-danger" role="alert">
                    <strong>Error:</strong> {{ $message }}
                </div>
            @enderror
            {{-- form cover --}}

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                    aria-describedby="helpDescription" rows="3">{{ old('description') }}</textarea>
                <small id="helpDescription" class="text-muted">Insert a Description of the project</small>
            </div>

            @error('description')
                <div class="alert alert-danger" role="alert">
                    <strong>Error:</strong> {{ $message }}
                </div>
            @enderror
            {{-- form description --}}

            <div class="mb-3">
                <label for="trace" class="form-label">Trace</label>
                <textarea class="form-control @error('trace') is-invalid @enderror" name="trace" id="trace"
                    aria-describedby="helpTrace" rows="3">{{ old('trace') }}</textarea>
                <small id="helpTrace" class="text-muted">Insert initial Trace of the project</small>
            </div>

            @error('trace')
                <div class="alert alert-danger" role="alert">
                    <strong>Error:</strong> {{ $message }}
                </div>
            @enderror
            {{-- form trace --}}

            <div class="mb-3">
                <label for="creation_date" class="form-label">Creation Date</label>
                <input type="date" name="creation_date" id="creation_date"
                    class="form-control @error('creation_date') is-invalid @enderror" placeholder="Add date Project"
                    aria-describedby="helpCreationDate" value="{{ old('creation_date') }}">
                <small id="helpCreationDate" class="text-muted">Insert Creation Date of the project</small>
            </div>

            @error('creation_date')
                <div class="alert alert-danger" role="alert">
                    <strong>Error:</strong> {{ $message }}
                </div>
            @enderror
            {{-- form creation_date --}}

            <div class="mb-3">
                <label for="link" class="form-label">Link</label>
                <input type="text" name="link" id="link" class="form-control @error('link') is-invalid @enderror"
                    placeholder="Add link" aria-describedby="helpLink" value="{{ old('link') }}">
                <small id="helpLink" class="text-muted">Insert Link of the project here</small>
            </div>

            @error('link')
                <div class="alert alert-danger" role="alert">
                    <strong>Error:</strong> {{ $message }}
                </div>
            @enderror
            {{-- form link --}}

            <div class="mb-3">
                <label for="code_link" class="form-label">Code's Link</label>
                <input type="text" name="code_link" id="code_link"
                    class="form-control @error('code_link') is-invalid @enderror" placeholder="Add code_link"
                    aria-describedby="helpCodeLink" value="{{ old('code_link') }}">
                <small id="helpCodeLink" class="text-muted">Insert code_link of the project here</small>
            </div>

            @error('code_link')
                <div class="alert alert-danger" role="alert">
                    <strong>Error:</strong> {{ $message }}
                </div>
            @enderror
            {{-- form code_link --}}

            <button type="submit" class="btn btn-primary w-100 mt-4 py-2 px-4">Add</button>


        </form>
    </div>
@endsection
