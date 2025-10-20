<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatRestrictions resources
 *
 * Available select fields:
 * - allowTextOnly
 */
class ChatRestrictionsQueryOptions extends QueryOptions
{
    public const FIELD_ALLOW_TEXT_ONLY = 'allowTextOnly';

    /**
     * Select specific ChatRestrictions properties
     * 
     * @param array<string> $select Use ChatRestrictionsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
