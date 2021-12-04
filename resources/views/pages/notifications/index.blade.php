
@extends('layouts.default')

@section('content')
    <div class="col-12 my-2">
        <div class="border-bottom shadow-sm homeJumbotron d-flex align-items-center p-2" style="line-height: .10rem;">
            <div class="col-1"><span class="integral-box integral-box-sm integral-box-gray"><i class="fas fa-tasks"></i></span></div>
            <div class="col-6">
                <label class="h3 font-weight-bold mt-1"></label>
                <p class="text-muted">Affichage des </p>
            </div>
            <div class="col-5 d-flex justify-content-end">
                <ol class="breadcrumb bg-transparent">
                    <li class="mx-1">
                        <button class="btn btn-light btn-sm border-primary rounded-pill" data-toggle="modal" data-target="#createNotificationModal">
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
                    <h5 class="card-header text-uppercase">
                        <i class="fas fa-list"></i> LISTE DES 
                    </h5>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered dt-responsive nowrap" id="mydataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">N°</th>
                                    <th class="text-center text-uppercase">titre</th>
                                    <th class="text-center text-uppercase">description</th>
                                    <th class="text-center text-uppercase"></th>
                                    
                                    <th class="text-center">ACTIONS</th>
                                </tr>
                                </thead>
                                <tbody>
                                @isset($notifications)
                                    @foreach($notifications as $key => $notification)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td class="text-truncate" style="max-width: 200px"><span title="{{ $notification->title }}">{{ $notification->title }}</span></td>
                                            <td class="text-truncate" style="max-width: 200px"><span title="{{ $notification->description }}">{{ $notification->description }}</span></td>
                                            <td class="text-truncate" style="max-width: 200px"><span title="{{ $notification->users_id }}">{{ $notification->users_id }}</span></td>
                                            
                                            <td class="text-center">
                                                <div class="d-inline-flex">
                                                    <a href="{{ route('NotificationGetFind', $notification->uuid) }}" title="Consulter"
                                                        {{-- data-id= "{{ $notification->id }}"
                                                        data-uuid= "{{ $notification->uuid }}"
                                                        data-title= "{{ $notification->title }}"
                                                        data-description= "{{ $notification->description }}"
                                                        data-users_id= "{{ $notification->users_id }}"
                                                         --}}
                                                        data-toggle="modal"
                                                        data-target="#showNotification{{ $notification->uuid }}Modal"
                                                        class="mr-1">
                                                        <i class="mdi mdi-eye text-info"></i>
                                                    </a>
                                                    <a href="{{ route('NotificationPostEdit', $notification->uuid) }}" title="Editer"
                                                        {{-- data-id= "{{ $notification->id }}"
                                                        data-uuid= "{{ $notification->uuid }}"
                                                        data-title= "{{ $notification->title }}"
                                                        data-description= "{{ $notification->description }}"
                                                        data-users_id= "{{ $notification->users_id }}"
                                                         --}}
                                                        data-toggle="modal"
                                                        data-target="#editNotification{{ $notification->uuid }}Modal"
                                                        class="mr-1">
                                                        <i class="mdi mdi-square-edit-outline text-success"></i>
                                                    </a>
                                                    {{-- <button class="modalEdit mr-1 btnEditNotification" title="Editer">
                                                        <i class=\mdi mdi-square-edit-outline"></i>
                                                    </button> --}}
                                                    <button type="submit" class="delete" data-uuid="{{ $notification->uuid }}" title="Supprimer">
                                                        <i class="mdi mdi-delete text-danger"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        @include('pages.notifications._show')
                                        @include('pages.notifications._edit')
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

    @include('pages.notifications._create')
@endsection

    