<?php


namespace fjerbi\ultimateblog\Http\Controllers;
use Str;
use Auth;
use fjerbi\ultimateblog\Category;
use fjerbi\ultimateblog\Tag;
use fjerbi\ultimateblog\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories = Story::latest()->paginate(5);

        return view('ultimateblog::stories.index',compact('stories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        $tags=Tag::all();
        return view('ultimateblog::stories.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'tags' => 'required',
            'content' => 'required',

        ]);
        $slug = Str::slug($request->title);
        $request['slug'] = $slug;

        $story= new Story();
       $story->user_id= Auth::id();
$story->title=$request->title;
$story->slug=$slug;
$story->description=$request->description;
$story->content=$request->content;
$story->save();

        $story->categories()->attach($request->category);
        $story->tags()->attach($request->tags);
        return redirect()->route('stories.index')
                        ->with('success','Story created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function show(Story $story)
    {
        return view('ultimateblog::stories.show',compact('story'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function edit(Story $story)
    {
        return view('ultimateblog::stories.edit',compact('story'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Story $story)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'tags' => 'required',
            'content' => 'required',

        ]);
        $story->update($request->all());

        return redirect()->route('stories.index')
                        ->with('success','Story updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function destroy(Story $story)
    {

        $story->delete();

        return redirect()->route('stories.index')
                        ->with('success','Story deleted successfully');
    }
    public function details($slug)
    {
        $story = Story::where('slug',$slug)->approved()->published()->first();

        $blogKey = 'blog_' . $story->id;

        if (!Session::has($blogKey)) {
            $story->increment('view_count');
            Session::put($blogKey,1);
        }
        $randomstories = Story::approved()->published()->take(3)->inRandomOrder()->get();
        return view('ultimateblog::story',compact('story','randomstories'));

    }

    public function storyByCategory($slug)
    {
        $category = Category::where('slug',$slug)->first();
        $stories = $category->stories()->approved()->published()->get();
        return view('ultimateblog::category',compact('category','stories'));
    }

    public function storyByTag($slug)
    {
        $tag = Tag::where('slug',$slug)->first();
        $stories = $tag->stories()->approved()->published()->get();
        return view('ultimateblog::tag',compact('tag','stories'));
    }

}
