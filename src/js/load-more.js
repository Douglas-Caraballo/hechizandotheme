const LoadMore = document.getElementById('load-more');
let posted = document.querySelector('.content-post');
let ItemPost;
if(posted){
    ItemPost = posted.querySelector('.content-post__item');
    LoadMore.addEventListener('click', async()=>{
        const url = requestListPostVar.url;
        const posts = await request_posts(url);
        display_post(posts);
    });
}

function display_post(posts){
    posts.map(post=>{
        let NewItemPost = ItemPost.cloneNode(true);

        let permalink = NewItemPost.querySelector('.content-post__item__img a');
        permalink.setAttribute('href', post.permalink);
        permalink.innerHTML = post.thumbnail;

        let category = NewItemPost.querySelector('.category-name');
        category.innerHTML = post.category[0].name;

        let title = NewItemPost.querySelector('.post-title a');
        title.setAttribute('href', post.permalink);
        title.innerHTML = post.title;

        let excerpt = NewItemPost.querySelector('.content-post__item__info__excerpt p');
        excerpt.innerHTML = post.excerpt;

        let more = NewItemPost.querySelector('.see-more-redirect');
        more.setAttribute('href',post.permalink);

        let author = NewItemPost.querySelector('.post-author');
        author.innerHTML = post.author;

        let date = NewItemPost.querySelector('.post-date');
        date.innerHTML = post.date;

        let views = NewItemPost.querySelector('.post-views');
        views.innerHTML = post.views + ' views';

        posted.insertAdjacentElement('beforeend', NewItemPost);
    });
}

async function request_posts(url){
    let current_page = LoadMore.dataset.currentPage;

    let next_page = parseInt(current_page, 10) +1;

    LoadMore.dataset.currentPage = next_page;

    const response = await fetch(`${url}?paged=${next_page}&per_page=2`);

    const posts = await response.json();

    return posts.posts;
}