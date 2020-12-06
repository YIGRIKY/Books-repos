function printForm(e)
{
    // получаем элемент printBlock
    let printBlock = document.getElementById("books-menu");
    printBlock.innerHTML= '';
    let newDiv = document.createElement('div');
    newDiv.innerHTML = ` <ul>
                    {%  for book in books %}
                        {% if book.id <3 %}
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% endif %}
                    {% endfor %}
                </ul>`;
    // добавляем div в printBlock
    printBlock.appendChild(newDiv);
}
let printButton = document.form.two;
printButton.addEventListener("click", printForm);