<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Diagnostic resources
 *
 * Available select fields:
 * - message
 * - url
 */
class DiagnosticQueryOptions extends QueryOptions
{
    public const FIELD_MESSAGE = 'message';
    public const FIELD_URL = 'url';

    /**
     * Select specific Diagnostic properties
     * 
     * @param array<string> $select Use DiagnosticQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
