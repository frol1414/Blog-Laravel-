<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </div>
</div>
@if($item->exists)
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li>ID:{{$item->id}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Создано</label>
                    <input id="title" value="{{$item->created_at}}" type="text" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label for="title">Изменено</label>
                    <input id="title" value="{{$item->updated_at}}" type="text" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label for="title">Опубликовано</label>
                    <input id="title" value="{{$item->published_at}}" type="text" class="form-control" disabled>
                </div>
            </div>
        </div>
    </div>
@endif
