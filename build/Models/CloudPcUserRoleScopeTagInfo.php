<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcUserRoleScopeTagInfo
 */
class CloudPcUserRoleScopeTagInfo
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Scope tag display name. */
    public ?string $displayName = null;

    /** Scope tag identity. */
    public ?string $roleScopeTagId = null;


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
        if (isset($data['roleScopeTagId'])) {
            $this->roleScopeTagId = $data['roleScopeTagId'];
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
