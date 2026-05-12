<div class="w-full px-4 py-8">
    <div class="max-w-4xl mx-auto bg-white  overflow-hidden">
        <div class="p-8">
            <form class="space-y-6">
                <!-- ID Karyawan -->
                <div>
                    <label for="id_karyawan" class="block text-sm font-medium text-gray-700">ID Karyawan</label>
                    <input
                        type="text"
                        id="id_karyawan"
                        name="id_karyawan"
                        required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                        placeholder="Masukkan ID karyawan">
                </div>

                <!-- Tanggal -->
                <div>
                    <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                    <input
                        type="date"
                        id="tanggal"
                        name="tanggal"
                        required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <!-- Jam Masuk -->
                <div>
                    <label for="jam_masuk" class="block text-sm font-medium text-gray-700">Jam Masuk</label>
                    <input
                        type="time"
                        id="jam_masuk"
                        name="jam_masuk"
                        required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <!-- Jam Keluar -->
                <div>
                    <label for="jam_keluar" class="block text-sm font-medium text-gray-700">Jam Keluar</label>
                    <input
                        type="time"
                        id="jam_keluar"
                        name="jam_keluar"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <!-- Status -->
                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700">Status Kehadiran</label>
                    <select
                        id="status"
                        name="status"
                        required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="">Pilih Status</option>
                        <option value="Hadir">Hadir</option>
                        <option value="Izin">Izin</option>
                        <option value="Sakit">Sakit</option>
                        <option value="Cuti">Cuti</option>
                        <option value="Alpa">Alpa</option>
                    </select>
                </div>

                <!-- Tombol Submit -->
                <div>
                    <button
                        type="submit"
                        class=" flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#3b5bdc] hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Simpan Kehadiran
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>