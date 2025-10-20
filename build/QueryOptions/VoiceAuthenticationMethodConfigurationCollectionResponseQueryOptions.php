<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VoiceAuthenticationMethodConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class VoiceAuthenticationMethodConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific VoiceAuthenticationMethodConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use VoiceAuthenticationMethodConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
