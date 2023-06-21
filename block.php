<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Block Explore</title>
    <link rel="stylesheet" href="./css/block.css">
    <link rel="stylesheet" href="./css/main.css">
    
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>
<?php
session_start();
include 'navbar.php';

?>
   

    <div class="functions">
        <h1>  Block Operations  </h1>
        <h3>Owner of</h3>
        <div class="fl" id="owner" class="owner-of">
            <input id="token_id" placeholder="token id"  type="text">
            <button>Owner Of</button>
            <div class="output">
                Output Address
            </div>
        </div>
        <h3>Transfer Currency</h3>
        <div class="fl" id="transfer-eth">
            <input placeholder="amount" id="amount" type="text">
            <input placeholder="address" id="address" type="text">
            <button>Send</button>
        </div>
        <h3>Transfer NFT</h3>
        <div class="fl" class="transfer-nft">
            <input placeholder="NFT reciever address" id="reciever-address" type="text">
            <input placeholder="token id" id="token-id" type="text">
            <button>Transfer</button>
        </div>

    </div>
    <script src=""></script>
    <script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js"
        type="application/javascript"></script>
    <script src="./scripts/block.js"></script>
    <script>
    var provider ;
    var signer;
    var account = 0;
   


var  init = async function(){
   
if(window.ethereum){
    provider = new ethers.providers.Web3Provider(window.ethereum)
console.log(provider);
     signer = provider.getSigner()
     console.log(signer);
     account = await signer.getAddress();
    // console.log(account+'acc')
    
   
   if(account){
       $('#acc').html(`${account.slice(0,5)+'. . . '+account.slice(account.length-5,account.length)}`);
   }
   send();

 

}};

$(document).on('click', '#acc', function(){
    console.log('faf ')
    init();
    

})





async function send(){
   
    await provider.send("eth_requestAccounts", []);
    signature = await signer.signMessage("Connect Metamask ? ");
    // account = signer.getAddress();
    account = await signer.getAddress();
    sessionStorage.setItem('account',account);

     account = sessionStorage.getItem('account');
    console.log(account);
    if(account){
       $('#acc').html(`${account}`);
   }
   


    
   
}

</script>

    

</body>
</html>