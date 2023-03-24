<x-layout>
    <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
                >
                <header class="text-center">
                    <h2 class="text-2xl font-bold uppercase mb-1">
                        Edit Job
                    </h2>
                    <p class="mb-4">Edit: {{$listing->title}}</p>
                </header>
                <form method="POST" action="/listings/{{$listing->id}}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-company">Company</label>
                      <input type="text" class="form-control" id="basic-default-company" name="company" placeholder="Company" 
                      value="{{$listing->company}}" />
                      @error('company')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-location">Location</label>
                      <input type="text" class="form-control" id="basic-default-location" name="location" placeholder="Belgrade" 
                      value="{{$listing->location}}" />
                      @error('location')
                      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                    </div>
                    <div class="mb-3">

                      <label class="form-label" for="basic-default-email">Website</label>
                      
                        <input
                          type="text"
                          id="basic-default-url"
                          class="form-control"
                          placeholder="www.example.com"
                          aria-label="www.example.com"
                          aria-describedby="basic-default-email2"
                          name="website"
                          value="{{$listing->website}}"
                        />
                        
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-job">Job link</label>
                      
                        <input
                          type="text"
                          id="basic-default-jobs"
                          class="form-control"
                          placeholder="www.example.com/jobs"
                          aria-label="www.example.com"
                          aria-describedby="basic-default-email2"
                          name="job_link"
                          value="{{$listing->job_link}}"
                        />
                        @error('job link')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                      @enderror
                        
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-phone">Tehnologies</label>
                      <input
                        type="text"
                        id="basic-default-Tehnologies"
                        class="form-control phone-mask"
                        placeholder="Laravel, Backend, Postres, etc"
                        name="tehnologies"
                        value="{{$listing->tehnologies}}"
                      />
                      @error('tehnologies')
                      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-message">Description</label>
                      <textarea
                        id="basic-default-message"
                        class="form-control"
                        placeholder="Include tasks, requirements, salary, etc"
                        name="description"
                        
                      >{{$listing->description}}</textarea>
                      @error('description')
                      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                      @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-message">Comment</label>
                        <textarea
                          id="basic-default-message"
                          class="form-control"
                          placeholder="Include tasks, requirements, salary, etc"
                          name="comment"
                          
                        >{{$listing->comment}}</textarea>
                        
                      </div>
                      <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" aria-expanded="false" name="status" id="status" style="width:110px">
                          <option selected="active" value="active">Active</option>
                          <option value="rejected">Rejected</option>
                          
                        </select>
                      </div>
                    <button type="submit" class="btn bg-black btn-primary">Update</button>
                  </form>
                </div>
              </div>
            </div>
        </form>
     </div>
</x-layout>