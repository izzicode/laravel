<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Products</title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  </head>
  <body>
    
<nav class="sticky-top flex-md-nowrap p-0">
  <div class="navbar-brand navbar-brand col-md-3 col-lg-2 mr-0 p-0">
    <div class="row m-0">
      <div class="col-4 p-0">
          <img width="80" src="{{ asset('img/logo.PNG') }}">
      </div>
      <div class="col-8 p-0 mt-2">
        <div>Enterprise</div>
        <div>Resource</div>
        <div>Planning</div>
    </div>
    </div>
  </div>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon text-secondary"><i class="fa-solid fa-bars"></i></span>
  </button>
  <span class="title">ПРОДУКТЫ</span>
  <ul class="navbar-nav px-3 py-2">
    <li class="nav-item text-nowrap">
      <a class="nav-link text-secondary" href="#">Иванов Иван</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
      <div class="sidebar-sticky pt-3 pl-2">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              Продукты <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 p-0">
      <div class="row m-0">
        <div class="table-responsive col-9 px-0">
        <table class="table">
          <thead>
            <tr>
              <th>Артикул</th>
              <th>Название</th>
              <th>Статус</th>
              <th>Атрибуты</th>
            </tr>
          </thead>
          <tbody>
            <tr data-toggle="modal" data-target="#viewProduct">
              <td>prod987</td>
              <td>Productname1</td>
              <td>Доступен</td>
              <td>Цвет: черный <br> Размер: XL</td>
            </tr>
            <tr data-toggle="modal" data-target="#viewProduct">
              <td>prod98712</td>
              <td>Productname2</td>
              <td>Не доступен</td>
              <td>Цвет: белый <br> Размер: L</td>
            </tr>
            
          </tbody>
        </table>
        </div>
        <div class="col-3 mt-3"><button class="btn btn-add" data-toggle="modal" data-target="#addProduct">Добавить</button></div>

        <!-- Modal add product -->
        <div class="modal" id="addProduct" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header pb-0">
                <h5 class="modal-title" id="staticBackdropLabel">Добавить продукт</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body pt-0">
                <form class="w-75">
                  <div class="form-group">
                    <label for="artikul" class="col-form-label">Артикул:</label>
                    <input type="text" class="form-control form-control-sm" id="artikul">
                    <label for="name" class="col-form-label">Название:</label>
                    <input type="text" class="form-control form-control-sm" id="name">
                    <label for="status" class="col-form-label">Статус:</label>
                    <select id="status" class="form-control form-control-sm">
                        <option>Доступен</option>
                        <option>Не доступен</option>
                    </select>
                    <label class="col-form-label font-weight-bold">Атрибуты:</label>
                    <br>
                    <button type="button" class="btn btn-link border-0 addAttr">+Добавить атрибут</button>
                        <div class="attrList">
                        </div>
                    <div>
                    <button class="btn btn-add mt-3" style="float: unset;">Добавить</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- modal view product -->
        <div class="modal" id="viewProduct" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog h-75">
            <div class="modal-content h-75">
              <div class="modal-header pb-0">
                <h5 class="modal-title" id="staticBackdropLabel">prod987</h5>
                <div class="row">
                    <button data-toggle="modal" data-target="#editProduct" class="btn btn-link editProduct pr-0"><i class="fa-solid fa-pencil"></i></button>
                    <button class="btn btn-link rmvProduct pl-0"><i class="fa-solid fa-trash-can"></i></button>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              </div>
              <div class="modal-body pt-0">
                <form class="w-75">
                  <div class="form-group">
                    <div class="row"><div class="col pr-0 my-1" style="color: #ccc;">Артикул:</div><div class="col pl-0">prod987</div></div>
                    <div class="row"><div class="col pr-0 my-1" style="color: #ccc;">Название:</div><div class="col pl-0">Productname1</div></div>
                    <div class="row"><div class="col pr-0 my-1" style="color: #ccc;">Статус:</div><div class="col pl-0">Доступен</div></div>
                    <div class="row"><div class="col pr-0 my-1" style="color: #ccc;">Атрибуты:</div><div class="col pl-0">Цвет: белый <br> Размер: L</div></div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal edit product -->
        <div class="modal" id="editProduct" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header pb-0">
                <h5 class="modal-title" id="staticBackdropLabel">Редактировать Productname1</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body pt-0">
                <form class="w-75">
                  <div class="form-group">
                    <label for="artikul" class="col-form-label">Артикул:</label>
                    <input type="text" class="form-control form-control-sm" id="artikul" value="prod987">
                    <label for="name" class="col-form-label">Название:</label>
                    <input type="text" class="form-control form-control-sm" id="name" value="Productname1">
                    <label for="status" class="col-form-label">Статус:</label>
                    <select id="status" class="form-control form-control-sm">
                        <option selected="selected">Доступен</option>
                        <option>Не доступен</option>
                    </select>
                    <label class="col-form-label font-weight-bold">Атрибуты:</label>
                    <br>
                    <button type="button" class="btn btn-link border-0 addAttr">+Добавить атрибут</button>
                        <div class="attrList">
                            <div class="row"><div class="col"><label for="attr_name" class="col-form-label">Название:</label><input type="text" class="form-control form-control-sm" id="attr_name" value="Цвет"></div><div class="col px-0"><label for="attr_val" class="col-form-label">Значение:</label><input type="text" class="form-control form-control-sm" id="attr_val" value="белый"></div><div class="col-2 align-self-end pl-0"><a class="btn btn-link rmvAttr"><i class="fa-solid fa-trash-can text-light"></i></a></div></div>
                        </div>
                    <div>
                    <button class="btn btn-add mt-3" style="float: unset;">Сохранить</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </main>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>


<script type="text/javascript">
    $("body").on("click", ".addAttr", function () {
    $('.attrList').append('<div class="row"><div class="col"><label for="attr_name" class="col-form-label">Название:</label><input type="text" class="form-control form-control-sm" id="attr_name"></div><div class="col px-0"><label for="attr_val" class="col-form-label">Значение:</label><input type="text" class="form-control form-control-sm" id="attr_val"></div><div class="col-2 align-self-end pl-0"><a class="btn btn-link rmvAttr"><i class="fa-solid fa-trash-can text-light"></i></a></div></div>');
  });

    $("body").on("click", ".rmvAttr", function () {
    $(this).parent().parent().remove();
  });

    $('#editProduct').on('show.bs.modal', function (event) {
      $('#viewProduct').modal('hide')
      console.log('ok')
    })

</script>  



  </body>
</html>
