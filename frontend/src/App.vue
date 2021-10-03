<template>
  <div id="app">
    <Header/>
    <div class="section-content">
      <div id="sidebar">
        <Sidebar/>
      </div>
      <div id="content">
        <router-view></router-view> 
      </div>
    </div>
    <Footer/>
  </div>
</template>

<script>
import Header from './components/layouts/Header.vue'
import Sidebar from './components/layouts/Sidebar.vue'
import Footer from './components/layouts/Footer.vue'

export default {
  name: "App",
  components: {
    Header, 
    Sidebar,
    Footer,
  }
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  /* margin-top: 60px; */
}

.section-content {
  display: flex;
  flex-direction: row;
  min-height: calc(100vh - 100px);
}

#sidebar {
    width: 250px;
    overflow: hidden;
    background-color: #777;
}

#content {
  flex: 1;
}
@import "~bootstrap/dist/css/bootstrap.css";
</style>
