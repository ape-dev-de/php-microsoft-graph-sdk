<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsInformationProtectionDataRecoveryCertificate resources
 *
 * Available select fields:
 * - certificate
 * - description
 * - expirationDateTime
 * - subjectName
 */
class WindowsInformationProtectionDataRecoveryCertificateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsInformationProtectionDataRecoveryCertificate
     */
    public const FIELD_CERTIFICATE = 'certificate';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_EXPIRATION_DATE_TIME = 'expirationDateTime';
    public const FIELD_SUBJECT_NAME = 'subjectName';

    /**
     * Select specific WindowsInformationProtectionDataRecoveryCertificate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
