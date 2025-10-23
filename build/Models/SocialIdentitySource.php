<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SocialIdentitySource
 */
class SocialIdentitySource
{
    /**  */
    public ?string $displayName = null;

    /**  */
    public ?SocialIdentitySourceType $socialIdentitySourceType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['socialIdentitySourceType'])) {
            $this->socialIdentitySourceType = is_array($data['socialIdentitySourceType']) ? new SocialIdentitySourceType($data['socialIdentitySourceType']) : $data['socialIdentitySourceType'];
        }
    }
}
