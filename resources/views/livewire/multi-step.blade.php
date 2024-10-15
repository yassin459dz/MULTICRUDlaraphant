<div class="offset-3 col-6">
    <h1 class="d-flex justify-content-center">Multi Step Form</h1>
    <h6 class="d-flex justify-content-center">Step {{$currentstep}} out of {{$totalstep}} </h6>
    @if($currentstep===1)
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: {{ $currentstep / $totalstep * 100 }}%;" aria-valuenow="{{ $currentstep }}" aria-valuemin="0" aria-valuemax="100">
            Step {{$currentstep}} out of {{$totalstep}}
        </div>
    </div>

    <h4 class="d-flex justify-content-center">Name</h4>
    <div class="mb-3">
        <label class="form-label">First Name</label>
        <input wire:model="first_name" type="text" class="form-control">
        @error('first_name')
        <span class="text-danger"> {{$message}} </span>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Last Name</label>
        <input wire:model="last_name"type="text" class="form-control">
        @error('last_name')
        <span class="text-danger"> {{$message}} </span>
        @enderror
    </div>
    @endif

    @if($currentstep===2)
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: {{ $currentstep / $totalstep * 100 }}%;" aria-valuenow="{{ $currentstep }}" aria-valuemin="0" aria-valuemax="100">
            Step {{$currentstep}} out of {{$totalstep}}
        </div>
    </div>

    <h4 class="d-flex justify-content-center">Email</h4>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input wire:model="email"type="email" class="form-control">
        @error('email')
        <span class="text-danger"> {{$message}} </span>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Phone </label>
        <input wire:model="phone"type="text" class="form-control">
        @error('phone')
        <span class="text-danger"> {{$message}} </span>
        @enderror
    </div>
    @endif


    @if($currentstep===3)
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: {{ $currentstep / $totalstep * 100 }}%;" aria-valuenow="{{ $currentstep }}" aria-valuemin="0" aria-valuemax="100">
            Step {{$currentstep}} out of {{$totalstep}}
        </div>
    </div>

    <h4 class="d-flex justify-content-center">Status</h4>

    <div class="mb-3">
        <label class="form-label">Phone </label>
        <select wire:model="status"  class="form-control">
            <option value="" selected>Select Option</option>
            <option value="married" selected>Married</option>
            <option value="single" selected>Single</option>
        </select>
        @error('status')
        <span class="text-danger"> {{$message}} </span>
        @enderror
    </div>

    <div class="mb-3">
        <div class="form-check form-check-inline">
            <label class="form-label">Male</label>
            <input wire:model="gender" class="form-check-input" value="male" type="radio">
        </div>
        <div class="form-check form-check-inline">
            <label class="form-label">Female</label>
            <input wire:model="gender" class="form-check-input" value="female" type="radio">
        </div>
        @error('gender')
        <span class="text-danger"> {{$message}} </span>
        @enderror
    </div>
    @endif
        <!-- Step 4: Review Information -->
        @if($currentstep === 4)
        {{-- <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            Review Details
                        </div>
                        <div class="card-body">
                            <div class="form-group row mt-4">
                                <div class="col-md-6">
                                    <label for="first_name">First Name:</label>
                                </div>
                                <div class="col-md-6">
                                    {{$first_name}}
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-md-6">
                                    <label for="last_name">Last Name:</label>
                                </div>
                                <div class="col-md-6">
                                    {{$last_name}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            Review Details
                        </div>
                        <div class="card-body">

                                <div class="form-group row mt-4">
                                    <div class="col-md-6">
                                        <label for ="lname">Last Name:</label>
                                    </div>
                                    <div class="col-md-6">
                                        {{$first_name}}
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <div class="col-md-6">
                                        <label for ="dob">Date of Birth:</label>
                                    </div>
                                    <div class="col-md-6">
                                        {{$last_name}}
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <div class="col-md-6">
                                        <label for ="address">Address</label>
                                    </div>
                                    <div class="col-md-6">
                                        {{$phone}}
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <div class="col-md-6">
                                        <label for ="email">email</label>
                                    </div>
                                    <div class="col-md-6">
                                        {{$email}}
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <div class="col-md-6">
                                        <label for ="address">conatct no</label>
                                    </div>
                                    <div class="col-md-6">
                                        {{$status}}
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <div class="col-md-6">
                                        <label for ="address">conatct no</label>
                                    </div>
                                    <div class="col-md-6">
                                        {{$gender}}
                                    </div>
                                </div>
                                {{-- <div class="form-group row mt-4">
                                    <div class="col-md-6">
                                        <label for ="image">Image</label>
                                    </div>
                                    <div class="col-md-6">
                                    @if($photoPreview)
                                        <img src="{{ $photoPreview }}" alt="Uploaded Photo" style="max-width: 100px; max-height: 100px;">
                                    @else
                                        No photo uploaded
                                    @endif
                                    </div>
                                </div> --}}

                                <button class="btn btn-success  btn-sm" wire:click="back(2)">Back</button>
                                <button class="btn btn-primary  btn-sm" wire:click="submitdetails">Submit</button>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
        @endif

    @if($currentstep>1)
    <button wire:click="decrementstep" class="btn btn-danger">Back</button>
    @endif

    @if($currentstep<$totalstep)
    <button wire:click="incrementstep" class="btn btn-primary">Next</button>
    @endif

    {{-- @if($currentstep===$totalstep)
    <button wire:click="submit" class="btn btn-success">submit</button>
    @endif --}}

    @if($currentstep === $totalstep)
    <button wire:click="submit" class="btn btn-success" @if($errors->any()) disabled @endif>Submit</button>
    @endif


</div>
