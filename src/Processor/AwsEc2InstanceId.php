<?php

namespace TimRutte\Laminas\Log\Processor;

use Laminas\Log\Processor\ProcessorInterface;

class AwsEc2InstanceId implements ProcessorInterface
{
    public function process(array $event) :array
    {
        if (!isset($event['instance_id'])) {
            $instanceId = @file_get_contents("http://instance-data/latest/meta-data/instance-id");
            if ($instanceId !== false) {
                $event['instance_id'] = $instanceId;
            }
        }

        return $event;
    }
}