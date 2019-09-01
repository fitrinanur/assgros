@extends('layouts.main')
@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">Transaksi</li>
    <li class="breadcrumb-item active">Edit</li>
</ol>
<div class="row">
    <div class="col-lg-8">
        <div class="card-box">
            <form action="{{url('transaction/edit/' . $transaction->id)}}" method="post">
                <div class="form-group">
                    <div class="col-md-12">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="no_faktur">No Faktur</label>
                            <input type="text" id="no_faktur" name="code" class="form-control row"
                                value="{{$transaction->code}}" readonly>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 form-control-label" for="kode_barang">Kode Barang</label>
                            <select id="transaction_stuff_id" name="stuff_kode" class="form-control test">
                                @foreach ($stuffs as $key => $stuff)
                                <option  {{ old('kode_barang')==$stuff->stuff_code ? 'selected' : ''}} value="{{$stuff->stuff_code}}">{{$stuff->stuff_code}} | {{ $stuff->stuff_name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                                <label for="nameInput">Nama Barang</label>
                        <input type="text" name="stuff_name" required value="{{$transaction->nama_barang}}"
                                    class="form-control {{ $errors->has('stuff_name') ? ' is-invalid' : '' }}"
                                    id="stuff_name" readonly>
                                @if ($errors->has('stuff_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('stuff_name') }}</strong>
                                </span>
                                @endif
                            </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-dot-circle-o"></i> Update</button>
                <a href="{{url('transaction') }}" class="btn btn-sm btn-inverse pull-right"><i
                        class="fa fa-dot-circle-o"></i> Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script type="application/javascript">
    $(document).ready(function () {
        $('#transaction_stuff_id').change(function () {
            var stuff_kode = $('#transaction_stuff_id').val();
                console.log(stuff_kode);
                $.ajax({

                    url: '{{ url('/ajax-subcat/stuffs') }}',
                    data: {
                        "_token": $('meta[name="csrf-token"]').attr('content'),
                        'stuff_kode': stuff_kode
                    },
                    type: 'GET',
                    success: function (data) {
                        $('#stuff_name').val(data['name']);
                    }
                });
            });
    });

</script>

@endpush
