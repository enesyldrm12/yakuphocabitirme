<template>
  <div id="app">
    <div class="login-container">
      <div class="box">
        <h1>Login Form</h1>
      </div>
      <form @submit.prevent="login">
        <div class="form-group">
          <input type="email" id="email" placeholder="Email" v-model="email" required>
        </div>
        <div class="form-group">
          <input type="password" id="password" placeholder="Password" v-model="password" required>
        </div>
        <div class="form-group">
          <input type="number" id="enterCode" :value="code" readonly>
          <input type="text" placeholder="Enter Code" required>
        </div>
        <div class="form-group">
          <button type="submit">Login</button>
          <button type="button" @click="forgotPassword">Forgot Password?</button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      email: '',
      password: '',
      code: ''
    };
  },
  methods: {
    login() {
      // Burada login işlemleri yapılabilir
      console.log('Login with:', this.email, this.password);
    },
    forgotPassword() {
      // Şifremi unuttum işlemleri burada yapılabilir
      console.log('Forgot Password');
    },
    generateCode() {
      // 6 haneli rastgele kod oluşturma
      const randomCode = Math.floor(100000 + Math.random() * 900000);
      this.code = String(randomCode);
    }
  },
  mounted() {
    // Sayfa yüklendiğinde ilk kez kodu oluştur
    this.generateCode();
  }
};
</script>

<style>
#app {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.login-container {
  width: 400px;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.form-group {
  margin:10px;
}

label {
  display: block;
}

input[type="email"],
input[type="password"],
input[type="text"]
{
  width: 100%;
  padding: 8px;
  border-radius: 3px;
  border: 1px solid #ccc;
}
input[type="number"]{
  width: 90px;
  height:45px;
  color:black;
  font-size: 20px;
  text-align: center;
  margin-bottom: 10px;
  background-image: url("/image.png");
  margin-left:35%;
}
button {
  padding: 8px 16px;
  margin: 10px;
  border:2px solid black;
  border-radius: 3px;
  background-color:transparent;
  color:black;
  cursor: pointer;
  text-align: center;
  margin-left:15%;
  font-size: 15px;
}

button:hover {
  background-color:rgb(13, 223, 223);
  color: white;
}

.box{
  position: relative;
  width:auto;
  height: auto;
  padding: 10px;
 border: none;
  display: flex;
  justify-content: center;
}
.box::before{
    position: absolute;
    content: '';
    width: 100%;
    height: 2px;
    background-color: black;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    z-index: 0;
}
.box h1{
    position: relative;
    z-index: 1;
    background-color: #fff;
    padding: 0 10px;
}

</style>
