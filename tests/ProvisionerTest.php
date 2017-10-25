<?php

namespace Fortifi\Tests\Provisioning;

use Fortifi\Provisioning\Provisioner;
use Fortifi\Provisioning\ProvisioningRequest;
use Fortifi\Provisioning\RequestType;
use Fortifi\Provisioning\TransportProperty;
use PHPUnit\Framework\TestCase;

class ProvisionerTest extends TestCase
{
  public function testTransport()
  {
    $request = new ProvisioningRequest();
    $request->type = RequestType::ACTIVATE;
    $request->orderFid = 'FID:ORD:1505751823:OGmYqUzfJVtKr';
    $request->productFid = 'FID:PROD:1505752039:z5DvVoA3HuAF';
    $request->priceFid = 'FID:PROD:PRCE:1505752100:ZJneYwx';
    $request->startTimestamp = 1507670331;
    $request->renewTimestamp = 1507670315;
    $request->endTimestamp = 1507670312;
    $request->configuration = ['abc' => 'def'];
    $request->cycle = 'P1M';
    $request->timestamp = 1507670311;
    $request->customerFid = 'FID:CST:1507118063:PtncnWwxy13m2';
    $request->subscriptionFid = 'FID:PCHS:SUBS:1505754091:z45Z1gX';

    $forTransport = Provisioner::toJson($request);
    $decodeRequest = Provisioner::fromJsonRequest($forTransport);

    $this->assertEquals($request->type, $decodeRequest->type);
    $this->assertEquals($request->orderFid, $decodeRequest->orderFid);
    $this->assertEquals($request->productFid, $decodeRequest->productFid);
    $this->assertEquals($request->priceFid, $decodeRequest->priceFid);
    $this->assertEquals($request->startTimestamp, $decodeRequest->startTimestamp);
    $this->assertEquals($request->renewTimestamp, $decodeRequest->renewTimestamp);
    $this->assertEquals($request->endTimestamp, $decodeRequest->endTimestamp);
    $this->assertEquals($request->configuration, $decodeRequest->configuration);
    $this->assertEquals($request->cycle, $decodeRequest->cycle);
    $this->assertEquals($request->timestamp, $decodeRequest->timestamp);
    $this->assertEquals($request->customerFid, $decodeRequest->customerFid);
    $this->assertEquals($request->subscriptionFid, $decodeRequest->subscriptionFid);
    $this->assertCount(count($request->properties), $decodeRequest->properties);
    $this->assertContainsOnlyInstancesOf(TransportProperty::class, $decodeRequest->properties);
  }
}
