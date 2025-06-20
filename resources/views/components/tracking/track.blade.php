<div class="w-full px-4 py-16 bg-transparent">
    <div class="max-w-7xl mx-auto text-center">
        <h1 class="text-xl md:text-3xl font-bold text-gray-600 mb-4">
            Tracking Orders
        </h1>
        <p class="text-sm md:text-base mb-6 text-gray-600">
            Masukkan Kode Booking Untuk Melacak Orderan Anda.
        </p>        
    </div>

    <form action="{{ route('tracking.search') }}" method="GET" class="max-w-md mx-auto">
        <div class="relative">
            <input 
                type="text" 
                name="code" 
                value="{{ old('code', $code ?? '') }}"
                class="block w-full py-2 pl-9 pr-24 text-sm text-gray-800 border border-black/30 rounded-lg" 
                placeholder="Kode Booking (misal: YN1234)" 
                required 
            />
            <button 
                type="submit" 
                class="text-white absolute right-2 bottom-1.5 bg-blue-700 hover:bg-blue-800 font-medium rounded text-xs px-3 py-1.5">
                Search
            </button>
        </div>
    </form>

    @if(isset($booking) && $booking)
        <div class="mt-10 max-w-2xl mx-auto bg-white rounded-lg shadow p-6">
            <h3 class="text-xl font-bold mb-4 text-gray-700">Detail Booking</h3>
            <table class="w-full text-sm text-left text-gray-700">
                <tr><td class="font-medium">Kode Booking</td><td>: {{ $booking->code }}</td></tr>
                <tr><td class="font-medium">Nama</td><td>: {{ $booking->name }}</td></tr>
                <tr><td class="font-medium">Email</td><td>: {{ $booking->email }}</td></tr>
                <tr><td class="font-medium">Deskripsi</td><td>: {{ $booking->description }}</td></tr>
                <tr><td class="font-medium">Tanggal</td><td>: {{ \Carbon\Carbon::parse($booking->date)->format('d M Y') }}</td></tr>
                <tr><td class="font-medium">Status</td><td>: {{ ucfirst($booking->status) }}</td></tr>
            </table>
        </div>
    @elseif(isset($code))
        <p class="mt-6 text-center text-red-500">Kode booking <strong>{{ $code }}</strong> tidak ditemukan.</p>
    @endif
</div>
