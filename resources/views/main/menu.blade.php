<h2>Мени</h2>
<ul>
    <li><a class="active" href="/">Почетна</a></li>
    @foreach($categories as $categories)
        <li><a href="/{{ $categories->slug }}">{{ $categories->title }}</a></li>
    @endforeach
    <li><a href="/categories/all">Производи</a></li>
    <li><a href="/blog">Блог</a></li>
    <li><a href="/contact">Контакт</a></li>
</ul>