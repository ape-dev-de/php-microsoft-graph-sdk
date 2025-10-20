<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserConsentRequest resources
 *
 * Available select fields:
 * - reason
 * - approval
 */
class UserConsentRequestQueryOptions extends QueryOptions
{
    public const FIELD_REASON = 'reason';
    public const FIELD_APPROVAL = 'approval';

    /**
     * Select specific UserConsentRequest properties
     * 
     * @param array<string> $select Use UserConsentRequestQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
