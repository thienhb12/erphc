<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Custommer;
use App\Repositories\AuditRepository as Audit;
use Flash;
use Auth;
use App\User;
use Datatables;
class CustommerController extends Controller
{
    /**
     * @var custommer
    */
    protected $custommer;

    /**
     * @param Role $role
     * @param Permission $permission
     * @param User $user
     */
    public function __construct(Custommer $custommer,User $user)
    {   
        $this->custommer = $custommer;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        Audit::log(Auth::user()->id, trans('admin/custommer/general.audit-log.category'), trans('admin/custommer/general.audit-log.msg-index'));
        
        $page_title       = trans('admin/custommer/general.page.index.title'); // "Admin | Users";
        $page_description = trans('admin/custommer/general.page.index.description'); // "List of users";
       // $custommer        = $this->custommer->select('id','name','address','email','company','phone','enabled','create_by','code')->where('enabled',1)->orderBy('id','DESC')->paginate(10);
        $custommer =  Custommer::select(['id','name','email','created_at','updated_at'])->get();
        pre($custommer);
        return view('admin.custommer.index', compact('custommer', 'page_title', 'page_description'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response 
     */
    public function create()
    {
        Audit::log(Auth::user()->id, trans('admin/custommer/general.audit-log.category'), trans('admin/custommer/general.audit-log.msg-create'));
        
        $page_title       = trans('admin/custommer/general.page.create.title'); // "Admin | Users";
        $page_description = trans('admin/custommer/general.page.create.description'); // "List of users";
        
        return view('admin.custommer.create', compact('custommer', 'page_title', 'page_description'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array('name' => 'required', 'address' => 'required','phone' => 'required','email'=>'required|email'));
    
        $attributes              = $request->all();
        $attributes['create_by'] = Auth::user()->id;

        Audit::log(Auth::user()->id, trans('admin/custommer/general.audit-log.category'), trans('admin/custommer/general.audit-log.msg-index'));
        
        $custommer = $this->custommer->create($attributes);
        $custommer->code =  code_customer($custommer->id);

        $custommer->save();
        Flash::success( trans('admin/custommer/general.status.created'));
        return redirect('/admin/custommer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $custommer        = $this->custommer->find($id);

        Audit::log(Auth::user()->id, trans('admin/custommer/general.audit-log.category'), trans('admin/custommer/general.audit-log.msg-edit', ['name' => $custommer->name]));
        
        $page_title       = trans('admin/custommer/general.page.show.title'); // "Admin | Role | Edit";
        $page_description = trans('admin/custommer/general.page.show.description', ['name' => $custommer->name]); // "Editing custommer";
        return view('admin.custommer.show', compact('custommer', 'page_title', 'page_description'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

        $custommer        = $this->custommer->find($id);
        $page_title       = trans('admin/custommer/general.page.edit.title'); // "Admin | custommer | Edit";
        $page_description = trans('admin/custommer/general.page.edit.description', ['name' => $custommer->name]); // "Editing custommer";

        Audit::log(Auth::user()->id, trans('admin/custommer/general.audit-log.category'), trans('admin/custommer/general.audit-log.msg-edit', ['name' => $custommer->name]));
       
        return view('admin.custommer.edit', compact('custommer', 'page_title', 'page_description'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,array('name' => 'required', 'address' => 'required','phone' => 'required','email'=>'required|email'));
        
        $custommer  = $this->custommer->find($id);
          
        Audit::log(Auth::user()->id, trans('admin/custommer/general.audit-log.category'), trans('admin/custommer/general.audit-log.msg-update', ['name' => $custommer->name]));
        
        $attributes = $request->all();

        $custommer->update($attributes);

        Flash::success( trans('admin/custommer/general.status.updated') ); // 'Role successfully updated');

        return redirect('/admin/custommer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $custommer = $this->custommer->find($id);

        /* if (!$role->isdeletable())
        {
            abort(403);
        }*/

        Audit::log(Auth::user()->id, trans('admin/custommer/general.audit-log.category'), trans('admin/custommer/general.audit-log.msg-destroy', ['name' => $custommer->name]));
        
        $custommer->delete($id);

        Flash::success( trans('admin/custommer/general.status.deleted') ); // 'Custommer successfully deleted');

        return redirect('/admin/custommer');
    }

    /**
     * Delete Confirm
     *
     * @param   int   $id
     * @return  View
    */
    public function getModalDelete($id)
    {
        $error        = null;
        
        $modal_title  = trans('admin/custommer/dialog.delete-confirm.title');
        $modal_cancel = trans('general.button.cancel');
        $modal_ok     = trans('general.button.ok');

        
        $custommer    = $this->custommer->find($id);
        $modal_route  = route('admin.custommer.delete', array('id' => $custommer->id));
        
        $modal_body   = trans('admin/custommer/dialog.delete-confirm.body', ['id' => $custommer->id, 'name' => $custommer->name]);

        return view('modal_confirmation', compact('error', 'modal_route','modal_title', 'modal_body', 'modal_cancel', 'modal_ok'));
    }
    
    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
    */
    public function enable($id)
    {
        $custommer = $this->custommer->find($id);

        Audit::log(Auth::user()->id, trans('admin/custommer/general.audit-log.category'), trans('admin/custommer/general.audit-log.msg-enable', ['name' => $custommer->name]));

        $custommer->enabled = true;
        $custommer->save();

        Flash::success(trans('admin/custommer/general.status.enabled'));

        return redirect('/admin/custommer');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function disable($id)
    {
        //TODO: Should we protect 'admins', 'users'??

        $custommer = $this->custommer->find($id);

        Audit::log(Auth::user()->id, trans('admin/custommer/general.audit-log.category'), trans('admin/custommer/general.audit-log.msg-disabled', ['name' => $custommer->name]));

        $custommer->enabled = false;
        $custommer->save();

        Flash::success(trans('admin/custommer/general.status.disabled'));

        return redirect('/admin/custommer');
    }

     /**
     * @return \Illuminate\View\View
     */
    public function enableSelected(Request $request)
    {
        $chkCustommer = $request->input('chkCustommer');

        Audit::log(Auth::user()->id, trans('admin/custommer/general.audit-log.category'), trans('admin/custommer/general.audit-log.msg-enabled-selected'), $chkCustommer);

        if (isset($chkCustommer))
        {
            foreach ($chkCustommer as $custommer_id)
            {
                $custommer          = $this->custommer->find($custommer_id);
                $custommer->enabled = true;
                $custommer->save();
            }
            Flash::success(trans('admin/custommer/general.status.global-enabled'));
        }
        else
        {
            Flash::warning(trans('admin/custommer/general.status.no-user-selected'));
        }
        return redirect('/admin/custommer');
    }


    /**
     * @return \Illuminate\View\View
     */
    public function disableSelected(Request $request)
    {
        $chkCustommer = $request->input('chkCustommer');

        Audit::log(Auth::user()->id, trans('admin/custommer/general.audit-log.category'), trans('admin/custommer/general.audit-log.msg-disabled-selected'), $chkCustommer);

        if (isset($chkCustommer))
        {
            foreach ($chkCustommer as $custommer_id)
            {
                $custommer          = $this->custommer->find($custommer_id);
                $custommer->enabled = false;
                $custommer->save();
            }
            Flash::success(trans('admin/custommer/general.status.global-disabled'));
        }
        else
        {
            Flash::warning(trans('admin/custommer/general.status.no-user-selected'));
        }
        return redirect('/admin/custommer');
    }

    /**
     * Show a list of all the languages posts formatted for Datatables.
     *
     * @return Datatables JSON
    */
    public function data()
    {
        $custommer =  Custommer::select(['id','name','email','created_at','updated_at'])->get();
        return Datatables::of($custommer)->make(true);
    }
}
