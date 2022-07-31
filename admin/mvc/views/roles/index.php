<?php require_once "./mvc/views/layouts/header.php" ?>
<div class="content p-3"style="margin: 120px auto;">
    <div class="content__button d-flex justify-content-end mb-3">
        <div class="content__button">
            <a href="?url=role/add" class="btn btn-success">ADD ROLE</a>
        </div>
    </div>
    <div class="content__list--catalog">
        <form action="?url=role/deleteAll" method="post">
            <div class="content__list--fruit">
                <table class="table table-hover text-center">
                    <thead>
                        <tr class="table-primary">
                            <th>CHECK</th>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>CODE</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data["role"] as $value): ?>
                            <tr>
                                <td>
                                    <input type="checkbox" name='ids[]' id='check_all' class="form-check-input"
                                    value='<?= $value['role_id'] ?? 0; ?>'>
                                </td>
                                <td><?=$value['role_id']?></td>
                                <td><?=$value['name']?></td>
                                <td><?=$value['code']?></td>
                                <td>
                                    <a href="?url=role/update/<?=$value['role_id']?>"class="btn btn-info"><i class="fas fa-edit"></i></a>
                                    <a onclick="return confirm('Bạn có muốn xóa không!!!')"
                                        href="?url=role/delete/<?=$value['role_id']?>"
                                        class="btn btn-danger"><i class="fas fa-backspace"></i></a>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
            <div class="checkbox">
                <a href="#" class="btn btn-success" id="btn1">Check all</a>
                <a href="#" class="btn btn-warning text-white mx-3" id="btn2">Uncheck all</a>
            </div>
        </form>
        <div class="pagination d-flex justify-content-center mt-5">
            <div class="pagination__item">
                <?php
                    $total_record = $data["totalRecord"];
                    $page = $data['page'];
                    $pages_one = $data['page_one'];
                    $total_page = ceil($total_record / $pages_one);
                    for ($i = 1; $i <= $total_page; $i++) {
                        if ($i == $page) {
                            echo "<a class='active btn btn-info text-white'>$i</a>";
                        } else {
                            echo "<a href='?url=role/index/$i' class=' btn btn-secondary mx-1'>$i</a>";
                        }
                    }
                ?>

            </div>
        </div>
    </div>
</div>
<?php require_once "./mvc/views/layouts/footer.php" ?>


