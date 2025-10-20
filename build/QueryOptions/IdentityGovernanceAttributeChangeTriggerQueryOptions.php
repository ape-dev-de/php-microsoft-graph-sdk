<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceAttributeChangeTrigger resources
 *
 * Available select fields:
 * - triggerAttributes
 */
class IdentityGovernanceAttributeChangeTriggerQueryOptions extends QueryOptions
{
    public const FIELD_TRIGGER_ATTRIBUTES = 'triggerAttributes';

    /**
     * Select specific IdentityGovernanceAttributeChangeTrigger properties
     * 
     * @param array<string> $select Use IdentityGovernanceAttributeChangeTriggerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
