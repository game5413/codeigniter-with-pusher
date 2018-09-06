if (('serviceWorker' in navigator)) {
    window.addEventListener('load',  function() {
        navigator.serviceWorker.register('/penjualan/sw.js').then(function(response) {
            //Succeed
            console.log("Registration success with scope: ", response.scope);            
        }).catch(function(err) {
            //Failed
            console.log("Registration fail: ", err);
        });
    });
}