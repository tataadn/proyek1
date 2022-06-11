<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-16 h-16 justify-right" />
            </a>
            GURU REGISTER
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('guru.guruRegister') }}">
            @csrf

            <!-- Role -->
            <div class="mb-4">
                <x-label for="role" :value="__('Anda Adalah')" />
                <x-input id="role" class="block mt-1 w-full" type="text" name="role" value="guru" readonly="readonly" required/>
            </div>

            <!-- No Id -->
            <div class="mb-4">
                <x-label for="noid" :value="__('NIP')" />
                <x-input id="noid" class="block mt-1 w-full" type="text" name="noid" :value="old('noid')" required autofocus />
            </div>

            <!-- Name -->
            <div class="mb-4">
                <x-label for="name" :value="__('Name')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Kategori -->
            <div class="mb-4">
                <x-label for="kategori" :value="__('Kelas')" />
                <select id="kategori" class="form-select block mt-1 w-full" name="kategori" required aria-label="Default select example">
                        <option value="bindo">Bahasa Indonesia</option>
						<option value="bing">Bahasa Inggris</option>
						<option value="bio">Biologi</option>
						<option value="eko">Ekonomi</option>
						<option value="fis">Fisika</option>
						<option value="geo">Geografi</option>
						<option value="kim">Kimia</option>
						<option value="mat_p">Matematika Peminatan</option>
						<option value="mat_w">Matematika Wajib</option>
						<option value="pai">Pendidikan Agama Islam</option>
						<option value="pkn">Pendidikan Kewarganegaraan</option>
						<option value="sej">Sejarah</option>
						<option value="sos">Sosiologi</option>
						<option value="tim it">Tim IT</option>
                </select>
            </div>

            <!-- Jenkel -->
            <div class="mb-4">
                <x-label for="jenkel" :value="__('Jenkel')" />
                <select id="jenkel" class="form-select block mt-1 w-full" name="jenkel" required aria-label="Default select example">
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>

            <!-- Alamat -->
            <div>
                <x-label for="alamat" :value="__('Alamat')" />
                <x-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" :value="old('alamat')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />
                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-center mt-4">
                <a class="underline text-md text-gray-600 hover:text-gray-900 ml-4" href="/">
                    {{ __('Kembali ke Dashboard') }}
                </a>

                <a class="underline text-md text-gray-600 hover:text-gray-900" href="{{ route('guru.guruLogin') }}">
                    {{ __('Sudah punya akun?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
