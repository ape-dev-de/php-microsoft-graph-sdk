<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PayloadDetail resources
 *
 * Available select fields:
 * - coachmarks
 * - content
 * - phishingUrl
 */
class PayloadDetailQueryOptions extends QueryOptions
{
    public const FIELD_COACHMARKS = 'coachmarks';
    public const FIELD_CONTENT = 'content';
    public const FIELD_PHISHING_URL = 'phishingUrl';

    /**
     * Select specific PayloadDetail properties
     * 
     * @param array<string> $select Use PayloadDetailQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
