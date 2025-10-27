<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10NetworkProxyServer
 */
class Windows10NetworkProxyServer
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Address to the proxy server. Specify an address in the format [':'] */
    public ?string $address = null;

    /** 
     * Addresses that should not use the proxy server. The system will not use the proxy server for addresses beginning with what is specified in this node.
     * @var string[]
     */
    public array $exceptions = [];

    /** Specifies whether the proxy server should be used for local (intranet) addresses. */
    public ?bool $useForLocalAddresses = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['address'])) {
            $this->address = $data['address'];
        }
        if (isset($data['exceptions'])) {
            $this->exceptions = $data['exceptions'];
        }
        if (isset($data['useForLocalAddresses'])) {
            $this->useForLocalAddresses = $data['useForLocalAddresses'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
