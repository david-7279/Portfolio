window.onload = function() {
    document.getElementById('slide').onclick = function(){
        let lists = document.querySelectorAll('.acessorios-item');
        document.getElementById('slide').appendChild(lists[0]);
    }
}