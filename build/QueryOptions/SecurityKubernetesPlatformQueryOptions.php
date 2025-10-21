<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityKubernetesPlatform resources
 *
 * Available select fields:
 */
class SecurityKubernetesPlatformQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityKubernetesPlatform
     */

    /**
     * Select specific SecurityKubernetesPlatform properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
