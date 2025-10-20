<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RestrictAccessActionBase resources
 *
 * Available select fields:
 * - restrictionAction
 */
class RestrictAccessActionBaseQueryOptions extends QueryOptions
{
    public const FIELD_RESTRICTION_ACTION = 'restrictionAction';

    /**
     * Select specific RestrictAccessActionBase properties
     * 
     * @param array<string> $select Use RestrictAccessActionBaseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
