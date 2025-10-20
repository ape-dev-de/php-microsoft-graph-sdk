<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityUnclassifiedArtifact resources
 *
 * Available select fields:
 * - kind
 * - value
 */
class SecurityUnclassifiedArtifactQueryOptions extends QueryOptions
{
    public const FIELD_KIND = 'kind';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityUnclassifiedArtifact properties
     * 
     * @param array<string> $select Use SecurityUnclassifiedArtifactQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
