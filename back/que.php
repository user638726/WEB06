<fieldset style="width:70%;margin:auto">
    <legend>新增問卷</legend>
    <table style="width:100%">
        <tr>
            <td class='clo'>問卷名稱</td>
            <td>
                <input type="text" name="subject" id="subject" style="width:80%">
            </td>
        </tr>
        <tr class='clo'>
            <td colspan='2'>
                <div id="options">
                    選項<input type="text" name="option[]" id="" style="width:80%">
                    <button onclick="more()">更多</button>
                </div>
            </td>
        </tr>
    </table>
    <div class="ct">
        <button onclick="send()">新增</button>
        <button onclick="resetForm()">清空</button>
    </div>
</fieldset>

<script>
function more() {
    let el = `<div>選項<input type="text" name="option[]" id="" style="width:80%"></div>`
    $("#options").before(el)
}

function send() {
    let subject = $("#subject").val()
    let options = $("input[name='option[]']").map((id, item) => $(item).val()).get()
    //console.log(subject,options)

    $.post("./api/add_que.php", {
        subject,
        options
    }, (res) => {
        //console.log(res)
        location.reload()
    })
}

function resetForm() {
    $("input[type='text']").val("")
}
</script>
<fieldset>
    <legend>問卷列表</legend>

    <table style="width:90%">
        <tr>
            <th>編號</th>
            <th>問卷題目</th>
            <th>投票總數</th>
            <th>結果</th>
            <th>狀態</th>
        </tr>
        <?php 
        $rows=$Que->all(['main_id'=>0]);
        foreach($rows as $key => $row):

        ?>
        <tr>
            <td><?=$key+1;?>.</td>
            <td width="60%"><?=$row['text'];?></td>
            <td class='ct'><?=$row['vote'];?></td>
            <td class='ct'><a href='?do=result&id=<?=$row['id'];?>'>結果</a></td>
            <td class='ct'>
                <?php 
                if(!isset($_SESSION['user'])){
                    echo "請先登入";
                }else{
                    echo "<a href='?do=vote&id={$row['id']}'>我要投票</a>";
                }
                ?>
            </td>
        </tr>
        <?php 
        endforeach;
        ?>
    </table>

</fieldset>