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
    /**
     * Available select fields for ChatRestrictions
     */
    public const FIELD_ALLOW_TEXT_ONLY = 'allowTextOnly';

    /**
     * Select specific ChatRestrictions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
