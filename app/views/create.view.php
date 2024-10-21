<div class="container create">
    <form action="/create" method="post" class="create-form">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter Name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Enter Email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="tel" name="phone" placeholder="Enter Phone" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Enter Password" required>
        </div>
        <div class="text-center">
            <button type="submit">Submit</button>
        </div>
    </form>
</div>