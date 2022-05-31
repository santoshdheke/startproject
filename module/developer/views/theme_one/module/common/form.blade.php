<div class="form-group">
    <label>Module :</label>
    <select name="module" class="form-control">
        <option value="">Choose Module</option>
        @foreach($modules as $module)
            <option value="{{ $module }}">{{ ucfirst($module) }}</option>
        @endforeach
    </select>
    @if($errors->has('module'))
        <div class="form-error-message">{{ $errors->first('module') }}</div>
    @endif
</div>

<div class="form-group">
    <label>Class :</label>
    <input type="text" name="table" placeholder="Enter Class" value="{{ old('table') ?? $row->table ?? '' }}"
           class="form-control{{ ($errors->has('table'))?' form-error':'' }}">
    @if($errors->has('table'))
        <div class="form-error-message">{{ $errors->first('table') }}</div>
    @endif
</div>

<div class="form-group">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Column</th>
            <th>Type</th>
            <th>length</th>
            <th>Default</th>
            <th>unique</th>
            <th>nullable</th>
            <th>
                <a href="javascript:void(0)" id="add_row" class="btn btn-xs btn-success"><i class="fa fa-plus"></i></a>
            </th>
        </tr>
        </thead>
        <tbody id="new_row">
        <tr>
            <td>
                <input type="text" class="form-control" name="data[0][column]">
            </td>
            <td>
                <select name="data[0][type]" class="form-control">
                    <option value="string">String</option>
                    <option value="longText">Long Text</option>
                    <option value="unsignedBigInteger">Integer</option>
                    <option value="boolean">Boolean</option>
                    <option value="enum">Enum</option>
                </select>
            </td>
            <td>
                <input type="number" class="form-control" name="data[0][length]">
            </td>
            <td>
                <input type="text" class="form-control" name="data[0][default]">
            </td>
            <td>
                <input type="radio" name="data[0][unique]" value="1"> Yes
                <input type="radio" name="data[0][unique]" checked value="0"> No
            </td>
            <td>
                <input type="radio" name="data[0][nullable]" value="1"> Yes
                <input type="radio" name="data[0][nullable]" checked value="0"> No
            </td>
            <th>
                <a href="javascript:void(0)" class="btn btn-xs btn-danger delete_row"><i class="fa fa-minus"></i></a>
            </th>
        </tr>
        </tbody>
    </table>
</div>

@push('js')
    <script>
        $('#add_row').click(function () {
            $.get('{{ url('developer/themenepal/module/ajax/add/row') }}',function(html){
                $('#new_row').append(html);
            });
        });

        $(document).on('click', '.delete_row', function () {
            $(this).parent().parent().remove();
        });
    </script>
@endpush
