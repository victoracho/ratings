
<?php
// en caso de que se llame al widget dentro de bitrixh
if($_REQUEST['PLACEMENT_OPTIONS']){
        require_once(__DIR__ . '/crest.php');
        $placement_options = json_decode($_REQUEST['PLACEMENT_OPTIONS'], true);
        $deal = null;
        if($placement_options['ID']){
                $deal = CRest::call(
                  'crm.deal.get',
                  [
                    'ID' => $placement_options['ID']
                  ]
                );
                $deal= $deal['result'];
                $placement_options['deal'] = $deal['ID'];
                $placement_options['deal_name'] = $deal['TITLE'];
        }

        $user = CRest::call(
          'user.current',
          [
            'auth' => $_REQUEST['AUTH_ID']
          ]
        );

        $user = $user['result'];
        $placement_options['user'] = $user['NAME'].' '.$user['LAST_NAME'];
}

// en caso de que se llame al widget fuera de bitrix
if(!$_REQUEST){
        $placement_options['user'] =  '';
        $placement_options['deal'] =  '';
        $placement_options['deal_name'] = '';
}

if (!$_REQUEST['AUTH_ID']){
        die("Open From Bitrix CRM to access");
}
?>
<!DOCTYPE html>
<html><head><title>Quasar Admin</title>
  <meta charset=utf-8><meta name=description content="Quasar Admin">
  <meta name=format-detection content="telephone=no">
  <meta name=msapplication-tap-highlight content=no>
  <meta name=viewport content="user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1,width=device-width">
  <script async defer src=https://maps.googleapis.com/maps/api/js></script><link rel=icon type=image/png sizes=128x128 href="/icons/favicon-128x128.png">
  <link rel=icon type=image/png sizes=96x96 href="/icons/favicon-96x96.png"><link rel=icon type=image/png sizes=32x32 href="/icons/favicon-32x32.png">
  <link rel=icon type=image/png sizes=16x16 href="/icons/favicon-16x16.png"><link rel=icon type=image/ico href="/favicon.ico">
  <script type="module" crossorigin src="assets/index.2f7cf4ae.js"></script>
  <link rel="stylesheet" href="assets/index.19095f39.css">
 <script src="https://api.bitrix24.com/api/v1/"></script>
  <script>
        var user = '<?php echo $placement_options['user']; ?>';
        var deal= '<?php echo $placement_options['deal']; ?>';
        var deal_name= '<?php echo $placement_options['deal_name']; ?>';
  </script>

</head><body><div id=q-app></div>

  <?php
if(!isset($placement_options['opened']))
{
?>
<script>
    BX24.init(function() {
                BX24.openApplication(
                        {
                                'opened': true,
                                'user': user,
                                'deal': deal,
                                'deal_name': deal_name,
                        },
                        function()
                        {
                                // this handler will activate, if the application is closed
                                alert('Application closed!')
                        }
                );
    });
<?php
}
?>
</script>
</body>
</html>
