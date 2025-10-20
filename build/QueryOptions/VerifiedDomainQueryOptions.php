<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VerifiedDomain resources
 *
 * Available select fields:
 * - capabilities
 * - isDefault
 * - isInitial
 * - name
 * - type
 */
class VerifiedDomainQueryOptions extends QueryOptions
{
    public const FIELD_CAPABILITIES = 'capabilities';
    public const FIELD_IS_DEFAULT = 'isDefault';
    public const FIELD_IS_INITIAL = 'isInitial';
    public const FIELD_NAME = 'name';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific VerifiedDomain properties
     * 
     * @param array<string> $select Use VerifiedDomainQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
