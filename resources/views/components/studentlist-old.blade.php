{{ $title }}




@foreach($lists as $list)

    <li class="uppercase">{{ $list->name }}</li>

{{--{{ dd(gettype($list->dob)) }}--}}

<x-student-list-child :studentDob="$list->dob" />

@endforeach
