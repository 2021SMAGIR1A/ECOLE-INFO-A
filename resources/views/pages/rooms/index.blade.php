
@extends('layouts.default')

@section('content')
    <div class="col-12 my-2">
        <div class="border-bottom shadow-sm homeJumbotron d-flex align-items-center p-2" style="line-height: .10rem;">
            <div class="col-1"><span class="integral-box integral-box-sm integral-box-gray"><i class="fas fa-tasks"></i></span></div>
            <div class="col-6">
                <label class="h3 font-weight-bold mt-1">Salles</label>
                <p class="text-muted">Affichage des Salles</p>
            </div>
            <div class="col-5 d-flex justify-content-end">
                <ol class="breadcrumb bg-transparent">
                    <li class="mx-1">
                        <button class="btn btn-light btn-sm border-primary rounded-pill" data-toggle="modal" data-target="#createRoomModal">
                            <i class="fa fa-plus"></i> Ajouter une Salle
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
                        <i class="fas fa-list"></i> LISTE DES Salles
                    </h5>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered dt-responsive nowrap" id="mydataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">N°</th>
                                    <th class="text-center text-uppercase">titre</th>
                                    <th class="text-center text-uppercase">description</th>
                                    
                                    <th class="text-center">ACTIONS</th>
                                </tr>
                                </thead>
                                <tbody>
                                @isset($rooms)
                                    @foreach($rooms as $key => $room)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td class="text-truncate" style="max-width: 200px"><span title="{{ $room->title }}">{{ $room->title }}</span></td>
                                            <td class="text-truncate" style="max-width: 200px"><span title="{{ $room->description }}">{{ $room->description }}</span></td>
                                            
                                            <td class="text-center">
                                                <div class="d-inline-flex">
                                                    <a href="{{ route('RoomGetFind', $room->uuid) }}" title="Consulter"
                                                        {{-- data-id= "{{ $room->id }}"
                                                        data-uuid= "{{ $room->uuid }}"
                                                        data-title= "{{ $room->title }}"
                                                        data-description= "{{ $room->description }}"
                                                         --}}
                                                        data-toggle="modal"
                                                        data-target="#showRoom{{ $room->uuid }}Modal"
                                                        class="mr-1">
                                                        <i class="mdi mdi-eye text-info"></i>
                                                    </a>
                                                    <a href="{{ route('RoomPostEdit', $room->uuid) }}" title="Editer"
                                                        {{-- data-id= "{{ $room->id }}"
                                                        data-uuid= "{{ $room->uuid }}"
                                                        data-title= "{{ $room->title }}"
                                                        data-description= "{{ $room->description }}"
                                                         --}}
                                                        data-toggle="modal"
                                                        data-target="#editRoom{{ $room->uuid }}Modal"
                                                        class="mr-1">
                                                        <i class="mdi mdi-square-edit-outline text-success"></i>
                                                    </a>
                                                    {{-- <button class="modalEdit mr-1 btnEditRoom" title="Editer">
                                                        <i class=\mdi mdi-square-edit-outline"></i>
                                                    </button> --}}
                                                    <button type="submit" class="delete" data-uuid="{{ $room->uuid }}" title="Supprimer">
                                                        <i class="mdi mdi-delete text-danger"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        @include('pages.rooms._show')
                                        @include('pages.rooms._edit')
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

    @include('pages.rooms._create')
@endsection

    