
@extends('layouts.default')

@section('content')
    <div class="col-12 my-2">
        <div class="border-bottom shadow-sm homeJumbotron d-flex align-items-center p-2" style="line-height: .10rem;">
            <div class="col-1"><span class="integral-box integral-box-sm integral-box-gray"><i class="fas fa-tasks"></i></span></div>
            <div class="col-6">
                <label class="h3 font-weight-bold mt-1">Elèves</label>
                <p class="text-muted">Affichage des Elèves</p>
            </div>
            <div class="col-5 d-flex justify-content-end">
                <ol class="breadcrumb bg-transparent">
                    <li class="mx-1">
                        <button class="btn btn-light btn-sm border-primary rounded-pill" data-toggle="modal" data-target="#createStudentModal">
                            <i class="fa fa-plus"></i> Ajouter un Elève
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
                        <i class="fas fa-list"></i> LISTE DES Elèves
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
                                    <th class="text-center text-uppercase">email</th>
                                    <th class="text-center text-uppercase">contact</th>
                                    <th class="text-center text-uppercase">date de naissance</th>
                                    <th class="text-center text-uppercase"></th>
                                    <th class="text-center text-uppercase"></th>
                                    
                                    <th class="text-center">ACTIONS</th>
                                </tr>
                                </thead>
                                <tbody>
                                @isset($students)
                                    @foreach($students as $key => $student)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td class="text-truncate" style="max-width: 200px"><span title="{{ $student->matricule }}">{{ $student->matricule }}</span></td>
                                            <td class="text-truncate" style="max-width: 200px"><span title="{{ $student->firstname }}">{{ $student->firstname }}</span></td>
                                            <td class="text-truncate" style="max-width: 200px"><span title="{{ $student->lastname }}">{{ $student->lastname }}</span></td>
                                            <td class="text-truncate" style="max-width: 200px"><span title="{{ $student->email }}">{{ $student->email }}</span></td>
                                            <td class="text-truncate" style="max-width: 200px"><span title="{{ $student->contact }}">{{ $student->contact }}</span></td>
                                            <td class="text-truncate" style="max-width: 200px"><span title="{{ $student->birthdate }}">{{ $student->birthdate }}</span></td>
                                            <td class="text-truncate" style="max-width: 200px"><span title="{{ $student->classes_id }}">{{ $student->classes_id }}</span></td>
                                            <td class="text-truncate" style="max-width: 200px"><span title="{{ $student->users_id }}">{{ $student->users_id }}</span></td>
                                            
                                            <td class="text-center">
                                                <div class="d-inline-flex">
                                                    <a href="{{ route('StudentGetFind', $student->uuid) }}" title="Consulter"
                                                        {{-- data-id= "{{ $student->id }}"
                                                        data-uuid= "{{ $student->uuid }}"
                                                        data-matricule= "{{ $student->matricule }}"
                                                        data-firstname= "{{ $student->firstname }}"
                                                        data-lastname= "{{ $student->lastname }}"
                                                        data-email= "{{ $student->email }}"
                                                        data-contact= "{{ $student->contact }}"
                                                        data-birthdate= "{{ $student->birthdate }}"
                                                        data-classes_id= "{{ $student->classes_id }}"
                                                        data-users_id= "{{ $student->users_id }}"
                                                         --}}
                                                        data-toggle="modal"
                                                        data-target="#showStudent{{ $student->uuid }}Modal"
                                                        class="mr-1">
                                                        <i class="mdi mdi-eye text-info"></i>
                                                    </a>
                                                    <a href="{{ route('StudentPostEdit', $student->uuid) }}" title="Editer"
                                                        {{-- data-id= "{{ $student->id }}"
                                                        data-uuid= "{{ $student->uuid }}"
                                                        data-matricule= "{{ $student->matricule }}"
                                                        data-firstname= "{{ $student->firstname }}"
                                                        data-lastname= "{{ $student->lastname }}"
                                                        data-email= "{{ $student->email }}"
                                                        data-contact= "{{ $student->contact }}"
                                                        data-birthdate= "{{ $student->birthdate }}"
                                                        data-classes_id= "{{ $student->classes_id }}"
                                                        data-users_id= "{{ $student->users_id }}"
                                                         --}}
                                                        data-toggle="modal"
                                                        data-target="#editStudent{{ $student->uuid }}Modal"
                                                        class="mr-1">
                                                        <i class="mdi mdi-square-edit-outline text-success"></i>
                                                    </a>
                                                    {{-- <button class="modalEdit mr-1 btnEditStudent" title="Editer">
                                                        <i class=\mdi mdi-square-edit-outline"></i>
                                                    </button> --}}
                                                    <button type="submit" class="delete" data-uuid="{{ $student->uuid }}" title="Supprimer">
                                                        <i class="mdi mdi-delete text-danger"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        @include('pages.students._show')
                                        @include('pages.students._edit')
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
@endsection

    