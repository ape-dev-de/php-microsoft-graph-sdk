<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SocialIdentitySource
 */
class SocialIdentitySource
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['socialIdentitySourceType'])) {
            $this->socialIdentitySourceType = is_array($data['socialIdentitySourceType']) ? new SocialIdentitySourceType($data['socialIdentitySourceType']) : $data['socialIdentitySourceType'];
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
