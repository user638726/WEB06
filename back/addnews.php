<fieldset>
    <legend>新增文章</legend>
    <table>
        <tr>
            <td>文章標題</td>
            <td><input type="text" name="title" id="title"></td>
        </tr>
        <tr>
            <td>文章分類</td>
            <td>
                <select id="health" name="health">
                    <option value="健康新知">健康新知</option>
                    <option value="菸害防治">菸害防治</option>
                    <option value="癌症防治">癌症防治</option>
                    <option value="慢性病防治">慢性病防治</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>文章內容</td>
            <td><textarea name="text" id="text" style="width:300px;height:300px;"></textarea></td>

        </tr>
        <tr>
            <td><input type="submit" value="新增"><input type="reset" value="重置"></td>
        </tr>
    </table>
</fieldset>