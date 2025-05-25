<x-app>
    <!-- Tambah Program Latihan Button -->
    <div class="flex justify-end mb-4">
        <button onclick="document.getElementById('addModal').classList.remove('hidden')"
            class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600 transition">
            + Tambah Program Latihan
        </button>
    </div>

    <!-- Program Latihan List -->
    <section class="space-y-4">
        @foreach ($programs as $program)
            <div class="bg-gray-200 p-4 rounded-lg shadow-md flex justify-between items-center">
                <div>
                    <h2 class="text-xl font-bold">{{ $program->nama }}</h2>
                    <p class="text-sm font-semibold">{{ \Carbon\Carbon::parse($program->tanggal)->translatedFormat('l, d F Y') }}</p>
                    <p>{{ $program->jenis_latihan }}</p>
                </div>
                <div class="space-x-2">
                    <!-- Tombol Ubah -->
                    <button onclick="openEditModal({{ $program->id }}, '{{ $program->nama }}', '{{ $program->tanggal }}', '{{ $program->jenis_latihan }}', '{{ $program->detail }}', '{{ $program->status }}')"
                        class="bg-green-500 text-white px-4 py-2 rounded">Ubah</button>

                    <!-- Tombol Hapus -->
                    <form action="{{ route('program.destroy', $program->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Hapus</button>
                    </form>
                </div>
            </div>
        @endforeach
    </section>

    <!-- Tambah Modal -->
    <div id="addModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-lg shadow-lg p-6 w-96">
            <h2 class="text-xl font-bold mb-4">Tambah Program Latihan</h2>
            <form action="" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-1">Nama</label>
                    <input type="text" name="nama" class="w-full border rounded p-2" required />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-1">Tanggal</label>
                    <input type="date" name="tanggal" class="w-full border rounded p-2" required />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-1">Jenis Latihan</label>
                    <input type="text" name="jenis_latihan" class="w-full border rounded p-2" required />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-1">Details</label>
                    <textarea name="detail" class="w-full border rounded p-2 resize-none" rows="3" required></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-1">Status</label>
                    <select name="status" class="w-full border rounded p-2" required>
                        <option value="not yet">Not Yet</option>
                        <option value="finish">Finish</option>
                    </select>
                </div>
                <div class="flex justify-end space-x-2">
                    <button type="button" onclick="document.getElementById('addModal').classList.add('hidden')"
                        class="px-4 py-2 bg-gray-400 text-white rounded">Batal</button>
                    <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Modal -->
    <div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-lg shadow-lg p-6 w-96">
            <h2 class="text-xl font-bold mb-4">Edit Program Latihan</h2>
            <form id="editForm" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="editId">
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-1">Nama</label>
                    <input type="text" name="nama" id="editNama" class="w-full border rounded p-2" required />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-1">Tanggal</label>
                    <input type="date" name="tanggal" id="editTanggal" class="w-full border rounded p-2" required />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-1">Jenis Latihan</label>
                    <input type="text" name="jenis_latihan" id="editLatihan" class="w-full border rounded p-2" required />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-1">Details</label>
                    <textarea name="detail" id="editDetail" class="w-full border rounded p-2 resize-none" rows="3"
                        required></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-1">Status</label>
                    <select name="status" id="editStatus" class="w-full border rounded p-2" required>
                        <option value="not yet">Not Yet</option>
                        <option value="finish">Finish</option>
                    </select>
                </div>
                <div class="flex justify-end space-x-2">
                    <button type="button" onclick="document.getElementById('editModal').classList.add('hidden')"
                        class="px-4 py-2 bg-gray-400 text-white rounded">Batal</button>
                    <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openEditModal(id, nama, tanggal, latihan, detail, status) {
            document.getElementById('editModal').classList.remove('hidden');
            document.getElementById('editNama').value = nama;
            document.getElementById('editTanggal').value = tanggal;
            document.getElementById('editLatihan').value = latihan;
            document.getElementById('editDetail').value = detail;
            document.getElementById('editStatus').value = status;
            const form = document.getElementById('editForm');
            form.action = /program/${id};
        }
    </script>
</x-app>