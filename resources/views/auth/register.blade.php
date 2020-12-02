<div class="cuntainer">
    <div class="row">
        <div class="col-md-6 col-10 mx-auto">
            
        <form action="{{ url('/insert-user') }}" method="POST">
                @csrf
                <div class="form-control">
                    <label for="">Name</label>
                    <input type="text" name="name">
                </div>
                
                <div class="form-control">
                    <label for="">Email</label>
                    <input type="email" name="email">
                </div>
                <div class="form-control">
                    <label for="">Password</label>
                    <input type="password" name="password">
                </div>
                <input type="submit" value="Send">
            </form>
        </div>
    </div>
</div>