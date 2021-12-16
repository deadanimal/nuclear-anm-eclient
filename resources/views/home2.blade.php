<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Web3</title>
    <meta name="theme-color" content="#ffffff">
  </head>


  <body>
    <h1>Buy</h1>

    <input type="text" name="prod1" id="prod1" value="prod1">
    <button type="button" id="btnBeliBrg">Buy</button>

    <br><br><hr><br>

    <h1>Post Offer</h1>

    <label for="name">Name: </label>
    <input type="text" name="name" id="name" value="name">
    <label for="price">Price: </label>
    <input type="text" name="price" id="price" value="price">
    <button type="button" id="btnInsertBrg">INsert Barang</button>

    <br><br><hr><br>

    <h1>Read</h1>

    <label for="read">Get Barang: </label>
    <input type="text" name="read" id="read" value="">
    <button type="button" id="btnGetBarang">Get Barang</button>
    <p id="gettedBarang"></p>

    <!-- <br><br><hr><br>

    <h1>Read All</h1> -->

    <p id="readAll"></p>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="module">
      $(document).ready(function(){
        // $('#read').text('testerr');
        $(document).on('click','#btnGetBarang',function(){
          var read = $('#read').val();
          getBrg(read);
        });
        $(document).on('click','#btnInsertBrg',function(){
          var nama = $('#name').val();
          var harga = $('#price').val();
          insertBrg(nama,harga);
        });
        $(document).on('click','#btnBeliBrg',function(){
          var prod1 = $('#prod1').val();
          // var harga = $('#price').val();
          beliBrg(prod1);
        });
      });
    
      import { ethers } from "https://cdn.skypack.dev/ethers";

      enableMetamaskLoad(); 
       
      const provider = new ethers.providers.Web3Provider(window.ethereum);

      async function enableMetamaskLoad() {
        await window.ethereum.enable();
      }

      setTimeout(() => {
        
        
      }, 100);

      function getBrg(read){
        const signer = provider.getSigner()
        
        const daiAbi = [
          {
            "constant": false,
            "inputs": [
              {
                "name": "_name",
                "type": "string"
              },
              {
                "name": "_price",
                "type": "uint256"
              }
            ],
            "name": "insertBarang",
            "outputs": [],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "function"
          },
          {
            "constant": true,
            "inputs": [
              {
                "name": "",
                "type": "uint256"
              }
            ],
            "name": "products",
            "outputs": [
              {
                "name": "name",
                "type": "string"
              },
              {
                "name": "price",
                "type": "uint256"
              },
              {
                "name": "user_address",
                "type": "address"
              },
              {
                "name": "dahBeli",
                "type": "bool"
              }
            ],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
          },
          {
            "constant": true,
            "inputs": [
              {
                "name": "i",
                "type": "uint256"
              }
            ],
            "name": "getBarang",
            "outputs": [
              {
                "name": "",
                "type": "string"
              },
              {
                "name": "",
                "type": "uint256"
              },
              {
                "name": "",
                "type": "address"
              },
              {
                "name": "",
                "type": "bool"
              }
            ],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
          },
          {
            "constant": false,
            "inputs": [
              {
                "name": "i",
                "type": "uint256"
              }
            ],
            "name": "beliBarang",
            "outputs": [],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "function"
          },
          {
            "inputs": [
              {
                "name": "_arrayLength",
                "type": "uint256"
              }
            ],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "constructor"
          }
        ];

        // provider.getBlockNumber().then((blockNumber) => {
          // document.getElementById("blockNumber").innerHTML = "Block Number : " + blockNumber;
        // });

        // The Contract object
        const daiContract = new ethers.Contract('0xC0eE2bFBa5A142a45Ce73fAF70a7Ca678E0f22f8', daiAbi, provider);
        // daiContract.retrieve().then((ret)=>{
            // $('#read').val('testerr');
        // })
        const f = daiContract.connect(signer); 
        f.getBarang(read).then((brg) => {
          $('#gettedBarang').text(brg);
        });
      }

      function insertBrg(nama,price){
        const signer = provider.getSigner()
        
        const daiAbi = [
          {
            "constant": false,
            "inputs": [
              {
                "name": "_name",
                "type": "string"
              },
              {
                "name": "_price",
                "type": "uint256"
              }
            ],
            "name": "insertBarang",
            "outputs": [],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "function"
          },
          {
            "constant": true,
            "inputs": [
              {
                "name": "",
                "type": "uint256"
              }
            ],
            "name": "products",
            "outputs": [
              {
                "name": "name",
                "type": "string"
              },
              {
                "name": "price",
                "type": "uint256"
              },
              {
                "name": "user_address",
                "type": "address"
              },
              {
                "name": "dahBeli",
                "type": "bool"
              }
            ],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
          },
          {
            "constant": true,
            "inputs": [
              {
                "name": "i",
                "type": "uint256"
              }
            ],
            "name": "getBarang",
            "outputs": [
              {
                "name": "",
                "type": "string"
              },
              {
                "name": "",
                "type": "uint256"
              },
              {
                "name": "",
                "type": "address"
              },
              {
                "name": "",
                "type": "bool"
              }
            ],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
          },
          {
            "constant": false,
            "inputs": [
              {
                "name": "i",
                "type": "uint256"
              }
            ],
            "name": "beliBarang",
            "outputs": [],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "function"
          },
          {
            "inputs": [
              {
                "name": "_arrayLength",
                "type": "uint256"
              }
            ],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "constructor"
          }
        ];

        // provider.getBlockNumber().then((blockNumber) => {
          // document.getElementById("blockNumber").innerHTML = "Block Number : " + blockNumber;
        // });

        // The Contract object
        const daiContract = new ethers.Contract('0xC0eE2bFBa5A142a45Ce73fAF70a7Ca678E0f22f8', daiAbi, provider);
        // daiContract.retrieve().then((ret)=>{
            // $('#read').val('testerr');
        // })
        const f = daiContract.connect(signer); 

        f.insertBarang(nama,price);
        // console.log(nama,price);
      }

      function beliBrg(prod1){
        const signer = provider.getSigner()
        
        const daiAbi = [
          {
            "constant": false,
            "inputs": [
              {
                "name": "_name",
                "type": "string"
              },
              {
                "name": "_price",
                "type": "uint256"
              }
            ],
            "name": "insertBarang",
            "outputs": [],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "function"
          },
          {
            "constant": true,
            "inputs": [
              {
                "name": "",
                "type": "uint256"
              }
            ],
            "name": "products",
            "outputs": [
              {
                "name": "name",
                "type": "string"
              },
              {
                "name": "price",
                "type": "uint256"
              },
              {
                "name": "user_address",
                "type": "address"
              },
              {
                "name": "dahBeli",
                "type": "bool"
              }
            ],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
          },
          {
            "constant": true,
            "inputs": [
              {
                "name": "i",
                "type": "uint256"
              }
            ],
            "name": "getBarang",
            "outputs": [
              {
                "name": "",
                "type": "string"
              },
              {
                "name": "",
                "type": "uint256"
              },
              {
                "name": "",
                "type": "address"
              },
              {
                "name": "",
                "type": "bool"
              }
            ],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
          },
          {
            "constant": false,
            "inputs": [
              {
                "name": "i",
                "type": "uint256"
              }
            ],
            "name": "beliBarang",
            "outputs": [],
            "payable": true,
            "stateMutability": "payable",
            "type": "function"
          },
          {
            "inputs": [
              {
                "name": "_arrayLength",
                "type": "uint256"
              }
            ],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "constructor"
          }
        ];

        // provider.getBlockNumber().then((blockNumber) => {
          // document.getElementById("blockNumber").innerHTML = "Block Number : " + blockNumber;
        // });

        // The Contract object
        const daiContract = new ethers.Contract('0xC0eE2bFBa5A142a45Ce73fAF70a7Ca678E0f22f8', daiAbi, provider);
        // daiContract.retrieve().then((ret)=>{
            // $('#read').val('testerr');
        // })
        const f = daiContract.connect(signer); 


        f.getBarang(prod1).then((brg) => {
          console.log(brg[1].toString());
          // console.log(prod1);
          //const options = {value: '12'}
          f.beliBarang(prod1);
        });

        // f.beliBarang(prod1, options);
        // console.log(nama,price);
      }

    </script>
  </body>

</html>