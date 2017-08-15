<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */

$this->title = 'Home Page';
?>
<script>
var divs = ["tabs","trivia","guest"];
var visibleDivId = null;

function toggleVisibility(divId) {
    if (visibleDivId === divId) {
        visibleDivId = null;
    } else {
        visibleDivId = divId;
    }
    hideNonVisibleDivs();
}

function hideNonVisibleDivs() {
    var i, divId, div;
    for (i = 0; i < divs.length; i++) {
        divId = divs[i];
        div = document.getElementById(divId);
        if (visibleDivId === divId) {
            div.style.display = "block";
        } else {
            div.style.display = "none";
        }
    }
}
</script>


</table>
</div>
</div>
				<div id="trivia">
					<div class="box">
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
					<script>
						$(document).ready(function()
						{
							$("#show").click(function(){
							$("answers").toggle(500);
						});
						});
					</script>
<p>
        <?php
			if (Yii::$app->user->isGuest) {
				
			} elseif(Yii::$app->user->identity->username) {
				echo '<a href="http://127.0.0.1/exercise7/web/index.php?r=trivia" class="btn btn-lg btn-success">ADD TRIVIA</a>';
			}
			?>
    </p>
					<h1>Trivias</h1>
					
					<?php foreach ($trivia as $trivia): ?>
								<strong><?= Html::encode("{$trivia->QUESTION}") ?>:</strong>
							<br></br>	
								<answers style=display:none><?= $trivia->ANSWER ?></answers>
							<br></br>		
					<?php endforeach; ?>
					<p><a class="btn btn-lg btn-success" id="show">SHOW / HIDE</a></p>
					</div>
				</div>
				
				<div id="guest">
					<div class="box">
						<p>
        <?php
			if (Yii::$app->user->isGuest) {
				echo '<a href="http://127.0.0.1/exercise7/web/index.php?r=guest%2Fcreate" class="btn btn-lg btn-success">ADD DATA</a>';
			} elseif(Yii::$app->user->identity->username) {
				echo '<a href="http://127.0.0.1/exercise7/web/index.php?r=guest%2Fcreate" class="btn btn-lg btn-success">ADD DATA</a>';
				echo '<a href="http://127.0.0.1/exercise7/web/index.php?r=guest" class="btn btn-lg btn-success" style="margin-left: 10px;">EDIT DATA</a>';
			}
			?>
    </p>
						<div class="guestform-index">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'user_id',
            'complete_name',
            'nickname',
            'Email_Address:email',
            'Home_Address',
            'gender',
            'cellphone',
            'comment',
        ],
    ]); ?>
</div>
					</div>
				</div>
				
				</div>
			</div>
</div>
</div>

