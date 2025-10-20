<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceHostedMediaConfig resources
 *
 * Available select fields:
 * - preFetchMedia
 */
class ServiceHostedMediaConfigQueryOptions extends QueryOptions
{
    public const FIELD_PRE_FETCH_MEDIA = 'preFetchMedia';

    /**
     * Select specific ServiceHostedMediaConfig properties
     * 
     * @param array<string> $select Use ServiceHostedMediaConfigQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
