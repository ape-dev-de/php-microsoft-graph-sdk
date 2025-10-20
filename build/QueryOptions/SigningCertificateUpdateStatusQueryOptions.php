<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SigningCertificateUpdateStatus resources
 *
 * Available select fields:
 * - certificateUpdateResult
 * - lastRunDateTime
 */
class SigningCertificateUpdateStatusQueryOptions extends QueryOptions
{
    public const FIELD_CERTIFICATE_UPDATE_RESULT = 'certificateUpdateResult';
    public const FIELD_LAST_RUN_DATE_TIME = 'lastRunDateTime';

    /**
     * Select specific SigningCertificateUpdateStatus properties
     * 
     * @param array<string> $select Use SigningCertificateUpdateStatusQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
