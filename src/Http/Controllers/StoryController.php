<?php


namespace fjerbi\ultimateblog\Http\Controllers;
use Illuminate\Support\Str;
use Auth;
use fjerbi\ultimateblog\Category;
use fjerbi\ultimateblog\Tag;
use fjerbi\ultimateblog\Story;
use fjerbi\ultimateblog\Subscriber;
use Illuminate\Support\Facades\Notification;
use Carbon\Carbon;
use fjerbi\ultimateblog\Notifications\NewStoryNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
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
        $tags = Story::all();
        return view('ultimateblog::stories.index',compact('stories','tags'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        if (!Auth::user()){
            return redirect()->route('ultimateblog.index')
            ->with('warning','You are not logged in');
    }else{

  
        $categories=Category::all();
        $tags=Tag::all();
        return view('ultimateblog::stories.create', compact('categories', 'tags'));
    }
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
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
           // Store File & Get Path
          //IMAGE 
          if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        $slug = Str::slug($request->title);
        $request['slug'] = $slug;

        $story= new Story();
        
        $story->user_id= Auth::id();
        $story->title=$request->title;
        $story->slug=$slug;
        $story->image = $fileNameToStore;
        $story->description=$request->description;
        $story->content=$request->content;
        $file = $request->file('student_photo');

       
        $story->save();

        $story->categories()->attach($request->category);
        $story->tags()->attach($request->tags);
        $subscribers = Subscriber::all();
        foreach ($subscribers as $subscriber)
        {
            Notification::route('mail',$subscriber->email)
                ->notify(new NewStoryNotify($story));
        }
    

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
