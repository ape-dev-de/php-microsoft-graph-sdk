<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudAppSecuritySessionControl
 */
class CloudAppSecuritySessionControl
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Specifies whether the session control is enabled. */
    public ?bool $isEnabled = null;

    /** 
     * Possible values are: mcasConfigured, monitorOnly, blockDownloads, unknownFutureValue. For more information, see Deploy Conditional Access App Control for featured apps.
     * @var CloudAppSecuritySessionControlType|\stdClass|null
     */
    public mixed $cloudAppSecurityType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['isEnabled'])) {
            $this->isEnabled = $data['isEnabled'];
        }
        if (isset($data['cloudAppSecurityType'])) {
            $this->cloudAppSecurityType = is_array($data['cloudAppSecurityType']) ? new CloudAppSecuritySessionControlType($data['cloudAppSecurityType']) : $data['cloudAppSecurityType'];
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
