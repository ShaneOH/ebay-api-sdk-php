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
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    /**
     * @param \DTS\eBaySDK\FindingAPI\Types\MethodOneRequestType $request
     * @return \DTS\eBaySDK\FindingAPI\Types\ComplexType
     */
    public function methodOne(\DTS\eBaySDK\FindingAPI\Types\MethodOneRequestType $request)
    {
        return $this->callOperation(
            'MethodOne',
            $request,
            '\DTS\eBaySDK\FindingAPI\Types\ComplexType'
        );
    }

    /**
     * @param \DTS\eBaySDK\FindingAPI\Types\MethodTwoRequestType $request
     * @return \DTS\eBaySDK\FindingAPI\Types\ComplexType
     */
    public function methodTwo(\DTS\eBaySDK\FindingAPI\Types\MethodTwoRequestType $request)
    {
        return $this->callOperation(
            'methodTwo',
            $request,
            '\DTS\eBaySDK\FindingAPI\Types\ComplexType'
        );
    }
}

