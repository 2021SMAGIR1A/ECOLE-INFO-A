
@extends('layouts.default')

@section('content')
    <div class="col-12 my-2">
        <div class="border-bottom shadow-sm homeJumbotron d-flex align-items-center p-2" style="line-height: .10rem;">
            <div class="col-1"><span class="integral-box integral-box-sm integral-box-gray"><i class="fas fa-tasks"></i></span></div>
            <div class="col-6">
                <label class="h3 font-weight-bold mt-1">Enseignants</label>
                <p class="text-muted">Affichage des Enseignants</p>
            </div>
            <div class="col-5 d-flex justify-content-end">
                <ol class="breadcrumb bg-transparent">
                    <li class="mx-1">
                        <button class="btn btn-light btn-sm border-primary rounded-pill" data-toggle="modal" data-target="#createTeacherModal">
                            <i class="fa fa-plus"></i> Ajouter un Enseignant
                        </button>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card my-3">
                    <h5 class="card-header text-uppercase">
                        <i class="fas fa-list"></i> LISTE DES Enseignants
                    </h5>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered dt-responsive nowrap" id="mydataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">N°</th>
                                    <th class="text-center text-uppercase">matricule</th>
                                    <th class="text-center text-uppercase">prénom</th>
                                    <th class="text-center text-uppercase">nom</th>
                                    <th class="text-center text-uppercase"></th>
                                    
                                    <th class="text-center">ACTIONS</th>
                                </tr>
                                </thead>
                                <tbody>
                                @isset($teachers)
                                    @foreach($teachers as $key => $teacher)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td class="text-truncate" style="max-width: 200px"><span title="{{ $teacher->matricule }}">{{ $teacher->matricule }}</span></td>
                                            <td class="text-truncate" style="max-width: 200px"><span title="{{ $teacher->firstname }}">{{ $teacher->firstname }}</span></td>
                                            <td class="text-truncate" style="max-width: 200px"><span title="{{ $teacher->lastname }}">{{ $teacher->lastname }}</span></td>
                                            <td class="text-truncate" style="max-width: 200px"><span title="{{ $teacher->users_id }}">{{ $teacher->users_id }}</span></td>
                                            
                                            <td class="text-center">
                                                <div class="d-inline-flex">
                                                    <a href="{{ route('TeacherGetFind', $teacher->uuid) }}" title="Consulter"
                                                        {{-- data-id= "{{ $teacher->id }}"
                                                        data-uuid= "{{ $teacher->uuid }}"
                                                        data-matricule= "{{ $teacher->matricule }}"
                                                        data-firstname= "{{ $teacher->firstname }}"
                                                        data-lastname= "{{ $teacher->lastname }}"
                                                        data-users_id= "{{ $teacher->users_id }}"
                                                         --}}
                                                        data-toggle="modal"
                                                        data-target="#showTeacher{{ $teacher->uuid }}Modal"
                                                        class="mr-1">
                                                        <i class="mdi mdi-eye text-info"></i>
                                                    </a>
                                                    <a href="{{ route('TeacherPostEdit', $teacher->uuid) }}" title="Editer"
                                                        {{-- data-id= "{{ $teacher->id }}"
                                                        data-uuid= "{{ $teacher->uuid }}"
                                                        data-matricule= "{{ $teacher->matricule }}"
                                                        data-firstname= "{{ $teacher->firstname }}"
                                                        data-lastname= "{{ $teacher->lastname }}"
                                                        data-users_id= "{{ $teacher->users_id }}"
                                                         --}}
                                                        data-toggle="modal"
                                                        data-target="#editTeacher{{ $teacher->uuid }}Modal"
                                                        class="mr-1">
                                                        <i class="mdi mdi-square-edit-outline text-success"></i>
                                                    </a>
                                                    {{-- <button class="modalEdit mr-1 btnEditTeacher" title="Editer">
                                                        <i class=\mdi mdi-square-edit-outline"></i>
                                                    </button> --}}
                                                    <button type="submit" class="delete" data-uuid="{{ $teacher->uuid }}" title="Supprimer">
                                                        <i class="mdi mdi-delete text-danger"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        @include('pages.teachers._show')
                                        @include('pages.teachers._edit')
                                    @endforeach
                                @endisset
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('pages.teachers._create')
@endsection

    