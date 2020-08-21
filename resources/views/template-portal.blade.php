{{--
  Template Name: Portal Template
--}}

@extends('layouts.app')

@section('content')
@include('partials.page-header')

@if ( ! post_password_required( $post ) )
  @while(have_posts()) @php the_post() @endphp
    <section>
      <div class='container'>
        <div class='flex flex-wrap'>
          <main class='w-full lg:w-3/4 lg:pr-10'>
            <div class='notice rounded p-3 bg-red-lightest border border-red-lighter my-2'>
              This is a Notice
            </div>

            <h2 class='text-4xl font-bold mt-10'>Documents</h2>
            <div class='file-grid mb-10'>
              <!-- File -->
              <div class='file-row flex flex-row border border-grey mb-2 content-center'>
                <div class='p-8 border-1 border-r border-grey text-grey-darker'>
                  <i class='fas fa-file text-lg'></i>
                </div>
                <div class='flex-1 p-3'>
                  <p class='text-primary font-bold mb-1'>Document Name</p>
                  <p>This could be a description if you wanted one</p>
                </div>
                <div class='bg-grey text-center hover:bg-grey-dark transition duration-500'>
                  <a class='text-sm block py-5 px-8 font-bold border-none text-black' download href=""><i class='fas fa-download text-primary text-2xl mb-1'></i><br> Download</a>
                </div>
              </div>
              <!-- File -->
              <div class='file-row flex flex-row border border-grey mb-2 content-center'>
                <div class='p-8 border-1 border-r border-grey text-grey-darker'>
                  <i class='fas fa-file text-lg'></i>
                </div>
                <div class='flex-1 p-3'>
                  <p class='text-primary font-bold mb-1'>Document Name</p>
                  <p>This could be a description if you wanted one</p>
                </div>
                <div class='bg-grey text-center hover:bg-grey-dark transition duration-500'>
                  <a class='text-sm block py-5 px-8 font-bold border-none text-black' download href=""><i class='fas fa-download text-primary text-2xl mb-1'></i><br> Download</a>
                </div>
              </div>
              <!-- File -->
              <div class='file-row flex flex-row border border-grey mb-2 content-center'>
                <div class='p-8 border-1 border-r border-grey text-grey-darker'>
                  <i class='fas fa-file text-lg'></i>
                </div>
                <div class='flex-1 p-3'>
                  <p class='text-primary font-bold mb-1'>Document Name</p>
                  <p>This could be a description if you wanted one</p>
                </div>
                <div class='bg-grey text-center hover:bg-grey-dark transition duration-500'>
                  <a class='text-sm block py-5 px-8 font-bold border-none text-black' download href=""><i class='fas fa-download text-primary text-2xl mb-1'></i><br> Download</a>
                </div>
              </div>

            </div>


          </main>
          <aside class='w-full lg:w-1/4'>
            <div class='widget'>
              <h2>Records</h2>
            </div>
          </aside>
        </div>
        <div>
    </section>
  @endwhile
@else
<div class='password-wrap bg-primary'>
  {!! get_the_password_form() !!}
</div>
@endif
@endsection
