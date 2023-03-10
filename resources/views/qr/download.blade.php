<x-layout>

    <div class="inset-0 flex items-end justify-center px-4 py-6 pointer-events-none sm:p-6 sm:items-start p-10 max-w-lg mx-auto mt-24">
        <div class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto">
          <div class="rounded-lg shadow-xs overflow-hidden">
            <div class="p-4">
              <div class="flex items-start">
                <div class="flex-shrink-0">
                  <svg class="h-6 w-6 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </div>
                <div class="ml-3 w-0 flex-1 pt-0.5">
                  <p class="text-sm font-medium text-gray-900">
                    Successfully downloaded!
                  </p>
                  <p class="mt-1 text-sm text-gray-500">
                    Anyone with a link can now download this file. <a class="bg-laravel text-white px-2 hover:bg-black" href="{{ URL::to('/qr/generatePDF') }}">Export PDF</a>
                  </p>
                    {{-- <div class="mb-6" x-data="app" x-cloak>
                        <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                            Submit
                        </button>
                    </div> --}}
                </div>
                <div class="ml-4 flex-shrink-0 flex">
                  <button class="inline-flex text-gray-400 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

</x-layout>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

window.addEventListener('DOMContentLoaded', (event) => {
    download();
});

function download() {
    window.location.href = "/qr/generatePDF";
}

</script>

