<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UploadSession resources
 *
 * Available select fields:
 * - expirationDateTime
 * - nextExpectedRanges
 * - uploadUrl
 */
class UploadSessionQueryOptions extends QueryOptions
{
    public const FIELD_EXPIRATION_DATE_TIME = 'expirationDateTime';
    public const FIELD_NEXT_EXPECTED_RANGES = 'nextExpectedRanges';
    public const FIELD_UPLOAD_URL = 'uploadUrl';

    /**
     * Select specific UploadSession properties
     * 
     * @param array<string> $select Use UploadSessionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
