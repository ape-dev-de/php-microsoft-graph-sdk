<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PronounsSettings
 */
class PronounsSettings
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** true to enable pronouns in the organization; otherwise, false. The default value is false, and pronouns are disabled. */
    public ?bool $isEnabledInOrganization = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['isEnabledInOrganization'])) {
            $this->isEnabledInOrganization = $data['isEnabledInOrganization'];
        }
    }
}
