@extends('dashbord.admin.layouts.admin')

@section('content')
<div class="content-wrapper">
    
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Tableau de bord
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span> Aperçu <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                 <strong>{{session('success')}}</strong>
            </div>
            @endif

            @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                 <strong>{{session('status')}}</strong>
            </div>
            @endif 
            
            @if(session('delete'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('delete')}}</strong>
            </div>
            @endif 
            
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                <div class="card-title pt-3 ps-3"> <h4>Listes utilisateurs </h4> </div>
                  <div class="card-body">
                    <div class="col-3"></div> <div class="col-9"><a href="{{ route('admin.usersCreate') }}" class="btn btn-block btn-facebook auth-form-btn">Ajouter <i class="mdi mdi-account-multiple"></i></a></div>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> User </th>
                          <th> Nom </th>
                          <th> Prénom </th>
                          <th> Email </th>
                          <th> Contact </th>
                          <th> Role </th>
                          <th colspan="2"> Action </th>

                        </tr>
                      </thead>
                      <tbody>
                      @php
                         $i = 1;
                      @endphp

                        @foreach ($users as $row)
                             <tr class="@if($row->status== 1)
                                          bg-lu
                                        @endif">
                                 <td>{{ $i++ }}</td>
                                 <td>{{ $row->name }}</td>
                                 <td>{{ $row->prenom }}</td>
                                 
                                 <td>{{ $row->email }}</td>
                                 <td>{{ $row->contact }}</td>
                                 <td>
                                   @if($row->role==1)
                                    <span class="bg-warning p-2">{{ __('Admin') }} </span>
                                  @else 
                                  <span class="text-warning">{{ __('User') }}</span>
                                  @endif
                                 </td>

                                 <td> 
                                   <a href="users/{{ $row->id }}">
                                   <label class="badge badge-info" style="cursor: pointer;"> <i class="mdi mdi-border-color"></i> </label> </a>
                                  </td>
                                 <td>
                                 @if($row->status==1)
                                  <a href="desactive/{{ $row->id }} " onclick="return confirm('Voulez-vous desactiver ?')">
                                    <label class="badge badge-success" style="cursor: pointer;"> activé</i> </label> 
                                  </a>
                                  @else 
                                  <a href="active/{{ $row->id }} " onclick="return confirm('Voulez-vous activer ?')">
                                      <label class="badge badge-danger" style="cursor: pointer;"> desactivé</i> </label> 
                                  </a>
                                  @endif
                                </td>
                                 
                             </tr>
                         @endforeach
                          <!-- <td class="py-1">
                            <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                          </td> -->
                          
                      </tbody>
                    </table>
                  </div>
                </div>
    </div>
</div>
@endsection
