<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Portfolio;
use App\Models\Category;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::orderBy('id', 'desc')->get();
        return view('admin.portfolio.index', compact('portfolios'));
    }

    public function create()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('admin.portfolio.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
          'title' => 'required',
          'category_id' => 'required'
        ]);

        $portfolio = new Portfolio;

        $image = $request->file('portfolio_image');
        $slug = Str::slug($request->title, '-');
        if (isset($image)){
            $imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!file_exists('images/portfolio')){
                mkdir('images/portfolio', 777, true);
            }
            $image->move('images/portfolio',$imagename);
            $portfolio->portfolio_image = $imagename;
        }
        $portfolio->category_id = $request->category_id;
        $portfolio->title = $request->title;
        $portfolio->link = $request->link;
        $portfolio->description = $request->description;
        $portfolio->status = $request->status;

        try{
            $portfolio->save();
            return redirect()->route('admin.portfolio.index')->with('message', 'Portfolio Saved Successfully !');
        }catch (\Exception $exception){
            return back()->with('danger', 'Something went wrong !');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
        $categories = Category::orderBy('id', 'desc')->get();
        return view('admin.portfolio.edit', compact('portfolio','categories'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'title' => 'required',
          'category_id' => 'required'
        ]);

        $portfolio = Portfolio::find($id);
        $image = $request->file('portfolio_image');
        $slug = Str::slug($request->title,'-');
        if (isset($image)){
            if ($portfolio->portfolio_image) {
                if (file_exists('images/portfolio/'.$portfolio->portfolio_image)){
                    unlink('images/portfolio/'.$portfolio->portfolio_image);
                }
            }
            $portfolio_imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/portfolio',$portfolio_imagename);
            $portfolio->portfolio_image = $portfolio_imagename;
        }

        $portfolio->category_id = $request->category_id;
        $portfolio->title = $request->title;
        $portfolio->link = $request->link;
        $portfolio->description = $request->description;
        $portfolio->status = $request->status;

        try{
            $portfolio->save();
            return redirect()->route('admin.portfolio.index')->with('message', 'Portfolio Updated Successfully !');
        }catch (\Exception $exception){
            return back()->with('danger', 'Something went wrong !');
        }
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        if ($portfolio->portfolio_image) {
            if (file_exists('images/portfolio/'.$portfolio->portfolio_image)){
                unlink('images/portfolio/'.$portfolio->portfolio_image);
            }
        }
        $portfolio->delete();
        return redirect()->route('admin.portfolio.index')->with('message', 'Portfolio Deleted Successfully !');
    }
}
