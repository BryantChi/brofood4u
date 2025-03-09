<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="menu-infos-table">
            <thead>
            <tr>
                <th>菜單圖片</th>
                <th>狀態</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($menuInfos as $menuInfo)
                <tr>
                    <td>{{ env('APP_URL', 'http://brofood4u.powerchi.com.tw') . '/uploads/' . $menuInfo->img_path }}</td>
                    <td>{{ $menuInfo->status == 1 ? '啟用' : '停用' }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['admin.menuInfos.destroy', $menuInfo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{{ route('admin.menuInfos.show', [$menuInfo->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-eye"></i>
                            </a> --}}
                            <a href="{{ route('admin.menuInfos.edit', [$menuInfo->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'button', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return check(this)"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $menuInfos])
        </div>
    </div>
</div>
