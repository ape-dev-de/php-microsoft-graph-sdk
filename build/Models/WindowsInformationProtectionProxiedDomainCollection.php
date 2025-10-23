<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionProxiedDomainCollection
 */
class WindowsInformationProtectionProxiedDomainCollection
{
    /** Display name */
    public ?string $displayName = null;

    /** 
     * Collection of proxied domains
     * @var ProxiedDomain[]
     */
    public array $proxiedDomains = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['proxiedDomains'])) {
            $this->proxiedDomains = $data['proxiedDomains'];
        }
    }
}
