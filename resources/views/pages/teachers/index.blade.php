
@extends('layouts.default')

@section('content')
    <div class="col-12 my-2">
        <div class="border-bottom shadow-sm homeJumbotron d-flex align-items-center p-2" style="line-height: .10rem;">
            <div class="col-1"><span class="integral-box integral-box-sm integral-box-gray"><i class="fas fa-tasks"></i></span></div>
            <div class="col-6">
                <label class="h3 font-weight-bold mt-1">Task Manager</label>
                <p class="text-muted">Affichage des </p>
            </div>
            <div class="col-5 d-flex justify-content-end">
                <ol class="breadcrumb bg-transparent">
                    <li class="mx-1">
                        <button class="btn btn-light btn-sm border-primary rounded-pill" data-toggle="modal" data-target="#createTeacherModal">
                            <i class="fa fa-plus"></i> Ajouter un 
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
                    <h5 class="card-header">
                        <i class="fas fa-list"></i> LISTE DES 
                    </h5>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered dt-responsive nowrap" id="mydataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">N°</th>
                                    <th class="text-center"></th>
                                    <th class="text-center"></th>
                                    <th class="text-center"></th>
                                    <th class="text-center">UTILISATEUR</th>
                                    
                                    <th class="text-center">ACTIONS</th>
                                </tr>
                                </thead>
                                <tbody>
                                @isset($teachers)
                                    @foreach($teachers as $key => $teachers)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
<td class="text-truncate" style="max-width: 200px"><span title="{{ $teachers->matricule }}">{{ $teachers->matricule }}</span></td>
                                            <td class="text-truncate" style="max-width: 200px"><span title="{{ $teachers->nom }}">{{ $teachers->nom }}</span></td>
                                            <td class="text-truncate" style="max-width: 200px"><span title="{{ $teachers->prenoms }}">{{ $teachers->prenoms }}</span></td>
                                            <td class="text-truncate" style="max-width: 200px"><span title="{{ $teachers->users_id }}">{{ $teachers->users_id }}</span></td>
                                            
                                            <td class="text-center">
                                                <div class="d-inline-flex">
                                                    <a href="{{ route('Module-TaskManagerTeacherGetFind', $teachers->uuid) }}" title="Consulter"
                                                        data-id= "{{ $teachers->id }}"
                                                        data-uuid= "{{ $teachers->uuid }}"
                                                        data-matricule= "{{ $teachers->matricule }}"
                                                        data-nom= "{{ $teachers->nom }}"
                                                        data-prenoms= "{{ $teachers->prenoms }}"
                                                        data-users_id= "{{ $teachers->users_id }}"
                                                        
                                                        data-toggle="modal"
                                                        data-target=".modal-show"
                                                        class="btn btn-sm btn-outline-info modalShow mr-1">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('Module-TaskManagerTeacherPostEdit', $teachers->uuid) }}" title="Editer"
                                                        data-id= "{{ $teachers->id }}"
                                                        data-uuid= "{{ $teachers->uuid }}"
                                                        data-matricule= "{{ $teachers->matricule }}"
                                                        data-nom= "{{ $teachers->nom }}"
                                                        data-prenoms= "{{ $teachers->prenoms }}"
                                                        data-users_id= "{{ $teachers->users_id }}"
                                                        
                                                        data-toggle="modal"
                                                        data-target=".modal-edit"
                                                        class="btn btn-sm btn-outline-success modalEdit mr-1">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    {{-- <button class="btn btn-sm btn-outline-success modalEdit mr-1 btnEditTeacher" title="Editer">
                                                        <i class="fa fa-edit"></i>
                                                    </button> --}}
                                                    <button type="submit" class="btn btn-sm btn-outline-danger delete" data-uuid="{{ $teachers->uuid }}" title="Supprimer">
                                                        <i class="fas fa-times-circle"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
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
    @include('pages.teachers._show')
    @include('pages.teachers._edit')
@endsection

    