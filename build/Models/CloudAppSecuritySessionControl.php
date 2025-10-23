<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudAppSecuritySessionControl
 */
class CloudAppSecuritySessionControl
{
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
        if (isset($data['isEnabled'])) {
            $this->isEnabled = $data['isEnabled'];
        }
        if (isset($data['cloudAppSecurityType'])) {
            $this->cloudAppSecurityType = $data['cloudAppSecurityType'];
        }
    }
}
