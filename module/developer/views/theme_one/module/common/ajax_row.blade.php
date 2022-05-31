<tr>
    <td>
        <input type="text" class="form-control" name="data[{{ $uniqueid }}][column]">
    </td>
    <td>
        <select name="data[{{ $uniqueid }}][type]" class="form-control">
            <option value="string">String</option>
            <option value="longText">Long Text</option>
            <option value="unsignedBigInteger">Integer</option>
            <option value="boolean">Boolean</option>
            <option value="enum">Enum</option>
        </select>
    </td>
    <td>
        <input type="number" class="form-control" name="data[{{ $uniqueid }}][length]">
    </td>
    <td>
        <input type="text" class="form-control" name="data[{{ $uniqueid }}][default]">
    </td>
    <td>
        <input type="radio" name="data[{{ $uniqueid }}][unique]" value="1"> Yes
        <input type="radio" name="data[{{ $uniqueid }}][unique]" checked value="0"> No
    </td>
    <td>
        <input type="radio" name="data[{{ $uniqueid }}][nullable]" value="1"> Yes
        <input type="radio" name="data[{{ $uniqueid }}][nullable]" checked value="0"> No
    </td>
    <th>
        <a href="javascript:void(0)" class="btn btn-xs btn-danger delete_row"><i class="fa fa-minus"></i></a>
    </th>
</tr>
