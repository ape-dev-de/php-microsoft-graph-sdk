<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Privacy resources
 *
 * Available select fields:
 * - subjectRightsRequests
 */
class PrivacyQueryOptions extends QueryOptions
{
    public const FIELD_SUBJECT_RIGHTS_REQUESTS = 'subjectRightsRequests';

    /**
     * Select specific Privacy properties
     * 
     * @param array<string> $select Use PrivacyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
