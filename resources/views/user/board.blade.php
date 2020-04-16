@extends('layouts.app')

@section('content')
<div class="horizontal-container frame" style="padding-top: 5rem !important;">
    <div class="row horizontal-row list-sortable">
        @foreach($lists as $list)
            <div class="bcategory-list" data-list-id="{{ $list['id'] }}">
                <div class="panel panel-default custom-board-page">
                    <div class="panel-heading" style="border-bottom: 0px; ">
                        <div class="row">
                            <div class="col-lg-10">
                                <h2 class="panel-title board-panel-title" data-pk="{{ $list['id'] }}">{{ $list['list_name'] }}</h2>
                            </div>
                            <div class="col-lg-2">
                                <span data-listid="{{ $list['id'] }}" aria-hidden="true" class="delete-list" style="cursor: pointer; top: 3px; color: #ff324d !important;"> <i class="fas fa-trash"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body card-list-con frame">
                        <ul class="list-group">
                            <div class="card-con" data-listid="{{ $list->id }}">
                                @foreach($cards as $card)
                                    @if($card['list_id'] === $list['id']) 
                                        <li class="list-group-item board-list-items" id="card_{{ $card['id'] }}" data-cardid ="{{ $card['id'] }}" data-toggle="modal" href="#card-detail" @if(!empty($card["card_color"])) style="border-top: 5px solid #{{ $card['card_color'] }};" @endif>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <p style="margin-bottom: 0px;" class="pull-left">{{ $card['card_title'] }}</p>    
                                                    <ul class="card-description-intro list-inline pull-left">
                                                        @if($card["card_description"] !== '')
                                                            <li id="card_description">
                                                                <a href="#" data-placement="bottom" data-toggle="tooltip" title="This card has a description." ><i class="fas fa-align-left"></i></a>
                                                            </li>
                                                        @endif
                                                        @foreach($cardTaskCount as $x) 
                                                            @if($x["id"] === $card['id'])
                                                                @if($x['totalTasks'] > 0)
                                                                    <li id="totalTasks">
                                                                        <a href="#" data-placement="bottom" data-toggle="tooltip" title="This card have {{ $x['totalTasks'] }} tasks." data-totaltask="{{ $x['totalTasks'] }}"><i class="fas fa-tasks"></i></a>
                                                                    </li>
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                        @if($card['totalComments'] > 0) 
                                                            <li id="totalComments">
                                                                <a href="#" data-placement="bottom" data-toggle="tooltip" title="This card have {{ $card['totalComments'] }} comments." data-totalComments="{{ $card['totalComments'] }}"><i class="fas fa-comments"></i></a>
                                                            </li>
                                                        @endif
                                                        @foreach($sharedFiles as $item) 
                                                            @if($item["card_ref"] == $card['id'])
                                                                @if($item["card_ref"] > 0) 
                                                                    <li id="totalAttachments">
                                                                        <a href="#" data-placement="bottom" data-toggle="tooltip" title="This card have attachments."><i class="fas fa-paperclip"></i></a>
                                                                    </li>
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>                                            
                                        </li>
                                    @endif
                                @endforeach
                            </div>
                        </ul>
                        <a href="#" class="show-input-field"><button type="button" class="btn btn-success post-btn"><i class="fas fa-plus"></i></button></a>
                        <form action="" method="POST" role="form" style="display: none;">
                            <div class="form-group" id="dynamic-board-input-con" style="margin-bottom: 8px;">
                                <label for="card-title" class="control-label">Add Card</label>
                                <textarea name="card-title" class="form-control board-input" rows="3"></textarea>
                                <input type="hidden" name="list_id" value="{{ $list->id }}">
                                <input type="hidden" name="board_id" value="{{ $boardDetail['id'] }}">    
                            </div>
                            <div class="form-group" style="margin-bottom: 0px;">
                                <button type="submit" class="btn btn-success post-btn" id="saveCard">Save</button><span class="glyphicon close-input-field" aria-hidden="true"><i class="fas fa-times"></i></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="bcategory-list">
            <div class="panel panel-default custom-board-page">
                <div class="panel-body">
                    <h1 class="panel-title">Add list</h1>
                    <a href="#" class="show-input-field"><button type="button" style="margin-top:5rem;" class="btn btn-success post-btn"><i class="fas fa-plus"></i></button></a>
                    <form action="" class="add-board-list-form" method="POST" role="form" style="display: none;">
                        <div class="form-group" id="dynamic-board-input-con" style="margin-bottom: 8px;">
                            <input type="text" class="form-control board-input" name="list_name" placeholder="Title">
                            <input type="hidden" name="board_id" value="{{ $boardDetail['id'] }}">
                        </div>
                        <div class="form-group" style="margin-bottom: 0px;">
                            <button type="submit" class="btn btn-success post-btn" id="saveListName">Save</button> <span class="glyphicon close-input-field" aria-hidden="true"><i class="fas fa-times"></i></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection