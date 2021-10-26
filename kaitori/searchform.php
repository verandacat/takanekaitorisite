<div id="search-bx">

    <h2>着物買取店を探す</h2>

    <form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
        <input type="hidden" name="s">
        <table id="search">
            <tr>
                <td>
                    <div class="arrow">
                        <select name="specialty" class="pulldowndesign">
                            <option value="">着物専門</option>
                            <option value="1">あり</option>
                            <option value="2">なし</option>
                        </select>
                    </div>
                </td>
                <td>
                    <div class="arrow">
                        <select name="speed" class="pulldowndesign">
                            <option value="">買取までの早さ</option>
                            <option value="1">★★★</option>
                            <option value="2">★★</option>
                            <option value="3">★</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="arrow">
                        <select name="official" class="pulldowndesign">
                            <option value="">出張買取</option>
                            <option value="1">あり</option>
                            <option value="2">なし</option>
                        </select>
                    </div>
                </td>
                <td>
                    <div class="arrow">
                        <select name="cash" class="pulldowndesign">
                            <option value="">現金受取り</option>
                            <option value="1">あり</option>
                            <option value="2">なし</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="arrow">
                        <select name="tel" class="pulldowndesign">
                            <option value="">事前の電話相談</option>
                            <option value="1">あり</option>
                            <option value="2">なし</option>
                        </select>
                    </div>
                </td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">
                    <div>
                        <input type="submit" value="この条件で検索する" />
                    </div>
                </td>
            </tr>
        </table>
    </form>

</div>