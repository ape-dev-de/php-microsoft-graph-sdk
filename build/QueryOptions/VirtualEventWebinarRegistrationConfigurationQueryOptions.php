<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventWebinarRegistrationConfiguration resources
 *
 * Available select fields:
 * - isManualApprovalEnabled
 * - isWaitlistEnabled
 */
class VirtualEventWebinarRegistrationConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VirtualEventWebinarRegistrationConfiguration
     */
    public const FIELD_IS_MANUAL_APPROVAL_ENABLED = 'isManualApprovalEnabled';
    public const FIELD_IS_WAITLIST_ENABLED = 'isWaitlistEnabled';

    /**
     * Select specific VirtualEventWebinarRegistrationConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
