<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SubjectRightsRequestEnumeratedMailboxLocation resources
 *
 * Available select fields:
 * - userPrincipalNames
 */
class SubjectRightsRequestEnumeratedMailboxLocationQueryOptions extends QueryOptions
{
    public const FIELD_USER_PRINCIPAL_NAMES = 'userPrincipalNames';

    /**
     * Select specific SubjectRightsRequestEnumeratedMailboxLocation properties
     * 
     * @param array<string> $select Use SubjectRightsRequestEnumeratedMailboxLocationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
