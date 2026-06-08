<x-layouts.app>
    <x-slot name="title">Edit Siswa</x-slot>

    <div class="max-w-2xl mx-auto bg-white rounded-xl shadow p-8">
        <h2 class="text-2xl font-bold mb-6">Edit Data Siswa</h2>

        <form action="{{ route('students.update', $student) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-2 gap-4">

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">NIS</label>
                    <input type="text" name="nis" placeholder="Nomor Induk Siswa"
                           class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                           value="{{ old('nis', $student->nis) }}">
                    @error('nis') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                    <input type="text" name="name" placeholder="Nama siswa"
                           class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                           value="{{ old('name', $student->name) }}">
                    @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Lahir</label>
                    <input type="date" name="birth_date"
                           class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                           value="{{ old('birth_date', $student->birth_date) }}">
                    @error('birth_date') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin</label>
                    <select name="gender"
                            class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">-- Pilih --</option>
                        <option value="L" {{ old('gender', $student->gender) == 'L' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="P" {{ old('gender', $student->gender) == 'P' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                    @error('gender') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nama Orang Tua</label>
                    <input type="text" name="parent_name" placeholder="Nama ayah/ibu"
                           class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                           value="{{ old('parent_name', $student->parent_name) }}">
                    @error('parent_name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">No. HP Orang Tua</label>
                    <input type="text" name="phone" placeholder="08xxxxxxxxxx"
                           class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                           value="{{ old('phone', $student->phone) }}">
                    @error('phone') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="mb-4 col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Kelas</label>
                    <select name="classroom_id"
                            class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">-- Pilih Kelas --</option>
                        @foreach($classrooms as $classroom)
                            <option value="{{ $classroom->id }}"
                                {{ old('classroom_id', $student->classroom_id) == $classroom->id ? 'selected' : '' }}>
                                {{ $classroom->name }} - {{ $classroom->teacher }}
                            </option>
                        @endforeach
                    </select>
                    @error('classroom_id') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="mb-4 col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                    <textarea name="address" rows="3" placeholder="Alamat lengkap"
                              class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('address', $student->address) }}</textarea>
                    @error('address') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

            </div>

            <div class="flex gap-3 mt-2">
                <button type="submit"
                        class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
                    Update
                </button>
                <a href="{{ route('students.index') }}"
                   class="bg-gray-200 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-300">
                    Batal
                </a>
            </div>
        </form>
    </div>
</x-layouts.app>
