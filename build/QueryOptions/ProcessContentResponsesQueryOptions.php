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
    public const FIELD_REQUEST_ID = 'requestId';
    public const FIELD_RESULTS = 'results';

    /**
     * Select specific ProcessContentResponses properties
     * 
     * @param array<string> $select Use ProcessContentResponsesQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
