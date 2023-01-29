@extends('app.layout')
@section('content')
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ __('Transaction Types') }}</h1>
      @if (count($errors) > 0)
         @include('app.includes.alerts')
      @endif
      <div>
         <button type="button"
            class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"
            data-toggle="modal"
            data-target="#createModal"
            data-whatever="@mdo">
            <span class="icon text-white-50">
               <i class="fas fa-plus fa-sm text-white-50"></i>
            </span>
            {{ __('Add new') }}</button>
      </div>
   </div>
   <div class="card shadow mb-4">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">{{ __('Transaction Types') }}</h6>
      </div>
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered"
               id="dataTable"
               width="100%"
               cellspacing="0">
               <thead>
                  <tr>
                     <th>{{ __('Name') }}</th>
                     <th>{{ __('Actions') }}</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($transactionTypes as $type)
                     <tr>
                        <td>{{ $type->name }}</td>
                        <td>
                           <form
                              action="{{ route('admin.transaction-types.destroy', ['transaction_type' => $type->id]) }}"
                              method="post"
                              class="d-inline">
                              @csrf
                              @method('delete')
                              <button type="submit"
                                 class="btn btn-sm btn-danger shadow-sm">
                                 <i class="fas fa-trash"></i>
                              </button>
                           </form>
                        </td>
                     </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
   {{-- begin create new Transaction type modal --}}
   <div class="modal fade"
      id="createModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="createModalLabel"
      aria-hidden="true">
      <div class="modal-dialog"
         role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title"
                  id="createModalLabel">{{ __('New Transaction Type') }}</h5>
               <a class="close"
                  data-dismiss="modal"
                  aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </a>
            </div>
            <div class="modal-body">
               <form action="{{ route('admin.transaction-types.store') }}"
                  method="post">
                  @csrf
                  <div class="form-group">
                     <label for="recipient-name"
                        class="col-form-label">{{ __('Name') }}</label>
                     <input type="text"
                        class="form-control"
                        name="name">
                  </div>
            </div>
            <div class="modal-footer">
               <button type="button"
                  class="btn btn-secondary"
                  data-dismiss="modal">{{ __('Close') }}</button>
               <button type="submit"
                  class="btn btn-primary">{{ __('Save') }}</button>
            </div>
            </form>
         </div>
      </div>
   </div>
   {{-- end create model --}}
@endsection