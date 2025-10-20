<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ClientCertificateAuthentication resources
 *
 * Available select fields:
 * - certificateList
 */
class ClientCertificateAuthenticationQueryOptions extends QueryOptions
{
    public const FIELD_CERTIFICATE_LIST = 'certificateList';

    /**
     * Select specific ClientCertificateAuthentication properties
     * 
     * @param array<string> $select Use ClientCertificateAuthenticationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
