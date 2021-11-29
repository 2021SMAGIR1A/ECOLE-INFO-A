
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
                        <button class="btn btn-light btn-sm border-primary rounded-pill" data-toggle="modal" data-target="#createStudentModal">
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
                                    <th class="text-center"></th>
                                    <th class="text-center">CONTACT</th>
                                    <th class="text-center"></th>
                                    <th class="text-center"></th>
                                    <th class="text-center">UTILISATEUR</th>
                                    
                                    <th class="text-center">ACTIONS</th>
                                </tr>
                                </thead>
                                <tbody>
                                @isset($students)
                                    @foreach($students as $key => $students)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
<td class="text-truncate" style="max-width: 200px"><span title="{{ $students->matricule }}">{{ $students->matricule }}</span></td>
                                            <td class="text-truncate" style="max-width: 200px"><span title="{{ $students->firstname }}">{{ $students->firstname }}</span></td>
                                            <td class="text-truncate" style="max-width: 200px"><span title="{{ $students->lastname }}">{{ $students->lastname }}</span></td>
                                            <td class="text-truncate" style="max-width: 200px"><span title="{{ $students->email }}">{{ $students->email }}</span></td>
                                            <td class="text-truncate" style="max-width: 200px"><span title="{{ $students->contact }}">{{ $students->contact }}</span></td>
                                            <td class="text-truncate" style="max-width: 200px"><span title="{{ $students->birthdate }}">{{ $students->birthdate }}</span></td>
                                            <td class="text-truncate" style="max-width: 200px"><span title="{{ $students->classes_id }}">{{ $students->classes_id }}</span></td>
                                            <td class="text-truncate" style="max-width: 200px"><span title="{{ $students->users_id }}">{{ $students->users_id }}</span></td>
                                            
                                            <td class="text-center">
                                                <div class="d-inline-flex">
                                                    <a href="{{ route('Module-TaskManagerStudentGetFind', $students->uuid) }}" title="Consulter"
                                                        data-id= "{{ $students->id }}"
                                                        data-uuid= "{{ $students->uuid }}"
                                                        data-matricule= "{{ $students->matricule }}"
                                                        data-firstname= "{{ $students->firstname }}"
                                                        data-lastname= "{{ $students->lastname }}"
                                                        data-email= "{{ $students->email }}"
                                                        data-contact= "{{ $students->contact }}"
                                                        data-birthdate= "{{ $students->birthdate }}"
                                                        data-classes_id= "{{ $students->classes_id }}"
                                                        data-users_id= "{{ $students->users_id }}"
                                                        
                                                        data-toggle="modal"
                                                        data-target=".modal-show"
                                                        class="btn btn-sm btn-outline-info modalShow mr-1">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('Module-TaskManagerStudentPostEdit', $students->uuid) }}" title="Editer"
                                                        data-id= "{{ $students->id }}"
                                                        data-uuid= "{{ $students->uuid }}"
                                                        data-matricule= "{{ $students->matricule }}"
                                                        data-firstname= "{{ $students->firstname }}"
                                                        data-lastname= "{{ $students->lastname }}"
                                                        data-email= "{{ $students->email }}"
                                                        data-contact= "{{ $students->contact }}"
                                                        data-birthdate= "{{ $students->birthdate }}"
                                                        data-classes_id= "{{ $students->classes_id }}"
                                                        data-users_id= "{{ $students->users_id }}"
                                                        
                                                        data-toggle="modal"
                                                        data-target=".modal-edit"
                                                        class="btn btn-sm btn-outline-success modalEdit mr-1">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    {{-- <button class="btn btn-sm btn-outline-success modalEdit mr-1 btnEditStudent" title="Editer">
                                                        <i class="fa fa-edit"></i>
                                                    </button> --}}
                                                    <button type="submit" class="btn btn-sm btn-outline-danger delete" data-uuid="{{ $students->uuid }}" title="Supprimer">
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

    @include('pages.students._create')
    @include('pages.students._show')
    @include('pages.students._edit')
@endsection

    