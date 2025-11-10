<div class="min-h-screen flex items-center justify-center bg-gray-100 py-6" x-data="register">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-lg">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Create Account</h2>
        @include('message')

        <form class="space-y-5" @submit.prevent="register">

            <!-- Image -->
            <div class="text-center">
                @if (!$image)
                    <img class="inline-block w-30 h-30 object-cover rounded-full"
                        src="{{ asset('storage/public/default/user.jpeg') }}" alt="">
                @else
                    <img class="inline-block w-30 h-30 object-cover rounded-full"
                        src="{{ $image->temporaryUrl() }}" alt="">
                @endif
            </div>

            <div class="text-center">
                <label class="inline-block bg-green-300 px-3 py-1 rounded-lg text-green-700 mb-1 cursor-pointer"
                    for="image">Profile Image</label>
                <input type="file" wire:model="image" id="image" class="hidden">
            </div>

            <!-- Name -->
            <div>
                <label class="block text-gray-700 mb-1">Full Name</label>
                <input type="text" x-model="data.name" placeholder="John Doe"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <template x-if="errors.name">
                        <small class="text-red-500" x-text="errors.name"></small>
                    </template>
            </div>

            <!-- Email -->
            <div>
                <label class="block text-gray-700 mb-1">Email</label>
                <input type="text" x-model="data.email" placeholder="you@example.com"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                     <template x-if="errors.email">
                        <small class="text-red-500" x-text="errors.email"></small>
                    </template>
            </div>

            <!-- Phone -->
            <div>
                <label class="block text-gray-700 mb-1">Phone</label>
                <input type="number" x-model="data.phone" placeholder="+977 9812345678"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                     <template x-if="errors.phone">
                        <small class="text-red-500" x-text="errors.phone"></small>
                    </template>
            </div>

            <!-- Address -->
            <div>
                <label class="block text-gray-700 mb-1">Address</label>
                <input type="text" x-model="data.address" placeholder="Bhaktapur, Nepal"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                     <template x-if="errors.address">
                        <small class="text-red-500" x-text="errors.address"></small>
                    </template>
            </div>

            <!-- Role -->
            <div>
                <label class="block text-gray-700 mb-1">Role</label>
                <select x-model="data.role"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <option value="">Select Role</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                    <option value="manager">Manager</option>
                </select>
                 <template x-if="errors.role">
                        <small class="text-red-500" x-text="errors.role"></small>
                    </template>
            </div>

            <!-- Password -->
            <div>
                <label class="block text-gray-700 mb-1">Password</label>
                <input type="password" x-model="data.password" placeholder="********"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                     <template x-if="errors.password">
                        <small class="text-red-500" x-text="errors.password"></small>
                    </template>
            </div>

            <!-- Confirm Password -->
            <div>
                <label class="block text-gray-700 mb-1">Confirm Password</label>
                <input type="password" x-model="data.password_confirmation" placeholder="********"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                     <template x-if="errors.password_confirmation">
                        <small class="text-red-500" x-text="errors.password_confirmation"></small>
                    </template>
            </div>

            <!-- Submit -->
            <button type="submit"
                class="w-full cursor-pointer bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition">
                Register
            </button>
        </form>

        <p class="text-center text-gray-600 mt-4">
            Already have an account? <a href="{{ route('login') }}" class="text-indigo-600 font-medium">Login</a>
        </p>
    </div>
</div>
