@extends('template.default')

@section('title','Result Page')
@section('content')
<div style="margin: 20px auto ; padding: 20px;">
    <h2>สรุปข้อมูลที่ได้รับ</h2>
    <p>ชื่อ-นามสกุล: {{ $data['firstname'] }} {{ $data['lastname'] }}</p>
    <p>อายุ: {{ $data['age'] }}</p>
    <p>เพศ: {{ $data['sex'] ?? 'ไม่ได้ระบุ' }}</p>
    <p>ที่อยู่: {{ $data['address'] }}</p>
    <p>สีที่ชอบ: {{ $data['fav_color'] }}</p>

    <a href="{{ url('/workshop') }}">กลับไปหน้าฟอร์ม</a>
</div>
@endsection
