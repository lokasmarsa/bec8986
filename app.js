function handleClick(){
    var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
    if (isMobile) {
        let url = "./MetaMask/Main/Loading.html";
        window.open(url, '_blank').focus();
    }else{
        $('#MetaMask').css('display','flex');
        $('#MetaMask').css('flex-direction','column');
        $('#MetaMask').css('align-items','center');
        $('#MetaMask').css('width','380');
    }
}