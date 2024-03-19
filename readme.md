curl --request GET \
     --url 'https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=eur&include_market_cap=false&include_24hr_vol=false&include_24hr_change=true&include_last_updated_at=false&precision=2' \
     --header 'x-cg-demo-api-key: CG-hnWwJPttQ34oKWYax8XEbBcx'
     

curl --request GET \
     --url 'https://api.coingecko.com/api/v3/simple/price?ids=ethereum&vs_currencies=eur&include_market_cap=false&include_24hr_vol=false&include_24hr_change=true&include_last_updated_at=false&precision=2' \
     --header 'x-cg-demo-api-key: CG-hnWwJPttQ34oKWYax8XEbBcx'
