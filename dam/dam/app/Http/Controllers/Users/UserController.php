<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //
    public function show()
    {
        $user = Auth::user(); // Lấy thông tin người dùng hiện tại
        $title = 'Thông tin của bạn';
        return view('clients.users.user', compact('user', 'title')); // Truyền dữ liệu đến view
    }

    public function update(UserRequest $request)
    {
        $user = Auth::user(); // Lấy thông tin người dùng hiện tại

        // Xác thực dữ liệu
        $validatedData = $request->validated();

        // Cập nhật thông tin người dùng
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->dia_chi = $validatedData['dia_chi'] ?? $user->dia_chi;
        $user->ngay_sinh = $validatedData['ngay_sinh'];
        $user->so_dien_thoai = $validatedData['so_dien_thoai'];
        $user->gioi_tinh = $validatedData['gioi_tinh'];

        // Kiểm tra xem có file ảnh không
        if ($request->hasFile('hinh_anh')) {
            // Xóa hình ảnh cũ nếu có
            if ($user->hinh_anh) {
                Storage::disk('public')->delete($user->hinh_anh);
            }

            // Lưu hình ảnh mới
            $file = $request->file('hinh_anh');
            $path = $file->store('images', 'public');
            $user->hinh_anh = $path;
        }

        // Lưu thông tin người dùng
        $user->save();

        return redirect()->route('profile')->with('success', 'Thông tin cá nhân đã được cập nhật.');
    }
}
