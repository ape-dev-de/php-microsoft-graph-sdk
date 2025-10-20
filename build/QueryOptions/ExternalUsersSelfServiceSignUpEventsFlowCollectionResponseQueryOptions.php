<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalUsersSelfServiceSignUpEventsFlowCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ExternalUsersSelfServiceSignUpEventsFlowCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ExternalUsersSelfServiceSignUpEventsFlowCollectionResponse properties
     * 
     * @param array<string> $select Use ExternalUsersSelfServiceSignUpEventsFlowCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
