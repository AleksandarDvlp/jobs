@props(['listing'])
<x-card>
        <tbody class="table-border-bottom-0">
          <tr>
            <td><a href="/listings/{{$listing->id}}"><strong>{{$listing->company}}</strong></a></td>
            <td>{{$listing->location}}</td>
            <td><x-listing-tehnologies :tehnologiesCsv="$listing->tehnologies"/></td>
            {{-- <td>{{$listing->tehnologies}}</td> --}}

            @php

            if($listing->website==""){
                $listing->website=$listing->job_link;
                
                $listing->website = parse_url($listing->website, PHP_URL_SCHEME).'://'.parse_url($listing->website, PHP_URL_HOST); 
                $listing->website = trim($listing->website, '/');}
            else{

            //    echo "<td>$listing->website</td>";
            }

            @endphp
           
           <td>{{$listing->website}}</td>

            {{-- <td>
              <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                <li
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="top"
                  class="avatar avatar-xs pull-up"
                  title="Lilian Fuller"
                >
                  <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                </li>
                <li
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="top"
                  class="avatar avatar-xs pull-up"
                  title="Sophia Wilkerson"
                >
                  <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                </li>
                <li
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="top"
                  class="avatar avatar-xs pull-up"
                  title="Christina Parker"
                >
                  <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                </li>
              </ul>
            </td> --}}
            {{-- <td><span class="badge bg-label-primary me-1"><a href="/?statusi={{$listing->status}}">{{$listing->status}}</span></a></td> --}}
            <td>
                @php
                if($listing->status=="active"){
                echo "<span id='mySpan' class='badge bg-label-success'><a href='/?statusi=$listing->status'>$listing->status</span></a></td>";
            }elseif($listing->status=="rejected"){
                echo "<span id='mySpan' class='badge bg-label-danger'><a href='/?statusi=$listing->status'>$listing->status</span></a></td>";
            }

                @endphp
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="/listings/{{$listing->id}}/edit"
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                  >
                  <form method="POST" action="/listings/{{$listing->id}}">
                    @csrf
                    @method('DELETE')
                    <button class="dropdown-item"><i class="bx bx-trash me-1"></i> Delete</button>
                </form>
                </div>
              </div>
            </td>
          </tr>
         </tbody>
      
</x-card>