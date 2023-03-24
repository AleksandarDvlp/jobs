<x-layout>
@include('partials._hero')
@include('partials._search')

    <div class="lg:grid lg:grid-cols-1 gap-4 space-y-4 md:space-y-0 mx-4">
        <div class="card">
            <div class="card-header">
            <span>Jobs</span>
                 
            @if ( request()->get('tehnology') !== null)
                <span class="badge rounded-pill bg-primary ml-2">{{ request()->get('tehnology') }}</span>
            @elseif ( request()->get('statusi') !== null)
                <span class="badge rounded-pill bg-primary ml-2">{{ request()->get('statusi') }}</span>
            @endif
                    

                </div>
         
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Company</th>
                        <th>Location</th>
                        <th>Tehnologies</th>
                        <th>Website</th>
                        <th>Status</th>
                    </tr>
                    </thead>

                            @unless(count($listings)==0)  

                            @foreach ($listings as $listing)
                                <x-listing-card :listing="$listing"></x-listing-card>
                            @endforeach

                            @else

                                <p>No Jobs found</p>
                                
                            @endunless
                </table>
            </div>
        </div>
    </div>
    <div class="mt-6 p-4">{{$listings->links()}}</div>
</x-layout>
