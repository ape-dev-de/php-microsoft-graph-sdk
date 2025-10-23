<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcUserRoleScopeTagInfo
 */
class CloudPcUserRoleScopeTagInfo
{
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
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['roleScopeTagId'])) {
            $this->roleScopeTagId = $data['roleScopeTagId'];
        }
    }
}
