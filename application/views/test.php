<div class="container mt-5">
    <div class="d-flex justify-content-between">
        <h3>Testing Bootstrap, Fontawesome, Sweetalert</h3>
        <button class="btn btn-primary button-click">
            <i class="fa-solid fa-plus"></i> 
            Click Me
        </button>
    </div>
    <hr>

    <table class="table table-striped table-hover table-bordered table-dark">
        <thead>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            <th scope="col">Action</th> 
        </thead>
        <tbody>
            <?php 
            $count = 0;
            foreach($dummy as $dm) :
            $count++;
            ?>
                <tr>
                <th scope="row"><?= $count ?></th>
                <td><?= $dm['first'] ?></td>
                <td><?= $dm['last'] ?></td>
                <td><?= $dm['handle'] ?></td>
                <td>
                    <a class="badge text-bg-success">
                        <i class="fa-solid fa-edit"></i> 
                        Edit
                    </a>
                    <a href="" class="badge text-bg-danger">
                        <i class="fa-solid fa-trash"></i>
                        Delete
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    const buttonClick = document.querySelector('.button-click')
    buttonClick.addEventListener('click', () => {
        Swal.fire('Testing Sweetalert')
    })
</script>