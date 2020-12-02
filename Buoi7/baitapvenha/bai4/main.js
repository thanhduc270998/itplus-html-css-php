var obj_form = document.getElementById('form');
obj_form.addEventListener('submit', function(){
    var obj_file = document.getElementById('file');
    var file = obj_file.value;
    var obj_title = document.getElementById('title');
    var title = obj_title.value;
    var obj_author = document.getElementById('author');
    var author = obj_author.value;
    var obj_release_date = document.getElementById('release_date');
    var release_date = obj_release_date.value;
    var obj_keyworks = document.getElementById('keyworks');
    var keyworks = obj_keyworks.value;
    var obj_result = document.getElementById('result');
    obj_result.innerHTML = "Title: " + title + "<br />" +"Author: " + author + "<br />" +"Release date: " + release_date + "<br />" +"Keywords: " + keyworks + "<br />"
    event.preventDefault();
})

