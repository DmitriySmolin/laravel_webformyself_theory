<?php


namespace App\Http\Controllers;


use App\Models\City;
use App\Models\Country;
use App\Models\Post;
use App\Models\Rubric;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
//        return 'Hello, World!';
//        dump($_ENV['MY_SETTING']);
//        dump(env('MY_SETTING2'));
//        dump(config('app.timezone'));
//        dump(config('database.connections.mysql.database'));

        /*SQL запросы*/
//        DB::insert("INSERT INTO posts (title,content) VALUES (?,?)", ['Статья 5', 'Lorem ipsum 5']);
//        DB::insert("INSERT INTO posts (title,content) VALUES (:title,:content)", ['title' => 'Статья 5', 'content' => 'Lorem ipsum 5']);

//        $posts = DB::select('SELECT * FROM posts');
//        DB::update('UPDATE posts SET created_at = ?, updated_at = ? WHERE created_at is NULL OR updated_at is NULL', [now(), now()]);
//        DB::delete('DELETE FROM posts WHERE id=?', [6]);
//        DB::delete('DELETE FROM posts WHERE id=:id', ['id' => 6]);

//        DB::beginTransaction();
//        try {
//            DB::update('UPDATE posts SET created_at = ? WHERE created_at is NULL', [now()]);
//            DB::update('UPDATE posts SET updated_at = ? WHERE updated_at is NULL', [now()]);
//            DB::commit();
//        } catch (\Exception $e) {
//            DB::rollBack();
//            echo $e->getMessage();
//        }
//        $posts = DB::select('SELECT * FROM posts WHERE id > :id', ['id' => 2]);
//        return $posts;

        /*Query Builder*/
//        $data = DB::table('country')->get();
//        $data = DB::table('country')->limit(5)->get();
//        $data = DB::table('country')->select('Code','Name')->limit(5)->get();
//        $data = DB::table('country')->select('Code', 'Name')->first();
//        $data = DB::table('country')->select('Code', 'Name')->orderBy('Code', 'desc')->first();
//        $data = DB::table('city')->select('ID', 'Name')->find(2);
//        $data = DB::table('city')->select('ID', 'Name')->where('id', '=', 2)->get();
//        $data = DB::table('city')->select('ID', 'Name')->where('id', '<', 5)->get();
//        $data = DB::table('city')->select('ID', 'Name')->where(
//            [
//                ['id', '>', 1],
//                ['id', '<', 5]
//            ]
//        )->get();
//        $data = DB::table('city')->where('id', '<', 5)->value('Name'); // Получить одно строковое значение из колонки
//        $data = DB::table('country')->limit(10)->pluck('Name'); // Получить все значения из колонки
//        $data = DB::table('country')->limit(10)->pluck('Name','Code'); // Получить все значения из колонки в формате Code => Name, где ключ 'Code'
//        $data = DB::table('country')->count();
//        $data = DB::table('country')->max('Population');
//        $data = DB::table('country')->min('Population');
//        $data = DB::table('country')->sum('Population');
//        $data = DB::table('country')-avg('Population');
//        $data = DB::table('city')->select('CountryCode')->distinct()->get();
//        $data = DB::table('city')->select('city.ID', 'city.Name as city_name', 'country.Code', 'country.Name as country_name')->limit(10)->join('country', 'city.CountryCode', '=', 'country.Code')->groupBy('city.ID')->get();
//        dd($data);

//        $post = new Post();
//        $post->title = 'Статья 2';
////        $post->content = 'Lorem ipsum 1';
//        $post->save();

//        $data = Country::all();
//        $data = Country::limit(5)->get(); //phpstorm не видит методы. В модели Country был добавлен @mixin Builder для подсказок
//        $data = Country::query()->limit(5)->get(); // данный способ работает с подсказками сразу же
//        $data = Country::where('code','<','ALB')->select('Code','Name')->limit(2)->offset(1)->get();
//        $data = City::find(5);
//        $data = Country::find('AGO');
//        dd($data);

//        $post = new Post();
//        $post->title = 'Post 2';
//        $post->content = 'Lorem ipsum 2';
//        $post->save();

//        Post::create(['title' => 'Post 6', 'content' => 'Lorem 6']);0 // массовое заполнение полей00

//        $post = new Post();
//        $post->fill(['title' => 'Post 8', 'content' => 'Lorem 8']);
//        $post->save();

//        $post = Post::find(6);
//        $post->content = 'Lorem ipsum 6';
//        $post->save();

//        Post::where('id', '>', 3)->update(['updated_at' => NOW()]);

//        $post = Post::find(6);
//        $post->delete();

//        Post::destroy(11);
//        Post::destroy([4,5]);
//        Post::destroy(4, 5);

        /* Связи моделей - One to one */
//        $post = Post::find(3);
//        dd($post);
//        dd($post->title, $post->rubric->title);

//        $rubric = Rubric::find(3);
//        dd($rubric->title, $rubric->post->title);

        /* Связи моделей - One to Many */
//        №1
//        $rubric = Rubric::find(1);
//        dd($rubric->posts);

//        №2
//        $posts = Rubric::find(1)->posts;
//        dd($posts);

//        $posts = Rubric::find(1)->posts()->select('title')->where('id', '>', 2)->get();
//        dd($posts);

        /* Ленивая и жадная загрузка данных */
//        $posts = Post::where('id', '>', 1)->get(); // ленивая загрузка рубрик
//        $posts = Post::with('rubric')->where('id', '>', 1)->get(); // жадная загрузка  рубрик
//        foreach ($posts as $post) {
//            dump($post->title, $post->rubric->title);
//        }

        /* Связи моделей - Many to Many */
//        $post = Post::find(11);
//        dump($post->title);
//        foreach ($post->tags as $tag) {
//            dump($tag->title);
//        }
///
//        $tag = Tag::find(2);
//        dump($tag->title);
//        foreach ($tag->posts as $post) {
//            dump($post->title);
//        }

//        return view('home', ['res' => 5, 'name' => 'John']);

        /* Шаблоны Blade. Часть 2 */
//        $title = 'Home Page!';
//        $h1 = '<h1>home page</h1>';
//        $data1 = range(1, 20);
//        $data2 = [
//            'title' => 'Title',
//            'content' => 'Content',
//            'keywords' => 'Keywords'
//        ];
//        return view('home', compact('title', 'h1', 'data1', 'data2'));

        /* Шаблоны Blade. Часть 4 */
        $title = 'Home Page!';
        $posts = Post::orderBy('id', 'desc')->get();
        return view('home', compact('title', 'posts'));
    }

    public function create()
    {
        $title = 'Create Post';
        $rubrics = Rubric::pluck('title','id')->all();
        return view('create', compact('title','rubrics'));
    }

    public function store( Request $request)
    {
//        dump($request->input('title'));
//        dump($request->input('content'));
//        dd($request->input('rubric_id'));
//        dd($request->all());
        Post::create($request->all());
        return redirect()->route('home');
    }

    public function test(): string
    {
        return __METHOD__;
    }
}
