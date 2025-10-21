<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintCertificateSigningRequest resources
 *
 * Available select fields:
 * - content
 * - transportKey
 */
class PrintCertificateSigningRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintCertificateSigningRequest
     */
    public const FIELD_CONTENT = 'content';
    public const FIELD_TRANSPORT_KEY = 'transportKey';

    /**
     * Select specific PrintCertificateSigningRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
