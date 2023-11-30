<!-- Affiliate Refferal section start -->

<?php $__env->startSection('title', 'Refer Link'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php
$gets = App\Breadcum::first();
?>
<?php if(isset($gets)): ?>
<section id="business-home" class="business-home-main-block">
    <div class="business-img">
        <?php if($gets['img'] !== NULL && $gets['img'] !== ''): ?>
        <img src="<?php echo e(url('/images/breadcum/'.$gets->img)); ?>" class="img-fluid" alt="" />
        <?php else: ?>
        <img src="<?php echo e(Avatar::create($gets->text)->toBase64()); ?>" alt="course" class="img-fluid">
        <?php endif; ?>
    </div>
    <div class="overlay-bg"></div>
    <div class="container-xl">
        <div class="business-dtl">
            <div class="row">
                <div class="col-lg-6">
                    <div class="bredcrumb-dtl">
                        <h1 class="wishlist-home-heading"><?php echo e(__('Affiliate Dashboard')); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php $__currentLoopData = $wallet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wallets): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<section id="affiliate-dashboard" class="affiliate-dashboard-main-block">
    <div class="container-xl">
        <div class="row">
        
            <div class="col-lg-12">
                <div class="affiliate-dashboard-card">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-3">
                            <?php echo e(__('Start referring your friends and start earning !!')); ?>

                        </h3>
                        <p class="card-text text-center mb-4">
                            <?php echo e(__('This is your unique refer link share with your friends and family and start earning !')); ?>

                        </p>
                        <div class="input-group mb-3">
                            <input type="text" id="myInput" class="form-control" value="<?php echo e(url('/register') . '/?ref=' . Auth::user()->affiliate_id); ?>" >
                            <div class="input-group-append refer-btn">
                                <button onclick="myFunction()" class="btn btn-primary" type="button"><i data-feather="copy"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="qr-code-block">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="qr-code-title"><?php echo e(__('Simple QR Code')); ?></h2>
                        </div>
                        <div class="card-body">
                            
                            <?php 
                                $path= url('/register') . '/?ref=' . Auth::user()->affiliate_id;
                            ?>

                            <?php echo QrCode::size(200)->generate($path); ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="affiliate-dashboard-wallet">
                    <h4 class="title"><?php echo e(__('Wallet')); ?></h4>
                    <div class="row mt-4">
                        <div class="col-lg-4 col-3">  
                            <div class="affiliate-dashboard-wallet-img">
                                <img src="<?php echo e(url('/images/wallet.png')); ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8 col-9">
                            <div class="affiliate-dashboard-wallet-dtl">
                                <h6>Total Balance</h6>
                                <p class="wallet-balance"><?php echo e($wallets->balance); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom-script'); ?>
<script>
    function myFunction() {
      /* Get the text field */
      var copyText = document.getElementById("myInput");
    
      /* Select the text field */
      copyText.select();
      copyText.setSelectionRange(0, 99999); /* For mobile devices */
    
      /* Copy the text inside the text field */
      navigator.clipboard.writeText(copyText.value);
      
      /* Alert the copied text */
    }
</script>
<script>
    var speedCanvas = document.getElementById("myChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var dataFirst = {
    label: "Car A - Speed (mph)",
    data: [0, 59, 75, 20, 20, 55, 40],
    lineTension: 0,
    fill: false,
    borderColor: 'rgb(244, 74, 74)'
  };

var dataSecond = {
    label: "Car B - Speed (mph)",
    data: [20, 15, 60, 60, 65, 30, 70],
    lineTension: 0,
    fill: false,
  borderColor: 'rgb(2, 132, 162)'
  };

var speedData = {
  labels: ["0s", "10s", "20s", "30s", "40s", "50s", "60s"],
  datasets: [dataFirst, dataSecond]
};

var chartOptions = {
  legend: {
    display: true,
    position: 'top',
    labels: {
      boxWidth: 80,
      fontColor: 'black'
    }
  }
};

var lineChart = new Chart(speedCanvas, {
  type: 'line',
  data: speedData,
  options: chartOptions
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eui6ftgy1hdt/public_html/resources/views/front/affiliate/dashboard.blade.php ENDPATH**/ ?>