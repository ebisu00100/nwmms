<div>
    <input id="acd-check1" name="radio-l" class="acd-check" type="checkbox" onclick="radioClick(this)">
    <label class="acd-label" for="acd-check1">申請書</label>
    <div class="acd-content">
        <div>hello.world!</div>
    </div>

    <input id="acd-check2" name="radio-l" class="acd-check" type="checkbox" onclick="radioClick(this)">
    <label class="acd-label" for="acd-check2">予実管理</label>
    <div class="acd-content">
        <input id="acd-check-m1" name="radio-m" class="acd-check" type="checkbox" onclick="radioClick(this)">
        <label class="acd-label" for="acd-check-m1">個人</label>
        <div class="acd-content">
            <div>個人</div>
        </div>
        <input id="acd-check-m2" name="radio-m" class="acd-check" type="checkbox" onclick="radioClick(this)">
        <label class="acd-label" for="acd-check-m2">プロジェクト</label>
        <div class="acd-content">
            <div>プロジェクト</div>
        </div>
    </div>

    <input id="acd-check3" name="radio-l" class="acd-check" type="checkbox" onclick="radioClick(this)">
    <label class="acd-label" for="acd-check3">マスタメンテナンス</label>
    <div class="acd-content">
        <input id="acd-check-m3" name="radio-m" class="acd-check" type="checkbox" onclick="radioClick(this)">
        <label class="acd-label" for="acd-check-m3">社員マスタ</label>
        <div class="acd-content">
            <div>プロジェクトマスタ</div>
        </div>
        <input id="acd-check-m4" name="radio-m" class="acd-check" type="checkbox" onclick="radioClick(this)">
        <label class="acd-label" for="acd-check-m4">プロジェクトマスタ</label>
        <div class="acd-content">
            <a herf="{{ url('/Master/Project') }}">プロジェクトマスタ</a>
        </div>
    </div>

    <input id="acd-check4" name="radio-l" class="acd-check" type="checkbox" onclick="radioClick(this)">
    <label class="acd-label" for="acd-check4">その他</label>
    <div class="acd-content">
        <input id="acd-check-m5" name="radio-m" class="acd-check" type="checkbox" onclick="radioClick(this)">
        <label class="acd-label" for="acd-check-m5">AAAAAAAA</label>
        <div class="acd-content">
            <div>AAAAAAAA</div>
        </div>
        <input id="acd-check-m6" name="radio-m" class="acd-check" type="checkbox" onclick="radioClick(this)">
        <label class="acd-label" for="acd-check-m6">BBBBBBBB</label>
        <div class="acd-content">
            <div>BBBBBBBB</div>
        </div>
    </div>
</div>
<script>
    function radioClick(me){
        var checkFlg = me.checked;
        var checkList = document.getElementsByName(me.name);
        checkList.forEach(function (item){
            item.checked = false;
        });
        me.checked = checkFlg;
    }
</script>