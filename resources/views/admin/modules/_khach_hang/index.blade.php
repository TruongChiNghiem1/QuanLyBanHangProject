@extends('admin.master')

@section('content')
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h3 class="m-0">Data table</h3>
                    </div>
                </div>
            </div>
            <div class="white_card_body">
                <div class="QA_section">
                    <div class="white_box_tittle list_header">
                        <h4>Khách hàng</h4>
                        <div class="box_right d-flex lms_block">
                            {{-- <div class="serach_field_2">
                            <div class="search_inner">
                                <form Active="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search content here...">
                                    </div>
                                    <button type="submit"> <i class="ti-search"></i> </button>
                                </form>
                            </div>
                        </div> --}}
                            <div class="add_button ms-2">
                                <a href="{{ route('admin._khach_hang.create') }}" class="btn_1">Thêm khách hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="QA_table mb_30">
                        <table id="my_table" class="table ">
                            <thead>
                                <tr>
                                    <th scope="col">Mã</th>
                                    <th scope="col">Tên khách hàng</th>
                                    <th scope="col">Số điện thoại</th>
                                    <th scope="col">Địa chỉ</th>
                                    {{-- <th scope="col">Công nợ vụ này</th>
                                    <th scope="col">Tổng công nợ</th>--}}
                                    <th scope="col">Chi tiết công nợ</th>
                                    <th scope="col">Lịch sử đặt hàng</th>
                                    <th scope="col">Sửa</th>
                                    <th scope="col">Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($khachHang as $kh)
                                    <tr>
                                        <th scope="row"> <a href="#"
                                                class="question_content">{{ $kh->MaKH }}</a></th>
                                        <td><a href="{{ route('admin._cong_no.show', ['id' => $kh->MaKH]) }}">{{ $kh->TenKhachHang }}</a></td>
                                        <td>{{ $kh->SoDienThoai }}</td>
                                        <td>{{ $kh->DiaChi }}</td>
                                        <td><a href="{{ route('admin._cong_no.show', ['id' => $kh->MaKH]) }}">Chi tiết</a></td>
                                        <td><a href="{{ route('admin._hoa_don.showLichSuDatHang', ['id' => $kh->MaKH] ) }}">Lịch sử</a></td>
                                        <td><a href="{{ route('admin._khach_hang.edit', ['id' => $kh->MaKH]) }}">Sửa</a></td>
                                        <td><a style='color: red;'
                                                href="{{ route('admin._khach_hang.destroy', ['id' => $kh->MaKH]) }}" onclick="return confirm('Bạn có muốn xóa khách hàng này?');">Xóa</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12"></div>
@endsection
