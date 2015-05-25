<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Content;
use App\Http\Requests\ContentRequest;

class ContentController extends Controller {


	public function edit($page)
	{
		$content = Content::where('page', '=', $page)->pluck('content');
		return view('admin.content.edit')->with(['title', 'Edit content', 'page' => $page, 'content' => $content]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(ContentRequest $request)
	{
		// dd($request->page);

		$content_page =  Content::where('page', '=', trim($request->page))->first();
		$content_page->content = $request->content;
		$content_page->update();
		return redirect()->route('admin.content.edit', trim($request->page))->with('Title', 'Edit content', 'content', $request->content);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
