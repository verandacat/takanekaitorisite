
	<style>
		p {
			margin: 0;
		}
		#myTable {
			width: 90%;
			table-layout: fixed;
			margin: auto;
			border: 1px solid #eee;
			border-collapse: collapse;
		}
		#myTable .tablesorter-header {
			cursor: pointer;
			outline: none;
		}
		#myTable .tablesorter-header-inner::after { 
			content: '';
			position: absolute;
			width: 20px;
			height: 15px;
			background-image: url('<?php bloginfo('template_url'); ?>/img/icons/sort__icon.svg') ;
			background-repeat: no-repeat;
			background-size: contain;
			right: 10px;
			top: 50%;
			transform: translateY(-50%);
		}
		#myTable th {
			background: #e94a4a;
			color: white;
			font-size: 1rem;
			position: relative;
			padding: 15px!important;
			font-weight: bold;
		}
		#myTable th, #myTable td {
			vertical-align: middle;
			text-align: center;
			border: 1px solid #eee;
			padding: 5px;
		}
		#myTable td p {
			text-align: center;
		}
		#myTable td p:first-child {
			margin-bottom: 4px;
			text-align: center;
		}
		#myTable td p:nth-child(2) {
			font-weight: bold;
		
		}
		#myTable td p>img {
			width: 90px;
			vertical-align: middle;
		}
		@media (max-width: 680px) {
			#myTable {
				width: 100%;
			}
			#myTable .tablesorter-header-inner::after { 
				right: -3px;
				height: 12px;
			}
			
			#myTable th, #myTable td {
				font-size: 0.8rem;
			}
			#myTable th {
				padding: 10px 4px!important;
			}
			#myTable td p>img {
			width: 95%;
			vertical-align: middle;
			}
		}
	</style>

	<table class="tablesorter" id="myTable">
		<thead>
			<tr>
				<th>サービス名</th>
				<th>評価</th>
				<!-- <th class="{sorter: 'metadata'}">名前</th> -->
				<th class="{sorter: 'metadata'}">査定方法</th>
				<th>対応地域</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<p>
						<img src="<?php bloginfo('template_url'); ?>/img/ranking-item-04.jpg">
					</p>
					<p>ザ・ゴールド</p>
				</td>
				<td>
					<p>
						<img src="<?php bloginfo('template_url'); ?>/img/icons/star__45.svg">
					</p>
					<p>4.5</p>
				</td>
				<td class="{sortValue: 1}">出張・店頭・宅配</td>
				<td>全国</td>
			</tr>
			<tr>
				<td>
					<p>
						<img src="<?php bloginfo('template_url'); ?>/img/ranking-item-01.jpg">
					</p>
					<p>バイセル</p>
				</td>
				<td>
					<p>
					<img src="<?php bloginfo('template_url'); ?>/img/icons/star__45.svg">
					</p>
					<p>4.2</p>
				</td>
				<td class="{sortValue: 1}">出張・店頭・宅配</td>
				<td>全国</td>
			</tr>
			<tr>
				<td>
					<p>
						<img src="<?php bloginfo('template_url'); ?>/img/ranking-item-02.jpg">
					</p>
					<p>買取プレミアム</p>
				</td>
				<td>
					<p>
					<img src="<?php bloginfo('template_url'); ?>/img/icons/star__4.svg">
					</p>
					<p>3.7</p>
				</td>
				<td class="{sortValue: 2}">出張・宅配</td>
				<td>全国</td>
			</tr>
			<tr>
				<td>
					<p>
						<img src="<?php bloginfo('template_url'); ?>/img/fuku.jpg">
					</p>
					<p>福ちゃん</p>
				</td>
				<td>
					<p>
					<img src="<?php bloginfo('template_url'); ?>/img/icons/star__3.svg">
					</p>
					<p>3.0</p>
				</td>
				<td class="{sortValue: 1}">出張・店頭・宅配</td>
				<td>全国</td>
			</tr>
			<tr>
				<td>
					<p>
						<img src="<?php bloginfo('template_url'); ?>/img/otakaraya.jpg">
					</p>
					<p>おたからや</p>
				</td>
				<td>
					<p>
					<img src="<?php bloginfo('template_url'); ?>/img/icons/star__3.svg">
					</p>
					<p>3.0</p>
				</td>
				<td class="{sortValue: 1}">出張・店頭・宅配</td>
				<td>全国</td>
			</tr>
			<tr>
				<td>
					<p>
						<img src="<?php bloginfo('template_url'); ?>/img/mangakuya.jpg">
					</p>
					<p>まんがく屋</p>
				</td>
				<td>
					<p>
					<img src="<?php bloginfo('template_url'); ?>/img/icons/star__3.svg">
					</p>
					<p>3.0</p>
				</td>
				<td class="{sortValue: 1}">出張・店頭・宅配</td>
				<td>全国</td>
			</tr>
			<tr>
				<td>
					<p>
						<img src="<?php bloginfo('template_url'); ?>/img/tansuya.jpg">
					</p>
					<p>たんす屋</p>
				</td>
				<td>
					<p>
					<img src="<?php bloginfo('template_url'); ?>/img/icons/star__3.svg">
					</p>
					<p>3.0</p>
				</td>
				<td class="{sortValue: 1}">出張・店頭・宅配</td>
				<td>全国</td>
			</tr>
			<tr>
				<td>
					<p>
						<img src="<?php bloginfo('template_url'); ?>/img/nanboya.jpg">
					</p>
					<p>なんぼや</p>
				</td>
				<td>
					<p>
					<img src="<?php bloginfo('template_url'); ?>/img/icons/star__3.svg">
					</p>
					<p>2.7</p>
				</td>
				<td class="{sortValue: 2}">出張・店頭</td>
				<td>全国</td>
			</tr>
			<tr>
				<td>
					<p>
						<img src="<?php bloginfo('template_url'); ?>/img/kimono10.jpg">
					</p>
					<p>宅配買取の着物10</p>
				</td>
				<td>
					<p>
					<img src="<?php bloginfo('template_url'); ?>/img/icons/star__25.svg">
					</p>
					<p>2.5</p>
				</td>
				<td>宅配</td>
				<td>全国</td>
			</tr>
			<tr>
				<td>
					<p>
						<img src="<?php bloginfo('template_url'); ?>/img/hisaya.jpg">
					</p>
					<p>宅配着物買取の久屋</p>
				</td>
				<td>
					<p>
					<img src="<?php bloginfo('template_url'); ?>/img/icons/star__25.svg">
					</p>
					<p>2.5</p>
				</td>
				<td class="{sortValue: 3}">宅配</td>
				<td>全国</td>
			</tr>
			<tr>
				<td>
					<p>
						<img src="<?php bloginfo('template_url'); ?>/img/yamatoku.jpg">
					</p>
					<p>ヤマトク</p>
				</td>
				<td>
					<p>
					<img src="<?php bloginfo('template_url'); ?>/img/icons/star__25.svg">
					</p>
					<p>2.5</p>
				</td>
				<td class="{sortValue: 3}">宅配</td>
				<td>全国</td>
			</tr>
			<tr>
				<td>
					<p>
						<img src="<?php bloginfo('template_url'); ?>/img/manzoku.jpg">
					</p>
					<p>まんぞく買取.com</p>
				</td>
				<td>
					<p>
					<img src="<?php bloginfo('template_url'); ?>/img/icons/star__25.svg">
					</p>
					<p>2.5</p>
				</td>
				<td class="{sortValue: 3}">宅配</td>
				<td>全国</td>
			</tr>
		</tbody>
	</table>
	
