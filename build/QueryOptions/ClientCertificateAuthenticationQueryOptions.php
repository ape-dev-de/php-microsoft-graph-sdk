<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ClientCertificateAuthentication resources
 *
 * Available select fields:
 */
class ClientCertificateAuthenticationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ClientCertificateAuthentication
     */

    /**
     * Select specific ClientCertificateAuthentication properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
