<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MacOSCustomConfiguration resources
 *
 * Available select fields:
 * - payload
 * - payloadFileName
 * - payloadName
 */
class MacOSCustomConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MacOSCustomConfiguration
     */
    public const FIELD_PAYLOAD = 'payload';
    public const FIELD_PAYLOAD_FILE_NAME = 'payloadFileName';
    public const FIELD_PAYLOAD_NAME = 'payloadName';

    /**
     * Select specific MacOSCustomConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
