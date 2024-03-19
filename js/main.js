const options = {
  method: "GET",
  headers: { "x-cg-demo-api-key": "CG-MB6x7tyU8dPVbdnipZFriMkm" },
};

fetch(
  "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin%2Cethereum&vs_currencies=eur&include_24hr_change=true&precision=2",
  options
)
  .then(async (response) => {
    try {
      const data = await response.json();
      
      const xhr = new XMLHttpRequest();
      xhr.open('POST', './js/traitement.php', true);
      xhr.setRequestHeader('Content-Type', 'application/json');
      xhr.send(JSON.stringify(data));
      
      console.log(data);
    } catch (e) {
      console.log(e);
    }
  })
  .catch((error) => console.log("error", error));