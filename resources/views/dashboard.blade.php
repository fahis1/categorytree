@extends('layout')
@section('content')
<div class="flex">
  <div id="category-tree" class="w-1/5 h-screen bg-gray-50 flex flex-col">
      <div class="p-4">
          <button id="add-root-category" class="px-4 py-2 bg-slate-300 text-grey  mb-2">Add Root Category</button>
          <button id="add-sub-category" class="px-4 py-2 bg-slate-300 text-grey">Add Subcategory</button>
      </div>
      <div class="p-4">
          <a href="#" id="collapse-tree" class="text-blue-500">Collapse Tree</a> |
          <a href="#" id="expand-tree" class="text-blue-500">Expand Tree</a>
      </div>
      <div id="category-tree-container" class="flex-grow">
          <!-- jsTree will be loaded here -->
      </div>
  </div>
  <div class="w-4/5 h-screen bg-gray-100">
      <div class="h-full w-full p-2 bg-white rounded shadow">
          <div class="flex flex-col items-start m-10 justify-center">
              <ul class="mb-5 w-full flex list-none flex-row flex-wrap border-b-0 pl-0" data-te-nav-ref>
                  <li role="presentation">
                      <a href="#tabs-home"
                          class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                          data-te-toggle="pill" data-te-target="#tabs-home" data-te-nav-active role="tab"
                          aria-controls="tabs-home" aria-selected="true">General</a>
                  </li>
                  <li role="presentation">
                      <a href="#tabs-profile"
                          class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                          data-te-toggle="pill" data-te-target="#tabs-profile" role="tab" aria-controls="tabs-profile"
                          aria-selected="false">Image</a>
                  </li>
                  <li role="presentation">
                      <a href="#tabs-messages"
                          class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                          data-te-toggle="pill" data-te-target="#tabs-messages" role="tab"
                          aria-controls="tabs-messages" aria-selected="false">SEO</a>
                  </li>
              </ul>
              <div class="mb-6" style="width: -moz-available;">
                  <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                      id="tabs-home" role="tabpanel" aria-labelledby="tabs-home-tab" data-te-tab-active>
                      Select a category
                  </div>
                  <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                      id="tabs-profile" role="tabpanel" aria-labelledby="tabs-profile-tab">
                      Select a category
                  </div>
                  <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                      id="tabs-messages" role="tabpanel" aria-labelledby="tabs-profile-tab">
                      Select a category
                  </div>
              </div>
          </div>
      </div>
      <div id="category-content" class="p-4">

      </div>
  </div>
</div>

@endsection
