<?php
return array(
    'version' => 2,
    'endpoints' => array(
        '*/*' => array(
            'endpoint' => '{service}.{region}.nifty.com'
        ),
        'east-1/s3' => array(
            'endpoint' => 'ncss.nifty.com'
        ),
        'east-2/s3' => array(
            'endpoint' => 'east-2-ncss.nifty.com'
        ),
        'west-1/s3' => array(
            'endpoint' => 'west-1-ncss.nifty.com'
        ),
        '*/rdb' => array(
            'endpoint' => '{service}.jp-{region}.api.cloud.nifty.com'
        ),
        '*/mq' => array(
            'endpoint' => '{service}.jp-{region}.api.cloud.nifty.com'
        ),
        '*/ess' => array(
            'endpoint' => 'ess.api.cloud.nifty.com'
        ),
        '*/dns' => array(
            'endpoint' => 'dns.api.cloud.nifty.com'
        ),
    )
);
