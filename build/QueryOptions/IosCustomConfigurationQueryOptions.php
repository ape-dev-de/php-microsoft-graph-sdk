<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosCustomConfiguration resources
 *
 * Available select fields:
 * - payload
 * - payloadFileName
 * - payloadName
 */
class IosCustomConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_PAYLOAD = 'payload';
    public const FIELD_PAYLOAD_FILE_NAME = 'payloadFileName';
    public const FIELD_PAYLOAD_NAME = 'payloadName';

    /**
     * Select specific IosCustomConfiguration properties
     * 
     * @param array<string> $select Use IosCustomConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
