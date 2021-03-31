<div class="grid grid-cols-6 gap-6">
    <div class="col-span-6 sm:col-span-3">
        <label for="first_name" class="block text-sm font-medium text-gray-700">
            Nombre Completo</label>
        <input type="text" name="name" id="name" autocomplete="name" value="{{ $user->name ?? old('name') }}"
            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
    </div>

    <div class="col-span-6 sm:col-span-3">
        <label for="last_name" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email" id="email" autocomplete="email" value="{{ $user->email ?? old('email') }}"
            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
    </div>

    <div class="col-span-6 sm:col-span-3">
        <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
        <select id="role" name="role"
            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option selected default disabled>Seleccionar rol</option>
            <option value="admin" @isset($user) {{ $user->role == "admin" ? 'selected': '' }} @endisset>Admin</option>
            <option value="manager" @isset($user) {{ $user->role == "manager" ? 'selected': '' }} @endisset>Manager
            </option>
            <option value="editor" @isset($user) {{ $user->role == "editor" ? 'selected': '' }} @endisset>Editor
            </option>
        </select>
    </div>

    <div class="col-span-6">
        <label for="bio" class="block text-sm font-medium text-gray-700">
            Biografia
        </label>
        <div class="mt-1">
            <textarea id="bio" name="bio" rows="3"
                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md">{{ $user->bio ?? old('bio') }}</textarea>
        </div>
        <p class="mt-2 text-sm text-gray-500">
            Breve descripcion y/o comentarios sobre la persona
        </p>
    </div>

    <div class="col-span-6">
        <label for="city" class="block text-sm font-medium text-gray-700">Empresas</label>
        <select
            class="block appearance-none w-full h-12 border bg-white border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="companies" name="companies[]" multiple>
            @foreach (\App\Models\Company::all() as $company)
            <option value="{{ $company->id}}" @isset($user) {{ $user->hasCompany($company->id) ? 'selected':'' }}
                @endisset>
                {{ $company->name }}
            </option>
            @endforeach
        </select>
    </div>
</div>