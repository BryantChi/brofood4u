<!-- Img Path Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img_path', '菜單圖片:') !!}
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="img_path" name="img_path" accept="image/*">
        <label class="custom-file-label" for="img_path">Choose file</label>
    </div>
    <div class="img-preview-cover mt-2">
        @if ($menuInfo->img_path ?? null)
            <p for="">預覽</p>
            <img src="{{ env('APP_URL', 'https://brofood4u.tw') . '/uploads/' . $menuInfo->img_path }}"
                style="max-width: 200px; max-height: 200px;">
        @endif
    </div>
</div>
<div class="clearfix"></div>
<div class="col-12"></div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', '狀態:') !!}
    <select name="status" id="status" class="form-control" required>
        <option value="" selected>請選擇</option>
        <option value="1" {{ $menuInfo->status ?? '' == 1 ? 'selected' : '' }}>啟用</option>
        <option value="0" {{ $menuInfo->status ?? '' == 0 ? 'selected' : '' }}>停用</option>
    </select>
</div>


@push('page_scripts')
<script>
    $(document).ready(function() {
        $(document).on('change', '#img_path', function () {
            let fileInput = this;
            let fileReader = new FileReader();

            fileReader.onload = function(e) {
                let previewHtml = `<p for="">預覽</p><img src="${e.target.result}" style="max-width: 200px; max-height: 200px;">`;
                $(fileInput).closest('.form-group').find('.img-preview-cover').html(previewHtml);
            };

            fileReader.readAsDataURL(fileInput.files[0]);
        });
        // $(document).on('change', '[id^="plan_style_"]', function () {
        //     let fileInput = this;
        //     let fileReader = new FileReader();
        //     let id = $(fileInput).attr('id'); // 獲取元素的ID
        //     let previewClass = `.img-preview-s${id.split('_').pop()}`; // 根據ID動態生成對應的預覽class

        //     fileReader.onload = function (e) {
        //         let previewHtml = `<p>預覽</p><img src="${e.target.result}" style="max-width: 200px; max-height: 200px;">`;
        //         $(fileInput).closest('.form-group').find(previewClass).html(previewHtml);
        //     };

        //     fileReader.readAsDataURL(fileInput.files[0]);
        // });
    });
</script>
@endpush
