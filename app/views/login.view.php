<div class="mx-auto w-5/6 mt-6 mb-10">
    <form action="/login" method="post" class="bg-orange-500 py-5 px-10 rounded md:w-1/2 mx-auto">
        <div class="mb-3">
            <label class="block font-semibold mb-1" for="email">Email</label>
            <input type="email" class="w-full p-2 focus:outline-none" name="email" value="<?php echo old('email') ?>" placeholder="Enter Email">
        </div>
        <div class="mb-6">
            <label class="block font-semibold mb-1" for="password">Password</label>
            <input type="password" class="w-full p-2 focus:outline-none" name="password" value="<?php echo old('password') ?>" placeholder="Enter Password">
        </div>
        <div class="text-center">
            <button type="submit" class="bg-black text-white py-3 px-20 rounded">Login</button>
        </div>
    </form>
</div>