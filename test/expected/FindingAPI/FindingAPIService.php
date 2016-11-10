<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\FindingAPI\Services;

class FindingAPIService extends \DTS\eBaySDK\FindingAPI\Services\FindingAPIBaseService
{
    const API_VERSION = '123';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \DTS\eBaySDK\FindingAPI\Types\MethodOneRequestType $request
     * @return \DTS\eBaySDK\FindingAPI\Types\MethodOneResponseType
     */
    public function methodOne(\DTS\eBaySDK\FindingAPI\Types\MethodOneRequestType $request)
    {
        return $this->methodOneAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\FindingAPI\Types\MethodOneRequestType $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function methodOneAsync(\DTS\eBaySDK\FindingAPI\Types\MethodOneRequestType $request)
    {
        return $this->callOperationAsync(
            'MethodOne',
            $request,
            '\DTS\eBaySDK\FindingAPI\Types\MethodOneResponseType'
        );
    }

    /**
     * @param \DTS\eBaySDK\FindingAPI\Types\MethodTwoRequestType $request
     * @return \DTS\eBaySDK\FindingAPI\Types\MethodTwoResponseType
     */
    public function methodTwo(\DTS\eBaySDK\FindingAPI\Types\MethodTwoRequestType $request)
    {
        return $this->methodTwoAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\FindingAPI\Types\MethodTwoRequestType $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function methodTwoAsync(\DTS\eBaySDK\FindingAPI\Types\MethodTwoRequestType $request)
    {
        return $this->callOperationAsync(
            'methodTwo',
            $request,
            '\DTS\eBaySDK\FindingAPI\Types\MethodTwoResponseType'
        );
    }
}
