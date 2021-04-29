@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
donorandpartners List
@parent
@stop

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Donorandpartners</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>donorandpartners</li>
        <li class="active">donorandpartners</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title pull-left"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Donorandpartners List
                </h4>
                <div class="pull-right">
                    <a href="{{ route('admin.donorandpartners.create') }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> @lang('button.create')</a>
                </div>
            </div>
            <br />
            <div class="panel-body table-responsive">
                <table class="table table-bordered " id="table">
                    <thead>
                        <tr class="filters">
                            <th>ID</th>
                            <th>Title</th>
							<th>Donationfor</th>
							<th>Organizationname</th>
							<th>Description</th>
							<th>User Id</th>
							<th>Views</th>
							<th>Image</th>
							<th>Overall</th>
							<th>Donationammount</th>
                            <th>Donorand or partner</th>
                            <th>Field of Donation</th>
                            <th>Field of Partnership</th>
                            <th>Weblink</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($donorandpartners as $donorandpartner)
                        <tr>
                            <td>{!! $donorandpartner->id !!}</td>
                            <td>{!! $donorandpartner->title !!}</td>
							<td>{!! $donorandpartner->donationfor !!}</td>
							<td>{!! $donorandpartner->organizationname !!}</td>
							<td>{!! $donorandpartner->description !!}</td>
							<td>{!! $donorandpartner->user_id !!}</td>
							<td>{!! $donorandpartner->views !!}</td>
							<td><img src="{{URL::to('uploads/crudfiles/'.$donorandpartner['image'])}}" style="width: 30px; height: 30px;" alt="Image"></td>
							<td>{!! $donorandpartner->overall !!}</td>
							<td>{!! $donorandpartner->donationammount !!}</td>
                            <td>{!! $donorandpartner->donorandorpartner !!}</td>
                            <td>{!! $donorandpartner->fieldofdonation !!}</td>
                            <td>{!! $donorandpartner->fieldofpartnership !!}</td>
                            <td>{!! $donorandpartner->weblink !!}</td>

                            <td>
                                <a href="{{ route('admin.donorandpartners.show', $donorandpartner->id) }}">
                                    <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view donorandpartner"></i>
                                </a>
                                <a href="{{ route('admin.donorandpartners.edit', $donorandpartner->id) }}">
                                    <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit donorandpartner"></i>
                                </a>
                                <a href="{{ route('admin.donorandpartners.confirm-delete', $donorandpartner->id) }}" data-toggle="modal" data-target="#delete_confirm">
                                    <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete donorandpartner"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>    <!-- row-->
</section>
@stop

{{-- Body Bottom confirm modal --}}
@section('footer_scripts')
<div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    </div>
  </div>
</div>
<script>$(function () {$('body').on('hidden.bs.modal', '.modal', function () {$(this).removeData('bs.modal');});});</script>
@stop
