@props(['tehnologiesCsv'])

@php
    
    $tehnologies=explode(',', $tehnologiesCsv)
@endphp
<ul class="flex">
    @foreach ($tehnologies as $tehnology)       
    @php
        $tehnology=trim($tehnology)
    @endphp
    
    <li    
        class="flex items-center justify-center py-1 px-3 mr-2 text-xs btn rounded-pill btn-outline-primary"
    >
        <a href="/?tehnology={{$tehnology}}">{{$tehnology}}</a>
    </li>
    @endforeach   
</ul>
