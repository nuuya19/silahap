<?php 

function text_limiter($text,$limit)
{
	// jika panjang karakter $text lebih dari $limit maka dipotong sejumlah $limit

	// jika tidak, maka tidak dilakukan apa2

	if(strlen($text) > $limit)
	{
		$text = substr($text, 0, $limit);
	}
	return $text;
}

function redirect_to_page($page)
{
	echo "<script type='text/javascript'>
		window.location.replace('$page')
	</script>";
}