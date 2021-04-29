<?php

/* custom routes generated by CRUD */
Route::group(array('prefix' => 'admin', 'middleware' => ['web','SentinelAdmin']), function () {Route::resource('donorpartners', 'DonorpartnerController');
	Route::get('donorpartners/{id}/delete', array('as' => 'admin.donorpartners.delete', 'uses' => 'DonorpartnerController@getDelete'));
	Route::get('donorpartners/{id}/confirm-delete', array('as' => 'admin.donorpartners.confirm-delete', 'uses' => 'DonorpartnerController@getModalDelete'));
});Route::group(array('prefix' => 'admin', 'middleware' => ['web','SentinelAdmin']), function () {Route::resource('membernetworks', 'MembernetworksController');
	Route::get('membernetworks/{id}/delete', array('as' => 'admin.membernetworks.delete', 'uses' => 'MembernetworksController@getDelete'));
	Route::get('membernetworks/{id}/confirm-delete', array('as' => 'admin.membernetworks.confirm-delete', 'uses' => 'MembernetworksController@getModalDelete'));
});Route::group(array('prefix' => 'admin', 'middleware' => ['web','SentinelAdmin']), function () {Route::resource('ongoingprojects', 'OngoingprojectsController');
	Route::get('ongoingprojects/{id}/delete', array('as' => 'admin.ongoingprojects.delete', 'uses' => 'OngoingprojectsController@getDelete'));
	Route::get('ongoingprojects/{id}/confirm-delete', array('as' => 'admin.ongoingprojects.confirm-delete', 'uses' => 'OngoingprojectsController@getModalDelete'));
});Route::group(array('prefix' => 'admin', 'middleware' => ['web','SentinelAdmin']), function () {Route::resource('employedprojects', 'EmployedprojectsController');
	Route::get('employedprojects/{id}/delete', array('as' => 'admin.employedprojects.delete', 'uses' => 'EmployedprojectsController@getDelete'));
	Route::get('employedprojects/{id}/confirm-delete', array('as' => 'admin.employedprojects.confirm-delete', 'uses' => 'EmployedprojectsController@getModalDelete'));
});Route::group(array('prefix' => 'admin', 'middleware' => ['web','SentinelAdmin']), function () {Route::resource('donorandpartners', 'DonorandpartnersController');
	Route::get('donorandpartners/{id}/delete', array('as' => 'admin.donorandpartners.delete', 'uses' => 'DonorandpartnersController@getDelete'));
	Route::get('donorandpartners/{id}/confirm-delete', array('as' => 'admin.donorandpartners.confirm-delete', 'uses' => 'DonorandpartnersController@getModalDelete'));
});Route::group(array('prefix' => 'admin', 'middleware' => ['web','SentinelAdmin']), function () {Route::resource('programs', 'ProgramsController');
	Route::get('programs/{id}/delete', array('as' => 'admin.programs.delete', 'uses' => 'ProgramsController@getDelete'));
	Route::get('programs/{id}/confirm-delete', array('as' => 'admin.programs.confirm-delete', 'uses' => 'ProgramsController@getModalDelete'));
});Route::group(array('prefix' => 'admin', 'middleware' => ['web','SentinelAdmin']), function () {Route::resource('images', 'ImagesController');
	Route::get('images/{id}/delete', array('as' => 'admin.images.delete', 'uses' => 'ImagesController@getDelete'));
	Route::get('images/{id}/confirm-delete', array('as' => 'admin.images.confirm-delete', 'uses' => 'ImagesController@getModalDelete'));
});Route::group(array('prefix' => 'admin', 'middleware' => ['web','SentinelAdmin']), function () {Route::resource('publications', 'PublicationsController');
	Route::get('publications/{id}/delete', array('as' => 'admin.publications.delete', 'uses' => 'PublicationsController@getDelete'));
	Route::get('publications/{id}/confirm-delete', array('as' => 'admin.publications.confirm-delete', 'uses' => 'PublicationsController@getModalDelete'));
});Route::group(array('prefix' => 'admin', 'middleware' => ['web','SentinelAdmin']), function () {Route::resource('pressreleases', 'PressreleasesController');
	Route::get('pressreleases/{id}/delete', array('as' => 'admin.pressreleases.delete', 'uses' => 'PressreleasesController@getDelete'));
	Route::get('pressreleases/{id}/confirm-delete', array('as' => 'admin.pressreleases.confirm-delete', 'uses' => 'PressreleasesController@getModalDelete'));
});Route::group(array('prefix' => 'admin', 'middleware' => ['web','SentinelAdmin']), function () {Route::resource('boardofadvisors', 'BoardofadvisorsController');
	Route::get('boardofadvisors/{id}/delete', array('as' => 'admin.boardofadvisors.delete', 'uses' => 'BoardofadvisorsController@getDelete'));
	Route::get('boardofadvisors/{id}/confirm-delete', array('as' => 'admin.boardofadvisors.confirm-delete', 'uses' => 'BoardofadvisorsController@getModalDelete'));
});Route::group(array('prefix' => 'admin', 'middleware' => ['web','SentinelAdmin']), function () {Route::resource('casestudies', 'CasestudiesController');
	Route::get('casestudies/{id}/delete', array('as' => 'admin.casestudies.delete', 'uses' => 'CasestudiesController@getDelete'));
	Route::get('casestudies/{id}/confirm-delete', array('as' => 'admin.casestudies.confirm-delete', 'uses' => 'CasestudiesController@getModalDelete'));
});Route::group(array('prefix' => 'admin', 'middleware' => ['web','SentinelAdmin']), function () {Route::resource('vedios', 'VediosController');
	Route::get('vedios/{id}/delete', array('as' => 'admin.vedios.delete', 'uses' => 'VediosController@getDelete'));
	Route::get('vedios/{id}/confirm-delete', array('as' => 'admin.vedios.confirm-delete', 'uses' => 'VediosController@getModalDelete'));
});Route::group(array('prefix' => 'admin', 'middleware' => ['web','SentinelAdmin']), function () {Route::resource('members', 'MembersController');
	Route::get('members/{id}/delete', array('as' => 'admin.members.delete', 'uses' => 'MembersController@getDelete'));
	Route::get('members/{id}/confirm-delete', array('as' => 'admin.members.confirm-delete', 'uses' => 'MembersController@getModalDelete'));
});