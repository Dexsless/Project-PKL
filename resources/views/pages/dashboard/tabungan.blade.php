@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 mb-30">
            <div class="card mt-30">
                <div class="card-body">
                    <div class="userDatatable adv-table-table global-shadow border-0 bg-white w-100 adv-table">
                        <div class="table-responsive">
                            <div class="adv-table-table__header">
                                <h4>Daftar Tabungan</h4>
                                <div class="adv-table-table__button">
                                    <div class="">
                                        <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#tabunganModal" style="float: right">Tambah
                                            Tabungan</a>
                                    </div>
                                </div>
                            </div>
                            <div id="filter-form-container"></div>
                            <table class="table mb-0 table-borderless adv-table" data-sorting="true"
                                data-filter-container="#filter-form-container" data-paging-current="1"
                                data-paging-position="right" data-paging-size="10">
                                <thead>
                                    <tr class="userDatatable-header">
                                        <th>
                                            <span class="userDatatable-title">No</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Foto Barang</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Nama Barang</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Jumlah Tabungan</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Nominal Tabungan Saat Ini</span>
                                        </th>
                                        <th data-type="html" data-name='status'>
                                            <span class="userDatatable-title">status</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title float-right">action</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach ($tabungan as $item)
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">{{$no++}}</div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                <img src="{{asset('/images/tabungan/'.$item->foto)}}" style="max-height: 100px; max-widht: 200px;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6>{{$item->nama_barang}}</h6>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                {{$item->jumlah_tabungan}}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                {{$item->nominal}}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content d-inline-block">
                                                @if ($item->jumlah_tabungan <= $item->nominal)
                                                @php
                                                    $item->status = 1
                                                @endphp
                                                @else
                                                @php
                                                $item->status = 0
                                                @endphp
                                                @endif
                                                @if ($item->status)
                                                <span
                                                    class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">Beres
                                                    Cuyy</span>
                                                @else
                                                <span
                                                    class="bg-opacity-danger  color-danger rounded-pill userDatatable-content-status deactive">Belum
                                                    Selesai</span>
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="orderDatatable_actions mb-0 d-flex flex-wrap"
                                                style="justify-content: flex-start">
                                                <li>
                                                    <a href="#" class="view">
                                                        <i class="uil uil-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="remove">
                                                        <img src="{{ asset('assets/img/svg/trash-2.svg') }}"
                                                            alt="trash-2" class="svg"></a>
                                                </li>
                                            </ul>
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
    </div>
</div>
{{-- data modal --}}
<form action="{{ route('tabungan.store',app()->getLocale()) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="tabunganModal" tabindex="-1" aria-labelledby="tabunganModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tabunganModalLabel">Tabungan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Jumlah Tabungan</label>
                        <input type="number" name="jumlah_tabungan" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Masukan Nominal</label>
                        <input type="number" name="nominal" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Masukan Foto</label>
                        <input type="file" name="foto" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
