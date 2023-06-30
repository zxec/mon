@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-header">
                    <div class="row px-2 d-flex justify-content-between">
                        <div class="col">
                            {{-- <div class="row">г. {{ $user->city->name }}</div> --}}
                            <div class="row mb-0"><strong class="p-0">г. {{ $user->city->name }}</strong></div>
                            <div class="row">{{ $user->fio }}</div>
                        </div>
                        <div class="col">
                            {{-- <a href="#">Выйти</a> --}}
                            <a class="" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Выйти') }}
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="col">
                        {{-- <div class="row px-2">Мои адреса</div> --}}
                        <div class="row mb-0"><strong>Мои адреса</strong></div>
                        <div class="row mt-3 px-2">
                            <a href="#" class="btn btn-success w-50 p-1">Добавить</a>
                            <a href="#" class="btn btn-primary w-50 p-1">Добавить из заявки</a>
                        </div>

                        <div class="col">
                            <div class="card mt-2" style="background-color: #d5d5d587">
                                <div class="card-body p-2">
                                  <h6 class="card-subtitle mb-2 text-body-secondary">16 мая 2023</h6>
                                  <div class="mb-0">{{ $user->city->name }} Комсомольский пр-т. д 143</div>
                                </div>
                              </div>
                              <div class="card mt-2" style="background-color: #d5d5d587">
                                <div class="card-body p-2">
                                  <h6 class="card-subtitle mb-2 text-body-secondary">16 мая 2023</h6>
                                  <div class="mb-0">{{ $user->city->name }} Комсомольский пр-т. д 143</div>
                                </div>
                              </div>
                              <div class="card mt-2" style="background-color: #d5d5d587">
                                <div class="card-body p-2">
                                  <h6 class="card-subtitle mb-2 text-body-secondary">16 мая 2023</h6>
                                  <div class="mb-0">{{ $user->city->name }} Комсомольский пр-т. д 143</div>
                                </div>
                              </div>
                            {{-- @foreach ($user-> as ) --}}
                                {{-- <div class="col mt-2">
                                    <div class="row">16 мая 2023</div>
                                    <div class="row">{{ $user->city->name }} Комсомольский пр-т. д 143</div>
                                </div>
                                <div class="col mt-2">
                                    <div class="row">16 мая 2023</div>
                                    <div class="row">{{ $user->city->name }} Комсомольский пр-т. д 143</div>
                                </div>
                                <div class="col mt-2">
                                    <div class="row">16 мая 2023</div>
                                    <div class="row">{{ $user->city->name }} Комсомольский пр-т. д 143</div>
                                </div>
                                <div class="col mt-2">
                                    <div class="row">16 мая 2023</div>
                                    <div class="row">{{ $user->city->name }} Комсомольский пр-т. д 143</div>
                                </div> --}}
                            {{-- @endforeach --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
