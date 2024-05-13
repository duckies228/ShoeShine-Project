<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10 ">
        <h2>{{ config('apps.user.title') }}</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard.index') }}">Dashboard</a>
            </li>
            <li class="active">
                <strong>{{ config('apps.user.Title') }}</strong>
            </li>
        </ol>
    </div>
</div>
<br>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Họ và Tên:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="group">Nhóm Thành Viên:</label>
                            <input type="text" class="form-control" id="group" name="group">
                        </div>
                        <div class="form-group">
                            <label for="dob">Ngày Sinh:</label>
                            <input type="date" class="form-control" id="dob" name="dob">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật Khẩu:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Nhập Lại Mật Khẩu:</label>
                            <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation" required>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="province_id">Thành Phố:</label>
                            <select class="form-control setupSelect2" id="city" name="city" required>
                                <option value="0">Chọn Thành Phố</option>
                                @if (isset($provinces))
                                    @foreach ($provinces as $province)
                                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="district_id">Quận/Huyện:</label>
                            <select class="form-control setupSelect2 " id="district" name="district" required >
                                <option value="">Chọn Quận/Huyện</option>
                                @if (isset($districts))
                                @foreach ($districts as  $district)
                                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                                @endforeach
                            @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ward_id setupSelect2">Xã/Phường/Thị Trấn:</label>
                            <select class="form-control" id="ward" name="ward" required>
                                <option value="">Chọn Xã/Phường/Thị Trấn</option>
                                @if (isset($wards))
                                @foreach ($wards as  $ward)
                                    <option value="{{ $ward->id }}">{{ $ward->name }}</option>
                                @endforeach
                            @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">Địa Chỉ:</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Số Điện Thoại:</label>
                            <input type="text" class="form-control" id="phone" name="phône" required>
                        </div>
                        <div class="form-group">
                            <label for="note">Ghi Chu</label>
                            <input type="text" name="note" class="form-control " id="note">
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm Mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

