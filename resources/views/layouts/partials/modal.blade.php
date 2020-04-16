@if (Auth::check())
<div class="modal fade" id="create-new-board">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-center login-header">Create Board</h4>
            </div>
            <div class="modal-body">
                <form action="" method="POST" role="form" class="create-board-form">
                    <div class="form-group" id="boardTitleCon">
                        <label for="title" class="control-label">Title</label>
                        <input type="text" class="form-control user-input" id="boardTitle" name="boardName" placeholder="Title">
                    </div>
                    <div class="form-group" id="boardPrivacyTypeCon">
                        <p><i class="fas fa-user-secret"></i> Privacy</p>
                        <select name="boardPrivacyType" id="boardPrivacyType" class="form-control user-input-select" required="required">
                            <option value="public">Public</option>
                            <option value="{{Auth::user()->section}}">{{Auth::user()->section}}</option>  
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default modal-btn-outline" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary modal-btn" id="save-board">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="see-closed-board">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Closed Boards</h4>
            </div>
            <div class="modal-body">
                <div class="panel panel-default panel-custom">
                    <div class="panel-body">
                        <p>No boards have been closed.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="create-team">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Closed Boards</h4>
            </div>
            <div class="modal-body">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form action="" method="POST" role="form">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control" rows="3" required="required"></textarea>
                            </div>
                            <hr>
                            <div class="form-group">
                                <p>
                                    A teams is a group of boards and people. It helps keep your company, team, or family organized.
                                </p>
                                <p>
                                    <b>Business Class </b>gives your team more security, administrative controls and superpowers.
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="edit-profile-info">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-center">Change profile info</h4>
            </div>
            <div class="modal-body">
                <form action="" method="POST" role="form">
                    <div class="form-group">
                        <label for="title">Full Name</label>
                        <input type="text" class="form-control" id="title">
                    </div>
                    <div class="form-group">
                        <label for="title">User Name</label>
                        <input type="text" class="form-control" id="title">
                    </div>
                    <div class="form-group">
                        <label for="title">Initials</label>
                        <input type="text" class="form-control" id="title">
                    </div>
                    <div class="form-group">
                        <label for="title">Bio</label>
                        <textarea name="" id="input" class="form-control" rows="3" required="required"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="save-change">Save changes</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="card-detail">
    <div class="modal-dialog" style="width: 720px;">
        <div class="modal-content">
            <div role="tabpanel">
                <div class="modal-header" style="border-bottom: none; padding-bottom: 0px !important;">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#general" aria-controls="tab" role="tab" data-toggle="tab" class="tab-link">General</a>
                        </li>
                        <li role="presentation">
                            <a href="#date" aria-controls="tab" role="tab" data-toggle="tab" class="tab-link">Date</a>
                        </li>
                        <li role="presentation">
                            <a href="#subtasks" aria-controls="tab" role="tab" data-toggle="tab" class="tab-link">Subtasks</a>
                        </li>
                        <li role="presentation">
                            <a href="#comments" aria-controls="tab" role="tab" data-toggle="tab" class="tab-link">Comments</a>
                        </li>
                        <li role="presentation">
                            <a href="#attachments" aria-controls="tab" role="tab" data-toggle="tab" class="tab-link">Attach Files</a>
                        </li>
                    </ul>
                </div>
                <div class="modal-body" style="padding-top: 10px; padding-left: 35px; padding-right: 35px;">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="general">
                            <form action="" method="POST" role="form">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <a href="#" data-type="text" class="input-editable editable-click" title="Enter Card Title" id="card_title_editable">Empty</a>
                                </div>           
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <a href="#" data-type="textarea" class="input-editable editable-click" title="Enter Card Description" id="card_description_editable">Empty</a>
                                </div>
                                <div class="form-group">
                                    <label for="">Labels</label>
                                    <input type="text" id="card-tags-input" placeholder="Labels">
                                </div>
                                <div class="form-group">
                                    <label for="">Color</label>
                                    <select id="card_color">
                                        <option value="">Select a color...</option>
                                        <option value="22dd86">Green</option>
                                        <option value="ffee00">Yellow</option>
                                        <option value="ffb259">Orange</option>
                                        <option value="ff5e5e">Red</option>
                                        <option value="d181f0">Purple</option>
                                        <option value="2da7ed">Blue</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="date">
                            <h2 class="tab-heading">Add due date and time</h2>
                            <hr>
                            <form action="" method="POST" role="form" style="height: 65px;">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h1 class="label" style="color: #333333; padding-left: 0px; font-size: 16px;">Created at: </h1>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
                                            <input type='text' class="form-control date-input" id='created-at' aria-describedby="basic-addon1" disabled />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h1 class="label" style="color: #333333; padding-left: 0px; font-size: 16px;">Due Date: </h1>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
                                            <input type='text' class="form-control date-input" data-format="dd-MM-yyyy hh:mm:ss" id='due-date' />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="subtasks">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="tab-heading">Add subtask</h2>
                                    <hr style="margin-top: 5px;">
                                        <div class="input-group">
                                            <input type="text" class="form-control date-input" id="task-description-input" required="required" placeholder="Add a new subtask">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-success btn-add" id="submit-task"><i class="fas fa-plus"></i></button>
                                            </span>
                                        </div>
                                        <div class="row" style="margin-top: 25px; margin-bottom: 19px;">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-style per-tasks-completed" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%;">
                                            <span class="show"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="task-list-con frame" style="margin-top: 12px; max-height: 235px; overflow: scroll;"></div>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="comments">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="tab-heading">Post a Comment: </h2>
                                    <hr style="margin-top: 5px;">
                                    <form  method="POST" role="form" role="form">
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <div class="form-group">
                                                    <textarea name="adasd" id="comment-input" class="form-control" rows="5" required="required"></textarea>
                                                </div>  
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <button class="btn btn-sucess post-btn" id="submit-comment">Submit</button>
                                                </div>  
                                            </div>
                                        </div>
                                    </form>
                                    <div class="detailBox">
                                        <div class="actionBox">
                                            <ul class="commentList frame"></ul>
                                        </div>
                                    </div>       
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="attachments">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="tab-heading">Attach Files</h2>
                                    <hr style="margin-top: 5px;">
                                    <form action="{{ URL::to('upload/file') }}" method="post" enctype="multipart/form-data" id="uploadfile" >
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <div class="form-group">
                                                    <input name="file[]" type="file" multiple required>
                                                </div>  
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />
                                                    <input name="card_ID" type="hidden" value="">

                                                    <button class="btn btn-success post-btn" type="submit">Upload</button>
                                                </div>  
                                            </div>
                                        </div>
                                    </form> 
                                    
                                    {{-- Append files here --}}
                                    <div id="card-shared-files" class="col-md-6">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="modal-footer">                    
                    <button type="button" class="btn btn-default pull-left modal-btn-outline" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary modal-btn" id="save-change">Save Changes</button>
                    <button type="button" class="btn btn-danger modal-btn-delete" id="delete-card"><i class="fas fa-trash"></i> Delete</button>
                </div>            
            </div>
        </div>
    </div>
</div>
@endif