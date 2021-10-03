<template>
    <div class="login-form">
        <h1>Login Page</h1>
        <div class="container">
            <form class="col-md-6 mx-auto" @submit="checkForm"
                action="https://vuejs.org/"
                method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</template>

<script>

</script>

<style>
.form-group {
    margin-bottom: 20px;
    display: flex; 
    flex-direction: column;
}

.form-group label{
    text-align: left;
    font-weight: bold;
}

.form-group.form-check{
    flex-direction: row;
}

.btn-primary {
    width: 120px;
    height: 40px;
    border-radius: 20px;
}
</style>