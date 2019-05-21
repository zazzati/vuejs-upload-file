# Minimal file upload example with vuejs, axios + php


```html
<!doctype html>
<html>
  <head>
    <title>This is the title of the webpage!</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>
  </head>
  <body>
    <div id="app">
    <form id="uploadForm" role="form" enctype="multipart/form-data" >
      <input type="file" id="miofile" name="miofile">
      <input type="button" value="Upload" v-on:click="submitFile">
    </form>
    
   </div>
    <script>    
 var vm = new Vue({
  el: '#app',
  data: {
  },  
  methods: {      
    submitFile() {
      let formData = new FormData(); 
      console.log(miofile.files[0]);     
      
      formData.append("userfile", miofile.files[0]); 
      axios.post('uploadfile.php', formData, {
            headers: {
              'Content-Type': 'multipart/form-data'
            }
          }
        ).then(function () {
          console.log('yeah !!');
        })
    }
  }

})
    </script>      
  </body>
</html>
```
