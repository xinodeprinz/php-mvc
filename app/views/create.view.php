<div class="mx-auto w-5/6 mt-6 mb-10">
    <form action="/create" method="post" class="bg-orange-500 py-5 px-10 rounded md:w-1/2 mx-auto">
        <div class="mb-3">
            <label class="block font-semibold mb-1" for="name">Name</label>
            <input type="text" class="w-full p-2 focus:outline-none" name="name" placeholder="Enter Name">
        </div>
        <div class="mb-3">
            <label class="block font-semibold mb-1" for="email">Email</label>
            <input type="email" class="w-full p-2 focus:outline-none" name="email" placeholder="Enter Email">
        </div>
        <div class="mb-3">
            <label class="block font-semibold mb-1" for="phone">Phone</label>
            <input type="tel" class="w-full p-2 focus:outline-none" name="phone" placeholder="Enter Phone">
        </div>
        <div class="mb-6">
            <label class="block font-semibold mb-1" for="password">Password</label>
            <input type="password" class="w-full p-2 focus:outline-none" name="password" placeholder="Enter Password">
        </div>
        <div class="text-center">
            <button type="submit" class="bg-black text-white py-3 px-20 rounded">Submit</button>
        </div>
    </form>
</div>