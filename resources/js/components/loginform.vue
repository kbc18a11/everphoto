<template>
  <form action method="post">
    <div class="card">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="POST" action>
          <input type="hidden" name="_token" value="eAReI3ZhLbIfsMetXVJBBAPmUJW6cz01UbCuzbCt" />
          <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">メールアドレス</label>
            <div class="col-md-6">
              <input
                id="email"
                type="email"
                name="email"
                value
                required="required"
                autocomplete="email"
                autofocus="autofocus"
                class="form-control"
              />
            </div>
          </div>
          <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">パスワード</label>
            <div class="col-md-6">
              <input
                id="password"
                type="password"
                name="password"
                required="required"
                autocomplete="current-password"
                class="form-control"
              />
            </div>
          </div>
          <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
              <button type="submit" class="btn btn-primary">ログイン</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </form>
</template>

<script>
export default {};
</script>

<style>
</style>
