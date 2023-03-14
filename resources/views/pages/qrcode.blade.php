@extends('layouts.main')

@section('content')
<livewire:virtual-card.qrcode :slug="$slug" />
@endsection