<div class="modal fade" id="add-action-modal">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title">Add an Action</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      {{-- <p>One fine body&hellip;</p> --}}
                      <form action="{{ route("admin.feedback.storeaction") }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <input id="feedback_master_id" type="text" value="{{ $feedback->id ?? null }}" class="form-control" name="feedback_master_id" autocomplete="title" autofocus required hidden>
                          <div class="form-group row s1a">
                              <label data-placement="bottom" data-toggle="tooltip" title="Type in Full name" for="taken_by" class="col-md-2 col-form-label text-md-left">Actions taken:</label>
                              <div class="col-md-10">
                                  <textarea style="height:30px;" id="actions_taken" type="text" class="form-control" name="actions_taken" autocomplete="actions_taken" autofocus></textarea>
                              </div>
                          </div>
                          {{-- <div class="form-group row s1a">
                        <label data-placement="bottom" data-toggle="tooltip" title="Type in Full name" for="taken_by" class="col-md-2 col-form-label text-md-left">Taken by:</label>
                        <div class="col-md-10">
                            <input id="taken_by" type="text" class="form-control" name="taken_by" autocomplete="title" autofocus required>
                        </div>
                    </div> --}}

                          <div class="form-group row s1a">
                              <label data-placement="bottom" data-toggle="tooltip" title="Type in phone number" class="col-md-2 col-form-label text-md-left">Created by:</label>
                              <div class="col-md-6">
                                  <input type="text" value="{{ Auth::user()->email }}" class="form-control" autocomplete="title" autofocus readonly>
                              </div>
                          </div>

                          <div>
                              <input class="btn btn-primary" type="submit" value="{{ trans('global.save') }}">
                          </div>
                      </form>
                  </div>
                  {{-- <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
              </div>
              <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
      </div>

      <div class="modal fade" id="add-escalation-modal">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title">Escalate</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      {{-- <p>One fine body&hellip;</p> --}}
                      {{-- <form enctype="multipart/form-data" id="escalate-form"> --}}
                         <form action="{{ route("admin.notification.escalate") }}" method="POST" enctype="multipart/form-data" id="escalate-form">
                          @csrf
                          <input id="feedback_master_id" type="text" value="{{ $feedback->id ?? null }}" class="form-control" name="feedback_master_id" autocomplete="title" autofocus required hidden>
                          <div class="form-group row">
                                <label for="roles" class="col-md-2">Emails* </label>
                                <div class="col-md-10">
                                    <select name="email_addresses[]" id="email_addresses" class="form-control select2" multiple="multiple" required style="width:100%;">
                                        {{-- <option> -- select email address -- </option> --}}
                                        @if(isset($contacts))
                                        @foreach($contacts as $contact)
                                        <option value="{{ $contact->id }}">@if($contact->ministry_id != NULL)&lt;{{$contact->ministry->desc}}&gt;@endif {{ $contact->contact_name }} &lt;{{$contact->email_address}}&gt;</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                          </div>
                          <div class="form-group row s1a">
                              <label data-placement="bottom" data-toggle="tooltip" title="Type in Full name" for="taken_by" class="col-md-2 col-form-label text-md-left">Comments: </label>
                              <div class="col-md-10">
                                  <textarea style="height:30px;" id="escalation_comment" type="text" class="form-control" name="escalation_comment" autocomplete="actions_taken" autofocus></textarea>
                              </div>
                          </div>
                          {{-- <div class="form-group row s1a">
                        <label data-placement="bottom" data-toggle="tooltip" title="Type in Full name" for="taken_by" class="col-md-2 col-form-label text-md-left">Taken by:</label>
                        <div class="col-md-10">
                            <input id="taken_by" type="text" class="form-control" name="taken_by" autocomplete="title" autofocus required>
                        </div>
                    </div> --}}

                          <div class="form-group row s1a">
                              <label data-placement="bottom" data-toggle="tooltip" title="Type in phone number" class="col-md-2 col-form-label text-md-left">Created by:</label>
                              <div class="col-md-6">
                                  <input type="text" value="{{ Auth::user()->email }}" class="form-control" name="user_id" autocomplete="title" autofocus readonly>
                              </div>
                          </div>

                          <div>
                              <input id="btn-escalate" class="btn btn-primary" type="submit" value="Submit">
                          </div>
                      </form>
                  </div>
                  {{-- <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
              </div>
              <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
      </div>
