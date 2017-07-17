
        <table class="table table-hover border-left-right">
            <thead class=" bold">
                <tr class="success">
                    <td>#</td>
                    <td>Nazwa firmy</td>
                    <td>Nazwa produktu</td>
                    <td>Ilość</td>
                    <td>Oddanie</td>
                    <td>Uwagi</td>
                </tr>
                <tbody>
                    <?php $i=1;?> 
                    @foreach($posts as $post)
                    <tr>
                        <td>
                            <?=$i++?>
                        </td>
                        <td>{{$post->company}}</td>
                        <td>{{$post->product}}</td>
                        <td>{{$post->many}}</td>
                        <td>{{$post->recivedata}}</td>
                        <td>{{$post->notes}}</td>
                    </tr>
                    @endforeach
                    <tbody>
        </table>
