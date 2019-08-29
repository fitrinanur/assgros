@extends('layouts.main')
@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item active">Tambah Data Penjualan Barang</li>
</ol>
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Tambah Data Transaksi
            </div>
            <div class="card-block" style="padding: 10px;">
                <form role="form" action="{{ route('transaction.create')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode Transaksi</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="transaction_code" placeholder="Masukan Kode Transaksi">
                    </div>
                    <div class="form-group">
                            <label for="">Barang</label>
                            <select multiple="multiple" id="stuff_id" name="stuff_id[]"
                                class="form-control test">
                                @foreach ($stuffs as $key => $stuff)
                                <option value="{{ $stuff->id }}" @if (old('stuff_id')==$stuff->id)
                                    selected @endif>{{$stuff->stuff_code}} | {{ $stuff->stuff_name }}
                                </option>
                                @endforeach
                            </select>
                            <div class="form-group">
                                <label for="nameInput">Nama Barang</label>
                                <input type="text" name="stuff_name[]" required
                                    class="form-control {{ $errors->has('stuff_name') ? ' is-invalid' : '' }}"
                                    id="stuff_name" readonly>
                                @if ($errors->has('stuff_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('stuff_name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


</div>
@endsection
@push('scripts')
<script type="application/javascript">
    $(document).ready(function () {
        $('.test').select2();
        $('#stuff_id').change(function () {
            if ($('#stuff_id :selected').length > 0) {
                var selectednumbers = [];
                $('#stuff_id :selected').each(function (i, selected) {
                    selectednumbers[i] = $(selected).val();
                });
                $.ajax({
                    url: '{{ url('stuff/stuffs.json')}}',
                    data: {
                        "_token": $('meta[name="csrf-token"]').attr('content'),
                        'selectednumbers': selectednumbers
                    },
                    type: 'POST',
                    success: function (data) {
                        console.log(data);
                        $('#stuff_name').val(data['name']);
                    }
                });
            }
        });
        

    });

</script>

@endpush
