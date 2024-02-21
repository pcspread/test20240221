<?php

namespace App\Http\Controllers;

// Request読込
use Illuminate\Http\Request;
use App\Http\Requests\CreateRequest;
use App\Http\Requests\EditRequest;
// Model読込
use App\Models\Test;
// Carbon読込
use Carbon\Carbon;

class TestController extends Controller
{
    /**
     * view表示
     * テスト一覧
     * @param void
     * @return view
     */
    public function indexTest()
    {
        // テスト情報の取得
        $tests = Test::all();

        return view('list', compact('tests'));
    }

    /**
     * 並び替え処理
     * @param void
     * @return view
     */
    public function sortTest()
    {
        // テスト情報の取得（テスト日順）
        $tests = Test::orderBy('date_at', 'asc')->get();

        return view('list', compact('tests'));
    }

    /**
     * セッション情報の削除
     * @param void
     * @return redirect
     */
    public function destroySession()
    {
        session()->flush();

        return redirect('/');
    }

    /**
     * view表示
     * テスト追加ページ
     * @param void
     * @return view
     */
    public function createTest()
    {
        return view('add');
    }

    /**
     * テスト追加確認処理
     * @param object $request
     * @return view
     */
    public function confirmCreateTest(CreateRequest $request)
    {
        // フォーム情報を取得
        $form = $request->only(['number', 'title', 'content', 'date']);

        // セッションに値を格納
        session()->put([
            'number' => $form['number'],
            'title' => $form['title'],
            'content' => $form['content'],
            'date' => $form['date'],
        ]);

        // 今日の日付を取得
        $today = Carbon::now()->toDateString();

        // 日付の整合性を確認
        if ($form['date'] < $today) {
            return back()->with('comment', '本日以降の日付を選択してください');
        }

        return view('store', compact('form'));
    }

    /**
     * テスト追加処理
     * @param object $request
     * @return view
     */
    public function storeTest(Request $request)
    {
        // フォーム情報を取得
        $form = $request->only(['number', 'title', 'content', 'date']);

        // create処理
        Test::create([
            'number' => $form['number'],
            'title' => $form['title'],
            'content' => $form['content'],
            'date_at' => $form['date']
        ]);

        // セッション情報の削除
        session()->flush();

        return view('complete_add');
    }

    /**
     * view表示
     * テスト編集ページ
     * @param int $id
     * @return view
     */
    public function editTest($id)
    {
        // テスト情報の取得
        $test = Test::find($id);

        return view('edit', compact('test'));
    }

    
    /**
     * テスト編集確認処理
     * @param object $request
     * @param int $id
     * @return view
     */
    public function confirmEditTest(EditRequest $request, $id)
    {
        // フォーム情報を取得
        $form = $request->only(['number', 'title', 'content', 'date']);

        // セッションに値を格納
        session()->put([
            'number2' => $form['number'],
            'title2' => $form['title'],
            'content2' => $form['content'],
            'date2' => $form['date'],
        ]);

        // 今日の日付を取得
        $today = Carbon::now()->toDateString();

        // 日付の整合性を確認
        if ($form['date'] < $today) {
            return back()->with('comment', '本日以降の日付を選択してください');
        }
        
        return view('update', compact('form', 'id'));
    }

    /**
     * テスト更新処理
     * @param object $request
     * @param int $id
     * @return view
     */
    public function updateTest(Request $request, $id)
    {
        // フォーム情報を取得
        $form = $request->only(['number', 'title', 'content', 'date']);

        // create処理
        Test::find($id)->update([
            'number' => $form['number'],
            'title' => $form['title'],
            'content' => $form['content'],
            'date_at' => $form['date']
        ]);

        // セッション情報の削除
        session()->flush();

        return view('complete_edit');
    }

    /**
     * テスト削除処理
     * @param int $id
     * @return view
     */
    public function deleteTest($id)
    {
        // テスト情報の取得
        $test = Test::find($id);

        return view('delete', compact('test'));
    }

    /**
     * テスト削除処理
     * @param int $id
     * @return view
     */
    public function destroyTest($id)
    {
        // delete処理
        Test::find($id)->delete();

        return view('complete_delete');
    }
}
