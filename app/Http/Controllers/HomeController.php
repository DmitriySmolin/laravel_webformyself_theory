<?php


namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Support\Facades\DB;

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
//        $data = DB::table('country')->limit(10)->pluck('Name','Code'); // Получить все значения из колонки, где ключ 'Code'
//        $data = DB::table('country')->count();
//        $data = DB::table('country')->max('Population');
//        $data = DB::table('country')->min('Population');
//        $data = DB::table('country')->sum('Population');
//        $data = DB::table('country')-avg('Population');
//        $data = DB::table('city')->select('CountryCode')->distinct()->get();
//        $data = DB::table('city')->select('city.ID', 'city.Name as city_name', 'country.Code', 'country.Name as country_name')->limit(10)->join('country', 'city.CountryCode', '=', 'country.Code')->groupBy('city.ID')->get();
//        dd($data);

        $post = new Post();
        $post->title = 'Статья 2';
//        $post->content = 'Lorem ipsum 1';
        $post->save();
        return view('home', ['res' => 5, 'name' => 'John']);

    }

    public function test(): string
    {
        return __METHOD__;
    }
}
