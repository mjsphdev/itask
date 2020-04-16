@extends('layouts.app')

@section('content')
<div class="board-list-con" style="padding-left: 10px !important; padding-top: 5rem !important; padding-right: 0px; padding-bottom: 0px;">
    <div class="my-fv-board">
        @if(sizeof($starredBoards) > 0)
            <h1 class="board-starred-heading" style="margin-top: 10px;margin-left: 15px;font-weight: 500;font-size: 25px;"><i class="fas fa-star"></i> Starred Boards</h1>
        @endif
        <div class="row boards-col">
            @foreach($starredBoards as $board)
                <div class="col-lg-3" data-boardid="{{ $board->id }}">
                    <a href="{{ url('board/' . $board->id) }}" class="board-main-link-con">
                        <div class="board-link custom-board">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h2 style="font-size: 20px; ">
                                        {{ $board->boardTitle }}
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="my-board">

        {{-- Public boards --}}
        <h1 class="board-starred-heading" style="margin-top: 10px;margin-left: 15px;font-weight: 500;font-size: 25px;"><i class="fas fa-globe"></i> Public Boards</h1>
        <div class="row boards-col">
            @if(sizeof($boards) > 0)
                @foreach($boards as $board)
                    @if($board->boardPrivacyType === 'public')
                        <div class="col-lg-3" data-boardid="{{ $board->id }}">
                            <div class="board-link custom-board" style="cursor: pointer;" data-boardid="{{ $board->id }}">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <h2 style="margin-top: 5px;">
                                            <a href="{{ url('board/' . $board->id) }}" class="board-main-link-con" style="font-size: 20px; color: #154134;">
                                                {{ $board->boardTitle }}
                                            </a>
                                        </h2>
                                    </div>
                                    <div class="col-lg-2">
                                        <p style="margin-top: 12px;">
                                        <a href="#" style="font-size: 20px; {{ ($board->is_starred == 1) ? 'color: #FFEB3B;' : 'color: #b3b3b3;' }}" id="make-fv-board"><i class="fas fa-star"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
            <div class="public-board">
                <div class="create-board">
                    <a data-toggle="modal" href='#create-new-board' class="board-create-link"></a>
                </div>
            </div>
        </div>

        {{-- Section boards --}}
        <h1 class="board-starred-heading" style="margin-top: 10px;margin-left: 15px;font-weight: 500;font-size: 25px;"><i class="fas fa-users"></i> Section Boards</h1>
        <div class="row boards-col">
            @if(sizeof($boards) > 0)
                @foreach($boards as $board)
                    @if($board->boardPrivacyType === Auth::user()->section)
                    <div class="col-lg-3" data-boardid="{{ $board->id }}">
                        <div class="board-link custom-board" style="cursor: pointer;" data-boardid="{{ $board->id }}">
                            <div class="row">
                                <div class="col-lg-10">
                                    <h2 style="margin-top: 5px;">
                                        <a href="{{ url('board/' . $board->id) }}" class="board-main-link-con" style="font-size: 20px; color: #154134;">
                                            {{ $board->boardTitle }}
                                        </a>
                                    </h2>
                                </div>
                                <div class="col-lg-2">
                                    <p style="margin-top: 12px;">
                                       <a href="#" style="font-size: 20px; {{ ($board->is_starred == 1) ? 'color: #FFEB3B;' : 'color: #b3b3b3;' }}" id="make-fv-board"><i class="fas fa-star"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            @endif
            <div class="section-board">
                <div class="create-board">
                    <a data-toggle="modal" href='#create-new-board' class="board-create-link"></a>
                </div>
            </div>
        </div>

        {{-- My Boards --}}
        <h1 class="board-starred-heading" style="margin-top: 10px;margin-left: 15px;font-weight: 500;font-size: 25px;"><i class="fas fa-clipboard-list"></i> My Boards</h1>
        <div class="row boards-col">
            @if(sizeof($boards) > 0)
                @foreach($boards as $board)
                    @if($board->user_id === Auth::user()->id)
                    <div class="col-lg-3" data-boardid="{{ $board->id }}">
                        <div class="board-link custom-board" style="cursor: pointer;" data-boardid="{{ $board->id }}">
                            <div class="row">
                                <div class="col-lg-10">
                                    <h2 style="margin-top: 5px;">
                                        <a href="{{ url('board/' . $board->id) }}" class="board-main-link-con" style="font-size: 20px; color: #154134;">
                                            {{ $board->boardTitle }}
                                        </a>
                                    </h2>
                                </div>
                                <div class="col-lg-2">
                                    <p style="margin-top: 12px;">
                                       <a href="#" style="font-size: 20px; {{ ($board->is_starred == 1) ? 'color: #FFEB3B;' : 'color: #b3b3b3;' }}" id="make-fv-board"><i class="fas fa-star"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            @endif
            <div class="public-board section-board">
                <div class="create-board">
                    <a data-toggle="modal" href='#create-new-board' class="board-create-link"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="create-board">
    <a data-toggle="modal" href='#create-new-board' class="board-create-link">
        <h4>
            <i class="fas fa-plus"></i> Create New Board
        </h4>
    </a>
</div>
@endsection
