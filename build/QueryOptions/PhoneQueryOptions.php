<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Phone resources
 *
 * Available select fields:
 * - language
 * - number
 * - region
 * - type
 */
class PhoneQueryOptions extends QueryOptions
{
    public const FIELD_LANGUAGE = 'language';
    public const FIELD_NUMBER = 'number';
    public const FIELD_REGION = 'region';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific Phone properties
     * 
     * @param array<string> $select Use PhoneQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
