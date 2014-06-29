<?php
	// Get Cannacoin API conetents/data
	$api = file_get_contents('http://cannacoin.cc/api/v1');
		
	// Decode API data to JSON format
	$decode_api = json_decode($api);
		
	// Assign Cannacoin Data to a variable	
	$ccn_usd = $decode_api->data->ccn_usd;
	$ccn_btc = $decode_api->data->ccn_btc;
	$market_cap = $decode_api->data->market_cap;
	$market_cap_formatted = $decode_api->data->market_cap_formatted;
	$total_coins = $decode_api->data->total_coins;
	$total_coins_formatted = $decode_api->data->total_coins_formatted;
	$btc_last = $decode_api->data->btc_last;
		
	// Assign Swisscex Exchange Data to a variable	
	$swisscex_ask = $decode_api->exchange->swisscex->ask;
	$swisscex_bid = $decode_api->exchange->swisscex->bid;
	$swisscex_last = $decode_api->exchange->swisscex->last;
	$swisscex_last_volume = $decode_api->exchange->swisscex->last_volume;
	$swisscex_buy_volume = $decode_api->exchange->swisscex->buy_volume;
	$swisscex_sell_volume = $decode_api->exchange->swisscex->sell_volume;
	$swisscex_volume24 = $decode_api->exchange->swisscex->volume24;
	$swisscex_high24 = $decode_api->exchange->swisscex->high24;
	$swisscex_low24 = $decode_api->exchange->swisscex->low24;
	$swisscex_change = $decode_api->exchange->swisscex->change;		
	
	// Assign Bittrex Exchange Data to a variable	
	$bittrex_ask = $decode_api->exchange->bittrex->ask;
	$bittrex_bid = $decode_api->exchange->bittrex->bid;
	$bittrex_last = $decode_api->exchange->bittrex->last;
	$bittrex_high = $decode_api->exchange->bittrex->high24;
	$bittrex_low = $decode_api->exchange->bittrex->low24;
	$bittrex_volume = $decode_api->exchange->bittrex->volume;
	$bittrex_volume_btc = $decode_api->exchange->bittrex-volume_btc;
	$bittrex_open_sell_orders = $decode_api->exchange->bittrex->open_sell_orders;
	$bittrex_open_buy_orders = $decode_api->exchange->bittrex->open_buy_orders;		
	$bittrex_timestamp = $decode_api->exchange->bittrex->timestamp;				
		
	echo 'The last price for Cannacoin at bittrex was: '.$bittrex_last.' BTC';
	
?>