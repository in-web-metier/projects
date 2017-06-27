<?php
        
// Start Routes for kpi 
Route::get('kpi','KpiController@getIndex');
Route::get('kpi/show/{any?}','KpiController@getShow');
Route::get('kpi/update/{any?}','KpiController@getUpdate');
Route::get('kpi/comboselect','KpiController@getComboselect');
Route::get('kpi/download','KpiController@getDownload');
Route::get('kpi/search','KpiController@getSearch');
Route::get('kpi/export/{any?}','KpiController@getExport');
Route::get('kpi/lookup/{id?}/{id2?}','KpiController@getLookup');
Route::get('kpi/import','KpiController@getImport');
// -- Post Method --
Route::post('kpi/save','KpiController@postSave');
Route::post('kpi/filter','KpiController@postFilter');
Route::post('kpi/delete/{any?}','KpiController@postDelete');
Route::post('kpi/savepublic','KpiController@postSavepublic');
Route::post('kpi/import','KpiController@postImport');
// End Routes for kpi 

                    ?>