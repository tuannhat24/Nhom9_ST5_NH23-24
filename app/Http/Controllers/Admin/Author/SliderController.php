<?php

namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SliderController extends Controller
{
    use StorageImageTrait;
    private $slider;
    public function __construct(Slider $slider)
    {
        $this->slider = $slider;
    }

    public function index(Request $request)
    {
        // Lấy từ khóa tìm kiếm từ yêu cầu
        $keyword = $request->input('keyword', '');

        // Nếu có từ khóa, tìm kiếm theo tên danh mục hoặc mô tả
        if (!empty($keyword)) {
            $sliders = $this->slider->where('name', 'LIKE', '%' . $keyword . '%')
                ->orWhere('description', 'LIKE', '%' . $keyword . '%')
                ->latest()->paginate(10); // Thực hiện phân trang
        } else {
            $sliders = $this->slider->latest()->paginate(10); // Trường hợp không có từ khóa, trả về tất cả
        }
        $title = 'DANH SÁCH CÁC DANH MỤC';
        // Trả về view với dữ liệu danh mục đã tìm kiếm
        return view('users/admin/slider/index', compact('sliders', 'keyword', 'title'));
    }


    public function create()
    {
        return view('users/admin/slider/add', [
            'title' => 'ADD',
        ]);
    }

    public function store(Request $request)
    {
        try {
            $dataInsert = [
                'name' => $request->name,
                'description' => $request->description
            ];
            $dataImgSlider = $this->storageImageTrait($request, 'img_path', 'slider');
            if (!empty($dataImgSlider)) {
                $dataInsert['img_name'] = $dataImgSlider['filedName'];
                $dataInsert['img_path'] = $dataImgSlider['filedPath'];
            }
            $this->slider->create($dataInsert);
            return redirect()->route('admin.slider.index')->with('success', 'Slider đã được thêm thành công.');
        } catch (\Exception $exception) {
            Log::error('Lỗi:' . $exception->getMessage() . '---Line :' . $exception->getLine());
        }

    }

    public function edit($id)
    {
        $slider = $this->slider->find($id);
        return view('users/admin/slider/edit', [
            'title' => 'Update Slider',
            'slider' => $slider,
        ]);
    }

    public function update($id, Request $request)
    {
        try {
            DB::beginTransaction();
            $dataSliderUpdate = [
                'name' => $request->name,
                'description' => $request->description
            ];
            $dataUploadImg = $this->storageImageTrait($request, 'img_path', 'slider');
            if (!empty($dataUploadImg)) {
                $dataSliderUpdate['img_name'] = $dataUploadImg['filedName'];
                $dataSliderUpdate['img_path'] = $dataUploadImg['filedPath'];
            }
            $slider = $this->slider->find($id)->update($dataSliderUpdate);
            DB::commit();
            return redirect()->route('admin.slider.index')->with('success', 'Slider đã được update thành công.');

        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message: ' . $exception->getMessage() . '   Liene: ' . $exception->getLine());
        }
    }

    public function delete($id)
    {
        try {
            $this->slider->find($id)->delete();
            return response()->json([
                'code' => 200,
                'message' => 'succes'
            ], status: 200);
        } catch (\Exception $exception) {
            Log::error('Message: ' . $exception->getMessage() . '   Line: ' . $exception->getLine());
            return response()->json([
                'code' => 500,
                'message' => 'fail'
            ], status: 500);
        }
    }
}
