function printForm(e) {
    let printBlock = document.getElementById("books-menu");
    printBlock.innerHTML = '';
    let newDiv = document.createElement('div');

    newDiv.innerHTML =  `<ul>
                    {%  for book in  appointments %}
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="product">
                                    <div class="col ">
                                        <div class="product-img">
                                            <a href="#"><img src="https://cdn1.ozone.ru/s3/multimedia-y/6010159846.jpg" alt="" class="float-left"></a>
                                        </div>
                                    </div>
                                    <div class="col pl-2">

                                        <p class="product-title">
                                            {% if book.author.getAuthorName() ==src %}
                                        </p>
                                        <p class="product-desc" style="text-indent: 20px">
                                            {{ book.description }}</p>
                                        <p class="product-title ">{{ book.author.getAuthorName() }}</p>
                                        {% for category in categoryAndBooks %}
                                            {% if category.bookId.getId() == book.getId() %}
                                            <span class="product-title ">{{ category.categoryId.getCategoryName() }}</span>
                                            {% endif %}
                                        {% endfor %}
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </ul>
                <div class="navigation">
                            {{ knp_pagination_render(appointments) }}
                        </div>`;
    printBlock.appendChild(newDiv);
}
let printButton = document.form.two;
printButton.addEventListener("click", printForm());

function printFormFive(e)
{
    // получаем элемент printBlock
    let printBlock = document.getElementById("books-menu");
    printBlock.innerHTML= '';
    let newDiv = document.createElement('div');
    newDiv.innerHTML = ` <ul>
                    {%  for book in  appointments %}
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="product">
                                    <div class="col ">
                                        <div class="product-img">
                                            <a href="#"><img src="https://cdn1.ozone.ru/s3/multimedia-y/6010159846.jpg" alt="" class="float-left"></a>
                                        </div>
                                    </div>
                                    <div class="col pl-2">

                                        <p class="product-title">
                                            <a href="#">{{ book.title }}</a>
                                        </p>
                                        <p class="product-desc" style="text-indent: 20px">
                                            {{ book.description }}</p>
                                        <p class="product-title ">{{ book.author.getAuthorName() }}</p>
                                        {% for category in categoryAndBooks %}
                                            {% if category.bookId.getId() == book.getId() %}
                                            <span class="product-title ">{{ category.categoryId.getCategoryName() }}</span>
                                            {% endif %}
                                        {% endfor %}
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </ul>
                <div class="navigation">
                            {{ knp_pagination_render(appointments) }}
                        </div>`;
    // добавляем div в printBlock
    printBlock.appendChild(newDiv);
}
let printButtonFive = document.form.five;
printButtonFive.addEventListener("click", printFormFive);

function printFormTwelf(e)
{
    // получаем элемент printBlock
    let printBlock = document.getElementById("books-menu");
    printBlock.innerHTML= '';
    let newDiv = document.createElement('div');
    newDiv.innerHTML = ` <ul>
                    {%  for book in  appointments %}
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="product">
                                    <div class="col ">
                                        <div class="product-img">
                                            <a href="#"><img src="https://cdn1.ozone.ru/s3/multimedia-y/6010159846.jpg" alt="" class="float-left"></a>
                                        </div>
                                    </div>
                                    <div class="col pl-2">

                                        <p class="product-title">
                                            <a href="#">{{ book.title }}</a>
                                        </p>
                                        <p class="product-desc" style="text-indent: 20px">
                                            {{ book.description }}</p>
                                        <p class="product-title ">{{ book.author.getAuthorName() }}</p>
                                        {% for category in categoryAndBooks %}
                                            {% if category.bookId.getId() == book.getId() %}
                                            <span class="product-title ">{{ category.categoryId.getCategoryName() }}</span>
                                            {% endif %}
                                        {% endfor %}
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </ul>
                <div class="navigation">
                            {{ knp_pagination_render(appointments) }}
                        </div>`;
    // добавляем div в printBlock
    printBlock.appendChild(newDiv);
}
let printButtonTwelf = document.form.twelf;
printButtonTwelf.addEventListener("click", printFormTwelf);

function searchForm(e) {
    e.preventDefault();
    let printBlock = document.getElementById("books-menu");
    printBlock.innerHTML = '';
    let newDiv = document.createElement('div');

    newDiv.innerHTML =  `<ul>
                    {%  for book in  books %}
                    {% if book.author.getAuthorName() ==src %}
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="product">
                                    <div class="col ">
                                        <div class="product-img">
                                            <a href="#"><img src="{{ book.image }}" alt="" class="float-left"></a>
                                        </div>
                                    </div>
                                    <div class="col pl-2">

                                        <p class="product-title">
                                            <a href="#">{{ book.title }}</a>
                                        </p>
                                        <p class="product-desc" style="text-indent: 20px">
                                            {{ book.description }}</p>
                                        <p class="product-title ">{{ book.author.getAuthorName() }}</p>
                                        {% for category in categoryAndBooks %}
                                            {% if category.bookId.getId() == book.getId() %}
                                            <span class="product-title ">{{ category.categoryId.getCategoryName() }}</span>
                                            {% endif %}
                                        {% endfor %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% endif %}
                    {% endfor %}
                </ul>
                <div class="navigation">
                            {{ knp_pagination_render(appointments) }}
                        </div>`;
    printBlock.appendChild(newDiv);
}
let printButton = document.src.set;
printButton.addEventListener("click", searchForm);