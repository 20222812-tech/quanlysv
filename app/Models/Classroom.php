<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id',
        'ma_lop',
        'ten_lop',
        'si_so',
        'khoa_hoc',
        'nganh',
        'giao_vien',
        'ghi_chu',
    ];

    public static function mockData(): array
    {
        return [
            [
                'id' => 1,
                'ma_lop' => 'LH001',
                'ten_lop' => 'Lập trình Web 1',
                'si_so' => 32,
                'khoa_hoc' => '2025 - 2026',
                'nganh' => 'Công nghệ thông tin',
                'giao_vien' => 'Nguyễn Văn A',
                'ghi_chu' => 'Lớp buổi sáng',
            ],
            [
                'id' => 2,
                'ma_lop' => 'LH002',
                'ten_lop' => 'Cơ sở dữ liệu',
                'si_so' => 28,
                'khoa_hoc' => '2025 - 2026',
                'nganh' => 'Hệ thống thông tin',
                'giao_vien' => 'Trần Thị B',
                'ghi_chu' => 'Lớp chuyên ngành',
            ],
            [
                'id' => 3,
                'ma_lop' => 'LH003',
                'ten_lop' => 'Mạng máy tính',
                'si_so' => 30,
                'khoa_hoc' => '2025 - 2026',
                'nganh' => 'Mạng máy tính',
                'giao_vien' => 'Lê Văn C',
                'ghi_chu' => 'Lớp tối thứ 3',
            ],
            [
                'id' => 4,
                'ma_lop' => 'LH004',
                'ten_lop' => 'Trí tuệ nhân tạo',
                'si_so' => 26,
                'khoa_hoc' => '2025 - 2026',
                'nganh' => 'Trí tuệ nhân tạo',
                'giao_vien' => 'Phạm Thị D',
                'ghi_chu' => 'Lớp có đồ án',
            ],
            [
                'id' => 5,
                'ma_lop' => 'LH005',
                'ten_lop' => 'Phát triển ứng dụng di động',
                'si_so' => 22,
                'khoa_hoc' => '2025 - 2026',
                'nganh' => 'Kỹ thuật phần mềm',
                'giao_vien' => 'Hoàng Văn E',
                'ghi_chu' => 'Lớp thực hành',
            ],
        ];
    }
}
