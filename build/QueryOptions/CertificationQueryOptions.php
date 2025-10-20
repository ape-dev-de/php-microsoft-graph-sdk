<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Certification resources
 *
 * Available select fields:
 * - certificationDetailsUrl
 * - certificationExpirationDateTime
 * - isCertifiedByMicrosoft
 * - isPublisherAttested
 * - lastCertificationDateTime
 */
class CertificationQueryOptions extends QueryOptions
{
    public const FIELD_CERTIFICATION_DETAILS_URL = 'certificationDetailsUrl';
    public const FIELD_CERTIFICATION_EXPIRATION_DATE_TIME = 'certificationExpirationDateTime';
    public const FIELD_IS_CERTIFIED_BY_MICROSOFT = 'isCertifiedByMicrosoft';
    public const FIELD_IS_PUBLISHER_ATTESTED = 'isPublisherAttested';
    public const FIELD_LAST_CERTIFICATION_DATE_TIME = 'lastCertificationDateTime';

    /**
     * Select specific Certification properties
     * 
     * @param array<string> $select Use CertificationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
