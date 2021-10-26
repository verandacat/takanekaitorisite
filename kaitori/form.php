<div id="search-bx">
  <div>
    <div class="ftitle mtitle">着物買取店を探す</div>
  </div>
	<form id="form" name="kform" action="<?php echo esc_url(home_url( '/' )); ?>" method="POST">
	
	<table class="form_table">
  	<tbody>
   		<tr class="buhin">
    		<th class="ftitle">着物専門</th>
    		<td>
          <input type="hidden" name="jyoken1" value="" id="jyoken10" checked="checked">
    	    <label for="jyoken11">
            <input type="radio" name="jyoken1" value="1" id="jyoken11" class="radio">
            <span class="radio-icon"></span>
            あり
          </label>
    	    <label for="jyoken12">
            <input type="radio" name="jyoken1" value="2" id="jyoken12" class="radio">
            <span class="radio-icon"></span>
            なし
          </label>
  		  </td>
      	<th class="ftitle">買取までの早さ</th>
  	    <td>
          <input type="hidden" name="jyoken2" value="" id="jyoken20"  checked="checked">
    	    <label for="jyoken21">
            <input type="radio" name="jyoken2" value="1" id="jyoken21" class="radio">
            <span class="radio-icon"></span>
            ★★★
          </label>
          <label for="jyoken22">
            <input type="radio" name="jyoken2" value="2" id="jyoken22" class="radio">
            <span class="radio-icon"></span>
            ★★
          </label>
          <label for="jyoken23">
            <input type="radio" name="jyoken2" value="3" id="jyoken23" class="radio">
            <span class="radio-icon"></span>
            ★
          </label>
  	    </td>
      </tr>
      <tr class="buhin">
      	<th class="ftitle">出張買取</th>
      	<td>
          <input type="hidden" name="jyoken3" value="" id="jyoken30" checked="checked">
    	    <label for="jyoken31">
            <input type="radio" name="jyoken3" value="1" id="jyoken31" class="radio">
            <span class="radio-icon"></span>
            あり
          </label>
    	    <label for="jyoken32">
            <input type="radio" name="jyoken3" value="4" id="jyoken32" class="radio">
            <span class="radio-icon"></span>
            なし
          </label>
        </td>
        <th class="ftitle">現金受取り</th>
        <td>
          <input type="hidden" name="jyoken4" value="" id="jyoken40" checked="checked">
    	    <label for="jyoken41">
            <input type="radio" name="jyoken4" value="1" id="jyoken41" class="radio">
            <span class="radio-icon"></span>
            あり
          </label>
    	    <label for="jyoken42">
            <input type="radio" name="jyoken4" value="4" id="jyoken42" class="radio">
            <span class="radio-icon"></span>
            なし
          </label>
        </td>
      </tr>
      <tr class="buhin">
        <th class="ftitle">事前の電話相談</th>
        <td>
          <input type="hidden" name="jyoken5" value="" id="jyoken50" checked="checked">
    	    <label for="jyoken51">
            <input type="radio" name="jyoken5" value="1" id="jyoken51" class="radio">
            <span class="radio-icon"></span>
            あり
          </label>
    	    <label for="jyoken52">
            <input type="radio" name="jyoken5" value="4" id="jyoken52" class="radio">
            <span class="radio-icon"></span>
            なし
          </label>
        </td>        
      </tr>
  	</tbody>
	</table>
  
	<input type="submit" value="&#xf002; この条件で検索する" class="fas button">
	</form>
	
</div>
