<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnAttributeCollectionExternalUsersSelfServiceSignUp resources
 *
 * Available select fields:
 */
class OnAttributeCollectionExternalUsersSelfServiceSignUpQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnAttributeCollectionExternalUsersSelfServiceSignUp
     */

    /**
     * Select specific OnAttributeCollectionExternalUsersSelfServiceSignUp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
