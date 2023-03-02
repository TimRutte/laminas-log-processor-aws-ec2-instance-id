<?php

namespace TimRutte\Laminas\Log\Processor;

use Laminas\Log\Processor\ProcessorInterface;

class AwsEc2InstanceId implements ProcessorInterface
{
    public function process(array $event) :array
    {
        if (!isset($event['instance_id'])) {
            $event['instance_id'] = '';
        }

        return $event;
    }
}