<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProcessContentResponses resources
 *
 * Available select fields:
 * - requestId
 * - results
 */
class ProcessContentResponsesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProcessContentResponses
     */
    public const FIELD_REQUEST_ID = 'requestId';
    public const FIELD_RESULTS = 'results';

    /**
     * Select specific ProcessContentResponses properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
