Cannacoin-API
=============

Need a quick arbitrage calculator? Want to build a ticker? Need to create a cannastats or bot of your own? Now you can! Below is a list of available data points you can use in your own applications and tools! In the future we are looking to incorperate a full authentication system with API keys and more scope definitions. Over time you will see minor changes to the API but we plan to have everything documented and hosted on the official site soon.

-------------------


**Network/Coin data**

* **ccn_usd:** CCN to USD Rate *(uses average last exchange rates for both CCN/USD)*

* **ccn_btc:** CCN to BTC Rate *(uses average last exchange rates for both CCN/USD)*

* **marketcap:** Cannacoin market cap represented in number format *(Average Last CCN * Total Number of coins)*

* **marketcap_formatted:** Cannacoin market cap represented in us_EN local currency format (USD, $) *(Average Last CCN price * Total Number of coins)*

* **total_coins:** Current supply of Cannacoins

* **total_coins_formated:** Current supply of Cannacoins with thousands separator

* **btc_last:** BTC Last price represented in us_EN local currency format (USD, $)


**Swisscex**

* **ask:** Current ask price

* **bid:** Current bid price

* **last:** Current last price

* **last_volume:** Last volume of traded coins

* **buy_volume:**  Current buy volume 

* **sell_volume:** Current sell volume

* **volume24:**  24 Hour volume

* **high24:** 24 hour high price

* **low24:** 24 hour low price

* **change:**  24 hour change


**Bittrex**

* **ask:** Current ask price

* **bid:** Current bid price

* **last**: Current last price

* **high24:** 24 hour high price

* **low24:** 24 hour low price

* **volume:** 24 hour volume

* **volume_btc:** 24 hour BTC volume 

* **open_sell_orders:** Number of open sell orders

* **open_buy_orders:** Number of open buy orders

* **timestamp:**  timestamp of last update


For developers who want to get started right away, I've gone ahead and created a PHP example/bootstrap that will provide the code needed to parse all the data for use in your own PHP code!

-------------------

## View the API here: 
http://cannacoin.cc/api/v1


# View the API example/bootstrap here: 
http://cannacoin.cc/api/v1/example.php
