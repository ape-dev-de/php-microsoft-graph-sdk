<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessRoot resources
 *
 * Available select fields:
 * - authenticationContextClassReferences
 * - authenticationStrength
 * - namedLocations
 * - policies
 * - templates
 */
class ConditionalAccessRootQueryOptions extends QueryOptions
{
    public const FIELD_AUTHENTICATION_CONTEXT_CLASS_REFERENCES = 'authenticationContextClassReferences';
    public const FIELD_AUTHENTICATION_STRENGTH = 'authenticationStrength';
    public const FIELD_NAMED_LOCATIONS = 'namedLocations';
    public const FIELD_POLICIES = 'policies';
    public const FIELD_TEMPLATES = 'templates';

    /**
     * Select specific ConditionalAccessRoot properties
     * 
     * @param array<string> $select Use ConditionalAccessRootQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
