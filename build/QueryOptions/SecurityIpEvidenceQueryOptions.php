<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityIpEvidence resources
 *
 * Available select fields:
 * - countryLetterCode
 * - ipAddress
 * - location
 * - stream
 */
class SecurityIpEvidenceQueryOptions extends QueryOptions
{
    public const FIELD_COUNTRY_LETTER_CODE = 'countryLetterCode';
    public const FIELD_IP_ADDRESS = 'ipAddress';
    public const FIELD_LOCATION = 'location';
    public const FIELD_STREAM = 'stream';

    /**
     * Select specific SecurityIpEvidence properties
     * 
     * @param array<string> $select Use SecurityIpEvidenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
