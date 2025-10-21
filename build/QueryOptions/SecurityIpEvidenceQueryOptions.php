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
    /**
     * Available select fields for SecurityIpEvidence
     */
    public const FIELD_COUNTRY_LETTER_CODE = 'countryLetterCode';
    public const FIELD_IP_ADDRESS = 'ipAddress';
    public const FIELD_LOCATION = 'location';
    public const FIELD_STREAM = 'stream';

    /**
     * Select specific SecurityIpEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
