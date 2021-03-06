@extends('master-template.master')

@section('title')
    Create Student
@endsection
@section('content')
<div class="md:pl-16 pt-16">
    <div class="col-span-12 mt-8 mx-10">
        <form action="{{ route('students.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="bg-white shadow rounded-lg p-6">
                <div class="grid lg:grid-cols-2 {{ count($errors) > 0 ? 'gap-10' : '' }} gap-6 mt-5">
                    <div class="border-2 focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1 @error('student_exam_number') border-2 border-red-400 @enderror">
                        <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                            <p>
                                <label for="student_exam_number" class="bg-white text-gray-600 px-1">Student Exam Number <strong class="text-red-500">*</strong></label>
                            </p>
                        </div>
                        <p>
                        <input id="student_exam_number" name="student_exam_number" autocomplete="true" tabindex="0" type="text" class="py-1 px-1 outline-none block h-full w-full" value="{{ old('student_exam_number') }}">
                        </p>
                        @error('student_exam_number')
                        <div class="absolute">
                            <p class="text-red-400 mt-3 -ml-1 font-medium">
                                {{ $message }}
                            </p>
                        </div>
                        @enderror
                    </div>
                    
                    <div class="border-2 focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1 @error('first_name') border-2 border-red-400 @enderror">
                        <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                            <p>
                                <label for="name" class="bg-white text-gray-600 px-1">First name <strong class="text-red-500">*</strong></label>
                            </p>
                        </div>
                        <p>
                        <input id="name" name="first_name" autocomplete="true" tabindex="0" type="text" class="py-1 px-1 outline-none block h-full w-full" value="{{ old('first_name') }}">
                        </p>
                        @error('first_name')
                        <div class="absolute">
                            <p class="text-red-400 mt-3 -ml-1 font-medium">
                                {{ $message }}
                            </p>
                        </div>
                        @enderror
                    </div>
                    
                    <div class="border-2 focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1 @error('last_name') border-2 border-red-400 @enderror">
                        <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                            <p>
                                <label for="lastname" class="bg-white text-gray-600 px-1">Last name <strong class="text-red-500">*</strong></label>
                            </p>
                        </div>
                        <p>
                        <input id="lastname" name="last_name" autocomplete="true" tabindex="0" type="text" class="py-1 px-1 outline-none block h-full w-full" value="{{ old('last_name') }}">
                        </p>
                        @error('last_name')
                        <div class="absolute">
                            <p class="text-red-400 mt-3 -ml-1 font-medium">
                                {{ $message }}
                            </p>
                        </div>
                        @enderror
                    </div>
                    
                    <div class="border-2 focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1 @error('email') border-2 border-red-400 @enderror">
                        <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                            <p>
                                <label for="username" class="bg-white text-gray-600 px-1">Email <strong class="text-red-500">*</strong></label>
                            </p>
                        </div>
                        <p>
                        <input id="username" name="email" autocomplete="true" tabindex="0" type="text" class="py-1 px-1 outline-none block h-full w-full" value="{{ old('email') }}">
                        </p>
                        @error('email')
                        <div class="absolute">
                            <p class="text-red-400 mt-3 -ml-1 font-medium">
                                {{ $message }}
                            </p>
                        </div>
                        @enderror
                    </div>
                    
                    <div class="border-2 focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1 @error('address') border-2 border-red-400 @enderror">
                        <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                            <p>
                                <label for="address" class="bg-white text-gray-600 px-1">Address <strong class="text-red-500">*</strong></label>
                            </p>
                        </div>
                        <p>
                        <input id="address" name="address" autocomplete="true" tabindex="0" type="text" class="py-1 px-1 outline-none block h-full w-full" value="{{ old('address') }}">
                        </p>
                        @error('address')
                        <div class="absolute">
                            <p class="text-red-400 mt-3 -ml-1 font-medium">
                                {{ $message }}
                            </p>
                        </div>
                        @enderror
                    </div>
                    
                    <div class="border-2 focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                        <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                            <p>
                                <label for="zip_code" class="bg-white text-gray-600 px-1">Zip Code</strong></label>
                            </p>
                        </div>
                        <p>
                        <input id="zip_code" name="zip_code" autocomplete="true" tabindex="0" type="text" class="py-1 px-1 outline-none block h-full w-full" value="{{ old('zip_code') }}">
                        </p>
                    </div>
                    
                    <div class="border-2 focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1 @error('gender') border-2 border-red-400 @enderror">
                        <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                            <p>
                                <label for="gender" class="bg-white text-gray-600 px-1">Gender <strong class="text-red-500">*</strong></label>
                            </p>
                        </div>
                        <p>
                            <select name="gender" class="py-1 px-1 outline-none block h-full w-full bg-white">
                                <option value="1">Male</option>
                                <option value="0">Female</option>
                            </select>
                        </p>
                    </div>
                    
                    <div class="border-2 focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1 @error('phone') border-2 border-red-400 @enderror">
                        <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                            <p>
                                <label for="phone" class="bg-white text-gray-600 px-1">Phone <strong class="text-red-500">*</strong></label>
                            </p>
                        </div>
                        <p>
                        <input id="phone" name="phone" autocomplete="true" tabindex="0" type="text" class="py-1 px-1 outline-none block h-full w-full" value="{{ old('phone') }}">
                        </p>
                        @error('phone')
                        <div class="absolute">
                            <p class="text-red-400 mt-3 -ml-1 font-medium">
                                {{ $message }}
                            </p>
                        </div>
                        @enderror
                    </div>
                    
                    <div class="border-2 focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1 @error('class') border-2 border-red-400 @enderror">
                        <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                            <p>
                                <label for="class" class="bg-white text-gray-600 px-1">Class <strong class="text-red-500">*</strong></label>
                            </p>
                        </div>
                        <p>
                        <input id="class" name="class" autocomplete="true" tabindex="0" type="text" class="py-1 px-1 outline-none block h-full w-full" value="{{ old('class') }}">
                        </p>
                        @error('class')
                        <div class="absolute">
                            <p class="text-red-400 mt-3 -ml-1 font-medium">
                                {{ $message }}
                            </p>
                        </div>
                        @enderror
                    </div>
                    
                    <div class="border-2 focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1 @error('majors') border-2 border-red-400 @enderror">
                        <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                            <p>
                                <label for="majors" class="bg-white text-gray-600 px-1">Majors <strong class="text-red-500">*</strong></label>
                            </p>
                        </div>
                        <p>
                        <input id="majors" name="majors" autocomplete="true" tabindex="0" type="text" class="py-1 px-1 outline-none block h-full w-full" value="{{ old('majors') }}">
                        </p>
                        @error('majors')
                        <div class="absolute">
                            <p class="text-red-400 mt-3 -ml-1 font-medium">
                                {{ $message }}
                            </p>
                        </div>
                        @enderror
                    </div>
                    
                    <div class="border-2 focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1 @error('age') border-2 border-red-400 @enderror">
                        <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                            <p>
                                <label for="age" class="bg-white text-gray-600 px-1">Age <strong class="text-red-500">*</strong></label>
                            </p>
                        </div>
                        <p>
                        <input id="age" name="age" autocomplete="true" tabindex="0" type="text" class="py-1 px-1 outline-none block h-full w-full" value="{{ old('age') }}">
                        </p>
                        @error('age')
                        <div class="absolute">
                            <p class="text-red-400 mt-3 -ml-1 font-medium">
                                {{ $message }}
                            </p>
                        </div>
                        @enderror
                    </div>
                    
                    <div class="border-2 focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                        <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                            <p>
                                <label for="hobby" class="bg-white text-gray-600 px-1">Hobby</strong></label>
                            </p>
                        </div>
                        <p>
                        <input id="hobby" name="hobby" autocomplete="true" tabindex="0" type="text" class="py-1 px-1 outline-none block h-full w-full" value="{{ old('hobby') }}">
                        </p>
                    </div>
                    
                    <div class="border-2 focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1 @error('place_of_birth') border-2 border-red-400 @enderror">
                        <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                            <p>
                                <label for="place_of_birth" class="bg-white text-gray-600 px-1">Place of Birth <strong class="text-red-500">*</strong></label>
                            </p>
                        </div>
                        <p>
                        <input id="place_of_birth" name="place_of_birth" autocomplete="true" tabindex="0" type="text" class="py-1 px-1 outline-none block h-full w-full" value="{{ old('place_of_birth') }}">
                        </p>
                        @error('place_of_birth')
                        <div class="absolute">
                            <p class="text-red-400 mt-4 -ml-1 font-medium">
                                {{ $message }}
                            </p>
                        </div>
                        @enderror
                    </div>
                    
                    <div class="border-2 focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1 @error('date_of_birth') border-2 border-red-400 @enderror">
                        <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                            <p>
                                <label for="date_of_birth" class="bg-white text-gray-600 px-1">Date of Birth <strong class="text-red-500">*</strong></label>
                            </p>
                        </div>
                        <p>
                        <input id="date_of_birth" name="date_of_birth" autocomplete="true" tabindex="0" type="date" class="py-1 px-1 outline-none block h-full w-full" value="{{ old('date_of_birth') }}">
                        </p>
                        @error('date_of_birth')
                        <div class="absolute">
                            <p class="text-red-400 mt-3 -ml-1 font-medium">
                                {{ $message }}
                            </p>
                        </div>
                        @enderror
                    </div>
                    
                    <div class="border-2 focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1 @error('photo') border-2 border-red-400 @enderror">
                        <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                            <p>
                                <label for="date_of_birth" class="bg-white text-gray-600 px-1">Photo <strong class="text-red-500">*</strong></label>
                            </p>
                        </div>
                        <p>
                            {{-- <div class="mt-5 mb-5 mx-auto" id="image-preview">
                                <label for="image-upload" id="image-label">Choose File</label>
                                <input type="file" name="book_cover" id="image-upload"/>
                            </div> --}}
                            <div class="image-upload shadow-sm relative flex flex-col items-center justify-center rounded-md py-8 mt-3">
                                <div class="image-upload__icon w-12 h-12 rounded-full flex items-center justify-center"> <i data-feather="image" class="w-5 h-5"></i> </div>
                                <div class="image-upload__info mt-2">Choose your group profile photo</div>
                                <input type="file" name="photo" class="w-full h-full top-0 left-0 absolute opacity-0" id="image-upload">
                            </div>
                        </p>
                        @error('photo')
                        <div class="absolute">
                            <p class="text-red-400 mt-3 -ml-1 font-medium">
                                {{ $message }}
                            </p>
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="flex mt-6 pt-3">
                    <a href="{{ route('students.index') }}" class="btn border-blue-500 border text-blue-500  hover:bg-blue-700 hover:text-white focus:outline-none mb-5 mr-5"><i data-feather="arrow-left" class="w-5 h-5 mx-auto mr-1"></i> Back</a>
                    <button class="btn border-blue-500 border text-blue-500  hover:bg-blue-700 hover:text-white focus:outline-none mb-5 mr-5">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('link')
<link rel="stylesheet" href="{{ asset('dist/css/image-uploader.css') }}">    
@endpush

@push('script')
    <script src="{{ asset('dist/js/image-uploader.js') }}"></script>
    <script src="{{ asset('dist/js/image-uploader.min.js') }}"></script>
@endpush