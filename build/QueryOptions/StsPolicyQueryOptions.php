<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for StsPolicy resources
 *
 * Available select fields:
 * - definition
 * - isOrganizationDefault
 * - appliesTo
 */
class StsPolicyQueryOptions extends QueryOptions
{
    public const FIELD_DEFINITION = 'definition';
    public const FIELD_IS_ORGANIZATION_DEFAULT = 'isOrganizationDefault';
    public const FIELD_APPLIES_TO = 'appliesTo';

    /**
     * Select specific StsPolicy properties
     * 
     * @param array<string> $select Use StsPolicyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
