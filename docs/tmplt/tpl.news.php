<?

// замените на свой Access Token
// $access_token = '';	

$access_token = '';	

// функция, которая вытягивает из инсты нужную инфу 
function GetDataFromInstagram($access_token)
{
	$api_url ="https://api.instagram.com/v1/users/self/media/recent/?access_token=".$access_token."&count=20";	
	$connection_c = curl_init();
	curl_setopt($connection_c,CURLOPT_URL, $api_url); 
	curl_setopt($connection_c,CURLOPT_RETURNTRANSFER,1); 
	curl_setopt($connection_c,CURLOPT_TIMEOUT,20);
	$json_return = curl_exec($connection_c);
	curl_close($connection_c);
	return json_decode($json_return);
}
?>
<div class="instagram__block">
<?
// получаем данные из инсты
$user_search = GetDataFromInstagram($access_token);
var_dump($user_search);
// $amount = 12; // выведем 12 фото
// $counter = 0;
// foreach ($user_search->data as $post) 
// {		
// 	echo "<a href='{$post->images->standard_resolution->url}' data-fancybox><img src='{$post->images->low_resolution->url}' alt='{$post->caption->text}' title='{$post->caption->text}'></a>";	
// 	$counter ++;
// 	if($counter >= $amount)
// 	{
// 		break;
// 	}
// }
?>
</div>

<section class="news">
    <div class="news__wrapper">
        <h2>Новости и акции</h2>
        <div class="news__cards cards">
            <div class="cards__row">
                <div class="cards__item card">
                    <a href="https://www.instagram.com/letovoren/">
                        <div class="card__top">
                        <div class="card__top-logo">
                            <img  src="img/ig-logo.jpg" width="35" height="35" alt="Логотип акаунта в Instagram @letovoren">
                            <p>letovoren</p>
                        </div>                    
                        <div class="card__dots"> . . . </div>
                        </div>
                        <div class="card__photo">
                        <img src="img/ig-photo.jpg" alt="Фото пабликации из акаунта">
                        </div>
                        <div class="card__action">
                        <img src="img/ig-actions.png" alt="Изображение управления публикацией">
                        </div>
                    </a>
                </div>
                <div class="cards__item card">
                    <a href="https://www.instagram.com/letovoren/">
                        <div class="card__top">
                        <div class="card__top-logo">
                            <img  src="img/ig-logo.jpg" width="35" height="35" alt="Логотип акаунта в Instagram @letovoren">
                            <p>letovoren</p>
                        </div>                    
                        <div class="card__dots"> . . . </div>
                        </div>
                        <div class="card__photo">
                        <img src="img/ig-photo.jpg" alt="Фото пабликации из акаунта">
                        </div>
                        <div class="card__action">
                        <img src="img/ig-actions.png" alt="Изображение управления публикацией">
                        </div>
                    </a>
                </div>
                <div class="cards__item card">
                    <a href="https://www.instagram.com/letovoren/">
                        <div class="card__top">
                        <div class="card__top-logo">
                            <img  src="img/ig-logo.jpg" width="35" height="35" alt="Логотип акаунта в Instagram @letovoren">
                            <p>letovoren</p>
                        </div>                    
                        <div class="card__dots"> . . . </div>
                        </div>
                        <div class="card__photo">
                        <img src="img/ig-photo.jpg" alt="Фото пабликации из акаунта">
                        </div>
                        <div class="card__action">
                        <img src="img/ig-actions.png" alt="Изображение управления публикацией">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>