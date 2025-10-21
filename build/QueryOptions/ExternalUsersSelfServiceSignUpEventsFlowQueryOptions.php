<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalUsersSelfServiceSignUpEventsFlow resources
 *
 * Available select fields:
 */
class ExternalUsersSelfServiceSignUpEventsFlowQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalUsersSelfServiceSignUpEventsFlow
     */

    /**
     * Select specific ExternalUsersSelfServiceSignUpEventsFlow properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
