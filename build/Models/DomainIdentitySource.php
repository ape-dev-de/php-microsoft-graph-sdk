<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DomainIdentitySource
 */
class DomainIdentitySource
{
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
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['domainName'])) {
            $this->domainName = $data['domainName'];
        }
    }
}
