<div class="min-h-screen flex items-center justify-center bg-gray-100 py-6" x-data="login">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-lg">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Login</h2>
        @include('message')

        <form class="space-y-5" @submit.prevent="login">
           <!-- Email -->
            <div>
                <label class="block text-gray-700 mb-1">Email</label>
                <input type="text" x-model="data.email" placeholder="you@example.com"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                     <template x-if="errors.email">
                        <small class="text-red-500" x-text="errors.email"></small>
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
