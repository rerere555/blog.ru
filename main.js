let id = null;

async function getPosts() {
    let res = await fetch('http://api.blog.ru/posts');
    let posts = await res.json();
    // console.log(posts[0].title);
    document.querySelector('.post-list').innerHTML = '';
    posts.forEach((post) => {
        document.querySelector('.post-list').innerHTML += `
        <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">${post.title}</h5>
                    <p class="card-text">${post.body}</p>
                    <a href="#" class="card-link">Подробнее</a>
                    <button type="submit"  onclick ="removePost(${post.id})">удалить</button>
                    <button type="submit"  onclick ="selectPost('${post.id}', '${post.title}', '${post.body}')">изменить</button>
                </div>
            </div>
            `
    })
}



async function addPost() {
    const title = document.getElementById('title').value,
            body = document.getElementById('body').value;
            let formData = new FormData();
            formData.append('title', title);
            formData.append('body', body);
    const res = await fetch('http://api.blog.ru/posts', {
        method: 'POST', 
        body: formData
    });
    const data = await res.json();
    if (data.status === true) {
        await getPosts();
    }
    
}

async function removePost(id){
const res = await fetch(`http://api.blog.ru/posts/${id}`, {
    method: 'DELETE'
 });
 const data = await res.json();
 if (data.status === true) {
    await getPosts();
 }
}

async function selectPost(idP, title, body) {
    id = idP;
    document.getElementById('title-edit').value = title;
    document.getElementById('body-edit').value = body;
}
async function updatePost(id, title, body) {
    let formData = new FormData();
            formData.append('title', title);
            formData.append('body', body);
    const res = await fetch(`http://api.blog.ru/posts/${id}`,{
        method: 'PATCH' ,
        body: formdata
    });
     const data = await res.json();
 if (data.status === true) {
    await getPosts();
}}
getPosts();
// blog.ru -клиент  front end
// api.blog.ru сервер back end