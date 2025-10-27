<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ImplicitGrantSettings
 */
class ImplicitGrantSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Specifies whether this web application can request an access token using the OAuth 2.0 implicit flow. */
    public ?bool $enableAccessTokenIssuance = null;

    /** Specifies whether this web application can request an ID token using the OAuth 2.0 implicit flow. */
    public ?bool $enableIdTokenIssuance = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['enableAccessTokenIssuance'])) {
            $this->enableAccessTokenIssuance = $data['enableAccessTokenIssuance'];
        }
        if (isset($data['enableIdTokenIssuance'])) {
            $this->enableIdTokenIssuance = $data['enableIdTokenIssuance'];
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
