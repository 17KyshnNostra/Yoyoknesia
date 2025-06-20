@extends('layout.app')

@section('content')
<div class="w-full px-4 py-16 bg-white">
    <div class="max-w-2xl mx-auto">
        <h1 class="text-2xl md:text-3xl font-bold text-center text-gray-700 mb-8">
            Form Pemesanan Jasa Videografi
        </h1>

        {{-- Alert jika sukses atau error --}}
        @if(session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class="mb-4 p-4 bg-red-100 text-red-800 rounded">
                {{ session('error') }}
            </div>
        @endif

        {{-- Form --}}
        <form method="POST" action="{{ route('booking.store') }}" class="space-y-4">
            @csrf

            {{-- Nama --}}
            <div>
                <label class="block text-gray-700 font-medium mb-1">Nama Lengkap</label>
                <input type="text" name="name" value="{{ old('name') }}"
                    class="w-full border rounded-lg px-4 py-2 @error('name') border-red-500 @enderror" required>
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            {{-- Email --}}
            <div>
                <label class="block text-gray-700 font-medium mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email') }}"
                    class="w-full border rounded-lg px-4 py-2 @error('email') border-red-500 @enderror" required>
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            {{-- Tanggal --}}
            <div>
                <label class="block text-gray-700 font-medium mb-1">Tanggal Pemesanan</label>
                <input type="date" name="date" value="{{ old('date') }}"
                    class="w-full border rounded-lg px-4 py-2 @error('date') border-red-500 @enderror" required>
                @error('date')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            {{-- Deskripsi --}}
            <div>
                <label class="block text-gray-700 font-medium mb-1">Deskripsi Pesanan</label>
                <textarea name="description" rows="4"
                    class="w-full border rounded-lg px-4 py-2 @error('description') border-red-500 @enderror" required
                    placeholder="Ceritakan kebutuhan videografi Anda (acara, durasi, lokasi, dll)">
                    {{ old('description') }}
                </textarea>
                @error('description')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            {{-- Submit --}}
            <div class="text-center">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-lg">
                    Kirim Pemesanan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@if(session('code'))
    <!-- Overlay -->
    <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" id="modal-overlay">
        <!-- Modal -->
        <div class="bg-white rounded-lg shadow-lg p-6 max-w-sm w-full text-center">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Booking Berhasil!</h2>
            <p class="text-sm text-gray-600">Kode Booking Anda:</p>
            <p class="text-lg font-bold text-blue-600 mt-2">{{ session('code') }}</p>

            <button onclick="closeModal()" class="mt-6 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                Tutup
            </button>
        </div>
    </div>

    <script>
        function closeModal() {
            document.getElementById('modal-overlay').remove();
        }
    </script>
@endif
