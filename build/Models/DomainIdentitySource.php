<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DomainIdentitySource
 */
class DomainIdentitySource
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The name of the identity source, typically also the domain name. Read only. */
    public ?string $displayName = null;

    /** The domain name. Read only. */
    public ?string $domainName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['domainName'])) {
            $this->domainName = $data['domainName'];
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
