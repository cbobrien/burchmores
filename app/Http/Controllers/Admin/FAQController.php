<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\FAQRequest;
use App\FAQ;
use Illuminate\Http\Request;
use Datatables;
use View;

class FAQController extends Controller {

	public function index()
	{
		return view('admin.faq.index')->with('title', 'FAQs');
	}

	public function create()
	{
		return view('admin.faq.create', compact('faqs'));
	}

	public function store(FAQRequest $request)
	{
		FAQ::create($request->all());
 		return redirect()->route('admin.faq.index')->with('message', 'FAQ created');
	}

	public function edit(FAQ $faq)		
	{
		return View::make('admin.faq.edit')->with('faq', $faq);
	}

	public function update(FAQ $faq, FAQRequest $request)
	{
		$faq->update($request->all());
		return redirect()->route('admin.faq.index', $faq->id)->with('message', 'FAQ updated');
	}

	public function destroy(FAQ $faq)
	{
		$faq->delete();
		return redirect()->route('admin.faq.index')->with('message', 'FAQ deleted');
	}

	public function ajaxAll()
	{

		$faqs = FAQ::select(['id', 'question', 'answer']);
		 
		     return Datatables::of($faqs)
		         ->addColumn('edit', '<a href="/admin/faq/{{$id}}/edit"><i class="fa fa-pencil-square-o"></i></a>')
		         ->addColumn('delete', '<form method="POST" action="/admin/faq/{{$id}}" id="deleteForm{{$id}}" onsubmit="return confirm(\'Are you sure you want to delete this category?\');">
		             <input type="hidden" name="_token" value="{{ csrf_token() }}">
		             <input name="_method" type="hidden" value="DELETE">             
		             <a href="#" onclick="confirmSubmit(\'deleteForm{{$id}}\');"><i class="fa fa-trash-o"></i></a>
		            </form>')
		         ->make(true);		
	}

}
