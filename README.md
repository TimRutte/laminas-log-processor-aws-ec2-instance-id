# laminas-log-processor-aws-ec2-instance-id

## Installation

Run the following to install this library:

```bash
$ composer require timrutte/laminas-log-processor-aws-ec2-instance-id
```

## Usage

```php
$logger = new \Laminas\Log\Logger();
$logger->addProcessor(new \TimRutte\Laminas\Log\Processor\AwsEc2InstanceId());
$writer = new \Laminas\Log\Writer\Stream();
$formatter = new \Laminas\Log\Formatter\Json();
$writer->setFormatter($formatter);
$logger->addWriter($writer);
```

## Support

- [Issues](https://github.com/timrutte/laminas-log-processor-aws-ec2-instance-id/issues/)

